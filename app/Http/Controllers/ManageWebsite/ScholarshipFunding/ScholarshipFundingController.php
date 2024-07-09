<?php

namespace App\Http\Controllers\ManageWebsite\ScholarshipFunding;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Http\Request;
use App\Models\ScholarshipFunding;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ManageWebsite\ScholarshipFunding\ScholarshipFundingRequest;
use App\Models\PeriodFunding;

class ScholarshipFundingController extends Controller
{
    public function form(string $slug)
    {
        $activePeriod = PeriodFunding::where('slug', $slug)->first();
        // Cek role pengguna
       
        $user = Auth::user();
        return view('pages.user.kelola-web.pengajuan-pencairan.form', [
            "title" => "Form Pengajuan Pencairan",
            "active" => "Form Pengajuan Pencairan",
            "user" => $user,
            "periodId" => $activePeriod->id, // Kirim period_id ke view
        ]);
    }

    public function store(ScholarshipFundingRequest $request)
    {
        // Validate the incoming request
        $validatedData = $request->validated();

        if (Auth::check()) {
            if (Auth::user()->user_type !== 'Mahasiswa') {
                return redirect()->route('beranda.index')->with('error', 'Anda bukan mahasiswa, Anda tidak diizinkan mengirim formulir.');
            }
        } else {
            // Jika belum login, arahkan ke halaman login dengan pesan error
            return redirect()->route('auth.masuk.index')->with('error', 'Anda belum login, silakan login terlebih dahulu.');
        }

        // Process and store uploaded files (statement_letter and activity_certificate)
        if ($request->hasFile('statement_letter')) {
            $validatedData['statement_letter'] = $request->file('statement_letter')->store('scholarship_fundings', 'public');
        }

        if ($request->hasFile('activity_certificate')) {
            $validatedData['activity_certificate'] = $request->file('activity_certificate')->store('scholarship_fundings', 'public');
        }
        if ($request->hasFile('activity_certificate')) {
            $validatedData['competition_certificate'] = $request->file('competition_certificate')->store('scholarship_fundings', 'public');
        }

        // Set user_id based on authenticated user
        $validatedData['user_id'] = auth()->user()->id;

        // Validate if the user has already applied for this period
        $existingApplication = ScholarshipFunding::where('user_id', $validatedData['user_id'])
            ->where('period_id', $validatedData['period_id'])
            ->first();

        if ($existingApplication) {
            return redirect()->back()->with('error', 'Anda sudah mengajukan beasiswa untuk periode ini.');
        }

        // Create a new entry in the database
        $scholarshipFunding = ScholarshipFunding::create($validatedData);

        return redirect()->back()->with('success', 'Pengajuan pencairan beasiswa berhasil diajukan.');
    }


    public function index($category = null)
    {
        $categories = PeriodFunding::all();
        $scholarshipFundings = ScholarshipFunding::all(); // Adjust query if needed

        if ($category) {
            $withCategory = PeriodFunding::where('slug', $category)->first();

            if (!$withCategory) {
                abort(404, 'Kategori tidak ditemukan');
            }

            $scholarshipFundings = $withCategory->scholarshipFundings;
        } else {
            $withCategory = null; // Optional: Handle case when no category is provided
        }

        return view('pages.user.kelola-web.pengajuan-pencairan.index', [
            "title" => "Website Komisi | Kelola Pengajuan Pencairan",
            "active" => "Kelola Pengajuan Pencairan",
            "scholarshipFundings" => $scholarshipFundings,
            "categories" => $categories,
            'withCategory' => $withCategory,
        ]);
    }

    // Adjusted kategori method
    public function kategori($category)
    {
        // Cari period funding dengan slug yang sesuai
        $periodFunding = PeriodFunding::where('slug', $category)->first();
        $categories = PeriodFunding::all();
        // Jika tidak ditemukan, tampilkan halaman 404
        if (!$periodFunding) {
            abort(404, 'Kategori tidak ditemukan');
        }

        // Ambil ID dari period funding yang ditemukan
        $periodId = $periodFunding->id;

        // Ambil scholarship fundings berdasarkan periodenya
        $scholarships = ScholarshipFunding::where('period_id', $periodId)->get();

        // Kembalikan view dengan data scholarship fundings dan period funding
        return view('pages.user.kelola-web.pengajuan-pencairan.index', [
            'title' => 'Website Komisi | Kelola Pengajuan Pencairan',
            'active' => 'Kelola Pengajuan Pencairan',
            "categories" => $categories,
            'scholarshipFundings' => $scholarships,
            'withCategory' => $periodFunding,
        ]);
    }



    public function exportToExcel(Request $request)
    {
        // Ambil data scholarship fundings yang ditampilkan di halaman saat ini
       // Ambil data scholarship fundings yang dipilih untuk diekspor
       $selectedItems = $request->input('selectedItems', []);

       // Ambil data sesuai dengan kategori atau periode yang dipilih
       $scholarshipFundings = ScholarshipFunding::whereIn('id', $selectedItems)->get();

        // Inisialisasi spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Header kolom
        $sheet->setCellValue('A1', 'Nama Mahasiswa');
        $sheet->setCellValue('B1', 'Program Studi');
        // Tambahkan kolom lain sesuai kebutuhan

        // Data dari database
        $row = 2;
        foreach ($scholarshipFundings as $funding) {
            $sheet->setCellValue('A' . $row, $funding->user->fullname);
            $sheet->setCellValue('B' . $row, $funding->user->study_program);
            // Tambahkan data lain sesuai kebutuhan

            $row++;
        }

        // Nama file dan jenis output
        $fileName = 'scholarship_fundings.xlsx';

        // Set header untuk download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $fileName . '"');
        header('Cache-Control: max-age=0');

        // Output spreadsheet dalam format Excel (Xlsx)
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }
}
