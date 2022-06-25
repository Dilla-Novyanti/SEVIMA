@extends("frontend.master")
@section("content")
    <!-- Tittle banner -->
    <div class="box">
                <div class="row">
                    <div class="col-6 text-white" style="margin-top:100px;padding-left:45px;">{{$pljrn->nama_pelajaran}}</div>
                    <div class="col-6 text-right text-white" style="margin-top:0px;padding-right:45px;">Materi</div>
                </div>
            </div>
            <!-- content moduls -->
            @foreach($materi as $mtri)
            <div class="box-moduls collapsed" data-toggle="collapse" data-target="#detailMateri{{$mtri->id}}"aria-expanded="true" aria-controls="detailMateri{{$mtri->id}}">
                <div class="row">
                    <div class="col-1"> <img src="{{url('/img/icon-materi.png')}}"> </div>
                    <div class="col-11" style="padding-left:10px;">
                        <p>Materi       : {{$mtri->nama_materi}}<br/>
                            Pertemuan ke: {{$mtri->pertemuan}}<br/>
                            Diupload    : {{$mtri->created_at}}<br/>
                        </p>
                    </div>
                </div>
                <div id="detailMateri{{$mtri->id}}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <hr/>
                    <p class="mx-5">{{$mtri->deskripsi}}</p>
                    @if(isset($mtri->file_materi))
                        <a href="{{$mtri->file_materi}}" target="_blank">
                            <div class="row" width="auto">
                                <div class="col-1 text-right ml-4 mb-2"> 
                                    <img src="{{url('/img/icon-pdf.png')}}" style="width:30px;height:auto;"></div>
                                <div class="col-2"> <?php echo str_replace("/materi/", "", $mtri->file_materi) ?></div>
                            </div>
                        </a>
                    @endif
                </div>
            </div>
            @endforeach
@endsection