<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>LMS Harapan Semesta</title>
    <style>
        li.nav-item{
            font-size:18px;
            font-family:poppins;
        }
        .ellipse{
            width:20px;
            height:auto;
        }
        .box{
            width:900px;
            height:150px;
            margin-left:50px;
            margin-right:50px;
            margin-top:40px;
            background-color:#6E76CB;
            border-radius:15px;
        }
        .box-moduls{
            width:900px;
            height:auto;
            margin-left:50px;
            margin-right:50px;
            margin-top:40px;
            border: solid 0.1px ;
            border-radius:15px;
        }
    </style>
  </head>
  <body>
    <div class="row">
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
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <img src="{{url('/img/elllipse-nav.png')}}" class="ellipse">
                        Web Design
                        </a>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header ml-4">Materi</h6>
                                <a class="collapse-item ml-4" href="buttons.html">Tugas</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mt-2">
                        <img src="{{url('/img/elllipse-nav.png')}}" class="ellipse">
                        Teknik telekomunikasi
                    </li>
                    <li class="nav-item mt-2">
                        <img src="{{url('/img/elllipse-nav.png')}}" class="ellipse">
                        Teknik Kerja Bengkel
                    </li>
                    <li class="nav-item mt-2">
                        <img src="{{url('/img/elllipse-nav.png')}}" class="ellipse">
                        Seni budaya
                    </li>
                </ul>
            </div>
        </diV>
        <div class="col-9">
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
                        <p>Materi       : <br/>
                            Pertemuan ke: <br/>
                            Diupload    : <br/>
                        </p>
                    </div>
                </div>
            </div>
        </diV>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>