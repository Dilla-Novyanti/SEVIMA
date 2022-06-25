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
    @yield("style")
  </head>
  <body>
    <div class="row">
        @include("frontend.sidebar")
        <div class="col-9">
           @yield("content")
        </diV>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @yield("script")
</body>
</html>