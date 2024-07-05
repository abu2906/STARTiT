<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Job;

class PekerjaController extends Controller
{
    public function index()
    {
        // Ambil id pengguna yang sedang login
        $userId = auth()->id();

        // Ambil pekerjaan yang dimiliki oleh pengguna tersebut
        $jobs = Job::where('user_id', $userId)->get();

        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required',
            'job_description' => 'required',
            'job_category' => 'required',
            'job_location' => 'required',
        ]);

        // Simpan pekerjaan baru ke dalam database
        Job::create([
            'user_id' => auth()->id(), // ID pengguna yang sedang login
            'job_title' => $request->job_title,
            'job_description' => $request->job_description,
            'job_category' => $request->job_category,
            'job_location' => $request->job_location,
        ]);

        return redirect()->back()->with('success', 'Pekerjaan berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'job_title' => 'required',
            'job_description' => 'required',
            'job_category' => 'required',
            'job_location' => 'required',
        ]);

        // Cari pekerjaan berdasarkan ID
        $job = Job::findOrFail($id);

        // Perbarui data pekerjaan
        $job->update([
            'job_title' => $request->job_title,
            'job_description' => $request->job_description,
            'job_category' => $request->job_category,
            'job_location' => $request->job_location,
        ]);

        return redirect()->back()->with('success', 'Pekerjaan berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Hapus pekerjaan berdasarkan ID
        Job::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Pekerjaan berhasil dihapus');
    }
}
