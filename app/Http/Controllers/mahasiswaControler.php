<?php

namespace App\Http\Controllers;

use App\Models\mahasiswaModel;
use Illuminate\Http\Request;

class mahasiswaControler extends Controller
{
    function index()
    {
        $data = mahasiswaModel::orderBy('nim', 'desc')->paginate(5);
        return view('mahasiswa', compact('data'));
    }

    function create()
    {
        return view('create_mahasiswa');
    }

    function store(Request $request)
    {
        $data = [
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'jurusan' => $request->jurusan,
            'alamat' => $request->alamat,
            'tgl_lahir' => $request->tgl_lahir,
            'jk' => $request->jk
        ];
        $simpan = mahasiswaModel::create($data);
        return redirect()->to('mahasiswa')->with('success', 'Berhasil menambahkan data');
    }
}
