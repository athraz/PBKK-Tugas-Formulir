<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('form');
    }

    public function store(Request $request){
        $request->validate(
            [
                'nama' => 'required',
                'email' => 'required',
                'prodi' => 'gt:0',
                'double' => 'required|numeric|between:2.50,99.99',
                'foto' => 'required|mimes:png,jpg,jpeg|max:2048'
            ],
            [
                'nama.required' => 'Masukkan nama anda!',
                'email.required' => 'Masukkan email anda!',
                'prodi.gt' => 'Pilih program studi anda!',
                'double.required' => 'Masukkan nilai anda!',
                'double.between' => 'Nilai harus berada diantara 2.50 dan 9.99!',
                'foto.required' => 'Masukkan foto anda!',
                'foto.mimes' => 'Foto harus berekstensi .png, .jpg, atau .jpeg!',
                'foto.max' => 'Foto melebihi ukuran maksimal 2MB!'
            ]
        );

        $file_foto = $request->file('foto');
        if ($file_foto != NULL){
            $ext = $file_foto->extension();
            $nama_baru = date('ymdhis') . "." . $ext;
            $file_foto->move(public_path('img'), $nama_baru);
        }

        $results = [
            'nama' => $request->nama,
            'email' => $request->email,
            'prodi' => $request->prodi,
            'double' => $request->double,
            'foto' => $nama_baru
        ];

        return redirect('/result')->with(['results' => $results, 'status' => 'Form berhasil disubmit!']);
    }

    public function show(){
        $results = session()->get('results');

        return view('result', [
            'results' => $results
        ]);
    }
}
