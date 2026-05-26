<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with('dosen')->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
{
    $dosen = \App\Models\Dosen::all();
    return view('mahasiswa.create', compact('dosen'));
}

    public function store(Request $request)
{
    \App\Models\Mahasiswa::create([
        'nim' => $request->nim,
        'nama' => $request->nama,
        'jurusan' => $request->jurusan,
        'dosen_id' => $request->dosen_id
    ]);

    return redirect('/mahasiswa');
}
}