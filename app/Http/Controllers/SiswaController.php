<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data_siswa = \App\Siswa::all();                                    //membuat variabel baru yang berisi siswa
        return view('siswa.index',['data_siswa' => $data_siswa]);
    }

    public function back()
    {
        return redirect('/siswa');
    }

    public function create(Request $request)
    {
        \App\Siswa::create($request->all());
        return redirect('/siswa')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {  
        //return 'edit data';
        $siswa = \App\siswa::find($id);
        //dd($siswa);
        return view('siswa/edit',['siswa'=>$siswa]);
    }

    public function Update(Request $request, $id)
    {
        $siswa = \App\siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('sukses','data berhasil diubah');
    }

    public function delete($id)
    {
        $siswa = \App\siswa::find($id);
        $siswa->delete();
        return redirect('/siswa')->with('sukses','data berhasil dihapus');
    }
}