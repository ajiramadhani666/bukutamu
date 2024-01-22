<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index(){
        $data = User::all();
        return view('admin.tamu.index',compact('data'));
    }
    public function hapus(Request $request){
        $id = $request->id;
        $data = user::find($id);
        $data->delete();
        return redirect('/admin/data')->with('status','Data Berhasil Dihapu');
       
    }
}
