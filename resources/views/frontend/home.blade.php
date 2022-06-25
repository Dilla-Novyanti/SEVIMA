<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .bg{
            width: 1366;
            height: 784px;
            background-image: url("/img/bg-lp.png");
        }
        p.halo{
            font-size: 18px;
            color: #081274;
        }
        .btn.btn-daftar{
            background-color: #2140E3;
            font-size: 14px;
            width: 80px;
            height: 35px;
        }
        .btn.btn-login{
            border-color: #2140E3;
            font-size: 14px;
            width: 80px;
            height: 35px;
        }
        .icon-lp{
            width:180px;
            height:auto;
        }
        .ket-icon{
            font-size:20px;
            color: #081274;
            margin-top:20px;
        }
    </style>
    <title>Landing Page CustomQ</title>
  </head>
  <body>
    <div class="bg">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                 <a class="navbar-brand" href="#">CustomQ</a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
      
                 <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                         <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                         </li>
                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Catalog
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">T-Shirt</a>
                                <a class="dropdown-item" href="#">Totebag</a>
                                <a class="dropdown-item" href="#">Book Cover</a>
                                <a class="dropdown-item" href="#">Phone Case</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Help</a>
                        </li>
                    </ul>
                    <a href="#" class="mr-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"  class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg></a>
                      <a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg></a>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="row" style="margin-top:130px;">
                <div class="col-6">
                    <p class="halo">Halo, Selamat datang!</p>
                    <b><p style="font-size:40px;">Custom sesuai pilihanmu hanya di CustomQ</p></b>
                    <p style="font-size:12px;">Temukan produk favoritemu atau custom sesuai <br/> impianmu!</p>
                    <button class="btn btn-daftar text-white mr-2">Daftar</button>
                    <button class="btn btn-login">Login</button>
                </div>
                <div class="col-6">
                    <img src="/img/img-lp.png" style="width:500px;height:auto">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="row justify-content-center mt-3">
                <b><p style="font-size:25px;color:#081274">Our Product</p></b>
            </div>
            <div class="row" style="margin-top:100px;">
                <div class="col-3 justify-content-center text-center">
                    <img src="{{url('/img/icon-tshirt.png')}}" class="icon-lp">
                    <b><p class="ket-icon">T-Shirt</p></b>
                        <!-- <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                        </div>
                        </div> -->
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><p>show catalog
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </p></a>
                </div>
                <div class="col-3 justify-content-center text-center">
                    <img src="{{url('/img/icon-totebag.png')}}" class="icon-lp">
                    <b><p class="ket-icon">Totebag</p></b>
                    <p>show catalog
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </p>
                </div>
                <div class="col-3 justify-content-center text-center">
                    <img src="{{url('/img/icon-bookcover.png')}}" class="icon-lp">
                    <b><p class="ket-icon">Book Cover</p></b>
                    <p>show catalog
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </p>
                </div>
                <div class="col-3 justify-content-center text-center">
                    <img src="{{url('/img/icon-case.png')}}" class="icon-lp">
                    <b><p class="ket-icon">Case</p></b>
                    <p>show catalog
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <div class="d-flex">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>