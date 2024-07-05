<?php

namespace App\Http\Controllers\ManageWebsite\ScholarshipFunding;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PeriodFunding;
use App\Models\ScholarshipFunding;
use App\Http\Controllers\Controller;
use App\Http\Requests\SholarshipFunding\ScholarshipFundingRequest;
use App\Http\Requests\ManageWebsite\ScholarshipFunding\PeriodRequest;
use App\Http\Requests\ManageWebsite\ScholarshipFunding\PeriodFundingRequest;

class PeriodFundingController extends Controller
{
    //
    public function index()
    {
        $periods = PeriodFunding::all();
        return view('pages.user.kelola-web.pengajuan-pencairan.periode.index', [
            "title" => "Website Komisi | Kelola Pengajuan Pencairan",
            "active" => "Kelola Pengajuan Pencairan",
            'periods' => $periods,
        ]);
    }

    public function create()
    {
        $periods = PeriodFunding::all(); // Ambil semua periode
        return view('pages.user.kelola-web.pengajuan-pencairan.periode.tambah', [
            "title" => "Website Komisi | Kelola Pengajuan Pencairan",
            "active" => "Kelola Pengajuan Pencairan",
            'periods' => $periods, // Kirimkan variabel $periods ke view
        ]);
    }

    public function store(PeriodFundingRequest $request)
    {
        $validated = $request->validated();
        $slug = Str::slug($validated['name']);
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('image/period-fundings', 'public');
        }
        $validated['slug'] = $slug;
        PeriodFunding::create($validated);
       
        return redirect()->route('kelola.pencairan.periode.index')->with('success', 'Periode pencairan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $period = PeriodFunding::findOrFail($id);
        return view('pages.user.kelola-web.pengajuan-pencairan.periode.ubah', [
            "title" => "Website Komisi | Kelola Pengajuan Pencairan",
            "active" => "Kelola Pengajuan Pencairan",
            'period' => $period,
        ]);
    }

    public function update(PeriodFundingRequest $request, $id)
    {
        $validated = $request->validated();
        $slug = Str::slug($validated['name']);
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('image/period-fundings', 'public');
        }
        $validated['slug'] = $slug;
        PeriodFunding::create($validated);

        return redirect()->route('kelola.pencairan.periode.index')->with('success', 'Periode pencairan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $period = PeriodFunding::findOrFail($id);
        $period->delete();

        return redirect()->route('kelola.pencairan.periode.index')->with('success', 'Periode pencairan berhasil dihapus.');
    }
}
