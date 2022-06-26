<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelajaran;
use App\Models\Materi;
use App\Models\Tugas;
use App\Models\tugas_selesai;

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
        $tugas = Tugas::where("kode_pelajaran", $kode_pelajaran)->get();

        return view ("frontend.tugas",[
            'pelajaran' => $pelajaran, 
            'pljrn'     => $pljrn,
            "materi"    => $materi,
            "tugas"     => $tugas,
        ]);
    }

    public function dropzoneStore(Request $request){
        $image = $request->file('file');
        $imageName = time(). '.' .$image->extension();
        $image->move(public_path('images'), $imageName);
        return response()->json(['success'=>$imageName]);
    }

    public function jawabanStore(Request $request){
        $jawaban = $request->jawaban;

        $data["kode_tugas"] = $request["kode_tugas"];
        $data["jawaban"]    = $jawaban;
 
        $create = tugas_selesai::create($data);

        return redirect('/tugas');

    }

}
