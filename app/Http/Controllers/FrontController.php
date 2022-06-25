<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelajaran;
use App\Models\Materi;

class FrontController extends Controller
{
    public function index(){
        $pelajaran = Pelajaran::all();
        return view("frontend.index", compact("pelajaran",$pelajaran));
    }

    public function materi($kode_pelajaran){
        $pelajaran = Pelajaran::all();
        $pljrn = Pelajaran::where("kode_pelajaran", $kode_pelajaran)->first();
        $materi = Materi::where("kode_pelajaran", $kode_pelajaran)->get();

        return view("frontend.materi", [
            'pelajaran' => $pelajaran, 
            'pljrn'     => $pljrn,
            "materi"    => $materi,
        ]);
    }

    public function tugas($kode_pelajaran){
        $pelajaran = Pelajaran::all();
        $pljrn = Pelajaran::where("kode_pelajaran", $kode_pelajaran)->first();
        $materi = Materi::where("kode_pelajaran", $kode_pelajaran)->get();

        return view ("frontend.tugas",[
            'pelajaran' => $pelajaran, 
            'pljrn'     => $pljrn,
            "materi"    => $materi,
        ]);
    }
}
