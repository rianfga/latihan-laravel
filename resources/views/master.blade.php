<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Oswald:wght@500&display=swap" rel="stylesheet">
    <!-- icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">

    <title>@yield('title')</title>
  </head>
  <style>
    html{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .warna-nav{
        color: rgb(190 94 56);
    }
    .nav{
        background-color: rgb(190 94 56);
    }
    .nav a{
        margin-bottom: 10%;
        text-decoration: none;
        text-transform: uppercase;
        outline: none;
        color: white;
        font-family: 'Montserrat', sans-serif;
        font-weight: 400;
    }
    .nav a:hover{
        color: white !important;
    }
    .row{
        height: 100vh;
        width: 100%;
    }   
    .image{
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid rgb(209 133 113);
        width: 150px;
        height: 150px;
        margin-bottom: 60px;
    }
    .image-square{
        object-fit: cover;
        width: 300px;
        height: 300px;
        margin-bottom: 60px;    
    }
    .isi h1{
        font-family: 'Oswald', sans-serif;
    }
    .isi{
        font-family: 'Montserrat', sans-serif;
    }
    .pesan{
        font-weight: 400;
        font-family: 'Open Sans', sans-serif;
    }
    .icons{
        width: 35px;
        height: 35px;
        border-radius: 50%;
        padding: 6px;
    }
    .title{
        border-bottom: 2px solid rgb(190 94 56);
        width: 5%;
    }
    .title:hover{
        width: 100%;
        transition: width 1s;
    }
  </style>
  <body>

    <div class="row">
        <div class="col-md-2 flex-column align-items-center justify-content-center nav">
            <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="image shadow">
            <a href="/" class="{{ !request()->is('/') ? 'text-muted' : '' }}">HOME</a>
            <a href="/about" class="{{ !request()->is('about') ? 'text-muted' : '' }}">ABOUT</a>
            <a href="" class="btn btn-dark btn-sm">DOWNLOAD CV</a>
        </div>
        <div class="col-md-10 flex-column justify-content-center isi">
            @yield('isi')
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>