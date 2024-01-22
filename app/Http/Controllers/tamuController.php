<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class tamuController extends Controller
{
    public function simpan(Request $request){
        $nama = $request->nama;
        $notlp =$request->notlp;
        $tujuan = $request->tujuan;
        $pesan = $request->pesan;
     
        $data = new User();
        $data->nama = $nama;
        $data->notlp = $notlp;
        $data->tujuan = $tujuan;
        $data->pesan = $pesan;
        $data->save();
        return redirect('/')->with('status',"Data Berhasil Disimpan");
    }
}
