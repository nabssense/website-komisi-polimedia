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
        $sheet->setCellValue('B1', 'Program Edukasi');
        $sheet->setCellValue('C1', 'NIM');
        $sheet->setCellValue('D1', 'Periode');
        $sheet->setCellValue('E1', 'Skema');
        $sheet->setCellValue('F1', 'Surat Pernyataan');
        $sheet->setCellValue('G1', 'Mengikuti Program MBKM');
        $sheet->setCellValue('H1', 'Aktif Dalam Kegiatan Mahasiswa');
        $sheet->setCellValue('I1', 'Sertifikat Keaktifan');
        $sheet->setCellValue('J1', 'Pernah Mengikuti Kegiatan Lomba Dalam 1 Tahun Terakhir');
        $sheet->setCellValue('K1', 'Nama Lomba');
        $sheet->setCellValue('L1', 'Tingkat');
        $sheet->setCellValue('M1', 'Peringkat');
        $sheet->setCellValue('N1', 'Sertifikat Lomba');

        // Fetch data from database
        $scholarshipFundings = DB::table('scholarship_fundings')
            ->join('users', 'scholarship_fundings.user_id', '=', 'users.id')
            ->join('period_fundings', 'scholarship_fundings.period_id', '=', 'period_fundings.id')
            ->select('users.fullname', 'users.edu_program', 'users.nim', 'period_fundings.name', 'scholarship_fundings.scholarship_type', 'scholarship_fundings.statement_letter', 'scholarship_fundings.mbkm_program', 'scholarship_fundings.student_activity', 'scholarship_fundings.activity_certificate', 'scholarship_fundings.competition_status', 'scholarship_fundings.competition_name', 'scholarship_fundings.competition_level', 'scholarship_fundings.competition_rank', 'scholarship_fundings.competition_certificate')
            ->get();

        $row = 2;
        foreach ($scholarshipFundings as $funding) {
            $sheet->setCellValue('A' . $row, $funding->fullname);
            $sheet->setCellValue('B' . $row, $funding->edu_program);
            $sheet->setCellValue('C' . $row, $funding->nim);
            $sheet->setCellValue('D' . $row, $funding->name);
            $sheet->setCellValue('E' . $row, $funding->scholarship_type);
            $sheet->setCellValue('F' . $row, $funding->statement_letter ? 'www.komisi-polimedia.com/' . $funding->statement_letter : '');
            $sheet->setCellValue('G' . $row, $funding->mbkm_program);
            $sheet->setCellValue('H' . $row, $funding->student_activity);
            $sheet->setCellValue('I' . $row, $funding->activity_certificate ? 'www.komisi-polimedia.com/' . $funding->activity_certificate : '');
            $sheet->setCellValue('J' . $row, $funding->competition_status);
            $sheet->setCellValue('K' . $row, $funding->competition_name);
            $sheet->setCellValue('L' . $row, $funding->competition_level);
            $sheet->setCellValue('M' . $row, $funding->competition_rank);
            $sheet->setCellValue('N' . $row, $funding->competition_certificate ? 'www.komisi-polimedia.com/' . $funding->competition_certificate : '');
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
