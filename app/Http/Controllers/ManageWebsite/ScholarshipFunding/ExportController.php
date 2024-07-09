<?php

namespace App\Http\Controllers\ManageWebsite\ScholarshipFunding;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ExportController extends Controller
{
    public function exportExcel()
    {
        $spreadsheet = new Spreadsheet();
        $spreadsheet->getDefaultStyle()->getFont()->setName('Arial');
        $sheet = $spreadsheet->getActiveSheet();
        
        // Set header row
        $sheet->setCellValue('A1', 'Nama Lengkap');
        $sheet->setCellValue('B1', 'NIM');
        $sheet->setCellValue('C1', 'NIK');
        $sheet->setCellValue('D1', 'Nomor WhatsApp');
        $sheet->setCellValue('E1', 'Kampus Regional');
        $sheet->setCellValue('F1', 'Program Edukasi');
        $sheet->setCellValue('G1', 'Periode');
        $sheet->setCellValue('H1', 'Skema');
        $sheet->setCellValue('I1', 'Surat Pernyataan');
        $sheet->setCellValue('J1', 'Mengikuti Program MBKM');
        $sheet->setCellValue('K1', 'Aktif Dalam Kegiatan Mahasiswa');
        $sheet->setCellValue('L1', 'Sertifikat Keaktifan');
        $sheet->setCellValue('M1', 'Pernah Mengikuti Kegiatan Lomba Dalam 1 Tahun Terakhir');
        $sheet->setCellValue('N1', 'Nama Lomba');
        $sheet->setCellValue('O1', 'Tingkat');
        $sheet->setCellValue('P1', 'Peringkat');
        $sheet->setCellValue('Q1', 'Sertifikat Lomba');

        // Fetch data from database
        $scholarshipFundings = DB::table('scholarship_fundings')
            ->join('users', 'scholarship_fundings.user_id', '=', 'users.id')
            ->join('period_fundings', 'scholarship_fundings.period_id', '=', 'period_fundings.id')
            ->select('users.fullname', 'users.nim', 'users.nik', 'users.number_wa', 'users.regional_campus', 'users.edu_program', 'period_fundings.name', 'scholarship_fundings.scholarship_type', 'scholarship_fundings.statement_letter', 'scholarship_fundings.mbkm_program', 'scholarship_fundings.student_activity', 'scholarship_fundings.activity_certificate', 'scholarship_fundings.competition_status', 'scholarship_fundings.competition_name', 'scholarship_fundings.competition_level', 'scholarship_fundings.competition_rank', 'scholarship_fundings.competition_certificate')
            ->get();

        $row = 2;
        foreach ($scholarshipFundings as $funding) {
            $sheet->setCellValue('A' . $row, $funding->fullname);
            $sheet->setCellValue('B' . $row, $funding->nim);
            $sheet->setCellValue('C' . $row, $funding->nik);
            $sheet->setCellValue('D' . $row, $funding->number_wa);
            $sheet->setCellValue('E' . $row, $funding->regional_campus);
            $sheet->setCellValue('F' . $row, $funding->edu_program);
            $sheet->setCellValue('G' . $row, $funding->name);
            $sheet->setCellValue('H' . $row, $funding->scholarship_type);
            $sheet->setCellValue('I' . $row, $funding->statement_letter ? 'www.komisi-polimedia.com/storage/' . $funding->statement_letter : '');
            $sheet->setCellValue('J' . $row, $funding->mbkm_program);
            $sheet->setCellValue('K' . $row, $funding->student_activity);
            $sheet->setCellValue('L' . $row, $funding->activity_certificate ? 'www.komisi-polimedia.com/storage/' . $funding->activity_certificate : '');
            $sheet->setCellValue('M' . $row, $funding->competition_status);
            $sheet->setCellValue('N' . $row, $funding->competition_name);
            $sheet->setCellValue('O' . $row, $funding->competition_level);
            $sheet->setCellValue('P' . $row, $funding->competition_rank);
            $sheet->setCellValue('Q' . $row, $funding->competition_certificate ? 'www.komisi-polimedia.com/storage/' . $funding->competition_certificate : '');
            $row++;
        }

        $writer = new Xlsx($spreadsheet);

        // Create the response
        $response = new StreamedResponse(function() use ($writer) {
            $writer->save('php://output');
        });

        // Set headers for download
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment;filename="scholarship_fundings.xlsx"');
        $response->headers->set('Cache-Control', 'max-age=0');

        return $response;
    }
}
