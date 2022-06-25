<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelajaran;

class HomeController extends Controller
{
    public function index(){
        $pelajaran = Pelajaran::all();
        return view("frontend.index", compact("pelajaran",$pelajaran));
    }

    public function materi($nama_pelajaran){
        $pelajaran = Pelajaran::all();
        return view("frontend.materi", compact("pelajaran",$pelajaran));
    }
}
