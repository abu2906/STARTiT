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

        return view('TambahPekerjaan', ['jobs' => $jobs]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);

        // Simpan pekerjaan baru ke dalam database
        Job::create([
            'user_id' => auth()->id(), // ID pengguna yang sedang login
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        return redirect()->back()->with('success', 'Pekerjaan berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);

        // Cari pekerjaan berdasarkan ID
        $job = Job::findOrFail($id);

        // Perbarui data pekerjaan
        $job->update([
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
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
