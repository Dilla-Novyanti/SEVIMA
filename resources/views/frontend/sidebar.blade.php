<!-- Sidebar -->
<div class="col-3 border-light" style="border:1px;">
            <!-- Brand -->
            <div class="row justify-content-center mt-5 mb-2"><img src="{{url('/img/Logo-sekolah.png')}}"></div>
            <div class="row justify-content-center mb-3">LMS SMK Harapan Semesta</div>
            <hr/>
            <!-- Account -->
            <div class="row px-3">
                <div class="col-8 text-center">Dilla Novyanti <br/> <a> Logout </a> </div>
                <div class="col-4"><img src="{{url('/img/icon-pp.png')}}"></div>
            </div>
            <hr/>
            <!-- Nav item -->
            <div class="px-5">
                <p>Daftar kelas</p>
                <ul class="navbar-nav">
                    @foreach($pelajaran as $pljrn)
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse{{$pljrn->id}}"
                        aria-expanded="true" aria-controls="collapse{{$pljrn->id}}">
                        <img src="{{url('/img/elllipse-nav.png')}}" class="ellipse">
                        {{$pljrn->nama_pelajaran}}
                        </a>
                        <div id="collapse{{$pljrn->id}}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item ml-4" href="#">Materi</a>
                                <a class="collapse-item ml-4" href="#">Tugas</a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </diV>