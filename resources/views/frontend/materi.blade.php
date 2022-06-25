@extends("frontend.master")
@section("content")
 <!-- Tittle banner -->
 <div class="box">
                <div class="row">
                    <div class="col-6 text-white" style="margin-top:100px;padding-left:45px;">Web Design</div>
                    <div class="col-6 text-right text-white" style="margin-top:0px;padding-right:45px;">Materi</div>
                </div>
            </div>
            <!-- content moduls -->
            <div class="box-moduls">
                <div class="row">
                    <div class="col-1"> <img src="{{url('/img/icon-tugas.png')}}"> </div>
                    <div class="col-11" style="padding-left:10px;">
                        <p>Materi       : {{$pljrn->nama_pelajaran}}<br/>
                            Pertemuan ke: <br/>
                            Diupload    : <br/>
                        </p>
                    </div>
                </div>
            </div>
@endsection