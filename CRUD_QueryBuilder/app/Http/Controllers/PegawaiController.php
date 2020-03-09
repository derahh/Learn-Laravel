<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        //mengambil data dai table pegawai
        $pegawai = DB::table('pegawai')->get();

        //mengirim data pegawai ke view index
        return view('index', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {
        //mengambil view tambah
        return view('tambah');
    }

    public function store(Request $request)
    {
        //insert ke data ke table pegawai
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        //alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    //method untuk edit data pegawai
    public function edit($id)
    {
        //mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();

        //passing data pegawai yang didapat ke view edit.blade.php
        return view('edit', ['pegawai' => $pegawai]);
    }

    //method untuk update data pegawai
    public function update(Request $request)
    {
        //update data pegawai
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        //alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }
}
