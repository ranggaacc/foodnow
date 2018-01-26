<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('sweetalert-master/dist/sweetalert.css')}}">
    <link href="{{ asset('css2/appUser.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/landing-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/bootstrapUser.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/datepicker3User.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/stylesUser.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/print.css') }}" rel="stylesheet">
    <script src="{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{URL::asset('js/test2.js')}}"></script>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <style>
    .banner-bg {
    position: relative;
    }

    .banner-bg1 {
        background: url(../images/bg.jpg) no-repeat;
        background-size: cover;
        min-height: 835px;
    }

    .banner-bg {
        position: relative;
    }

    .banner-bg1 {
        background: url(../images/bg.jpg) no-repeat;
        background-size: cover;
        min-height: 835px;
    }
    .caption h1 {
    font-size: 3.5em;
    font-weight: 500;
    color: #fff;
    margin-bottom: 8px;
}
.caption h1 {
    font-size: 3.5em;
    font-weight: 500;
    color: #fff;
    margin-bottom: 8px;
}
div.transbox {
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.8;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}
</style>
@yield('header')
</head>

<body>
{{-- <img src="{{URL::asset('/image/coba2.jpg')}}" alt="gambar" class="bg" /> --}}
 

        @yield('content')


<section id="contact">
    <footer class="footer-distributed">

      <div class="footer-left">

      <h3 style="font-family:roboto; color:#E6297D;"><b>FoodNow</b></h3>

        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">Blog</a>
          ·
          <a href="#">Pricing</a>
          ·
          <a href="#">About</a>
          ·
          <a href="#">Faq</a>
          ·
          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">FoodNow&copy; 2017</p>
      </div>
                      
      <div class="footer-center">
      <div>
        <h4 style="font-family:roboto; color:#E6297D;">CONTACT US</h4>
      </div>
          <br>
          <br>
        <div>
         
        <a style="font-family:roboto; color:#E6297D;" href="#contact" class="page-scroll"><span class="glyphicon glyphicon-phone-alt"></span> 081-180-081-180</a>
        </div>
        <br>
        <br>
        <div>
          <a style="font-family:roboto; color:#E6297D;" href="#contact" class="page-scroll"><span class="glyphicon glyphicon-envelope"></span> information.foodnow@gmail.com</a>
        </div>
        <br>
        <br>
        <div>
          <a style="font-family:roboto; color:#E6297D;" href="#contact" class="page-scroll">LINE</span> @foodnow</a>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
          FoodNow merupakan sebuah platoform untuk mengestimasi order catering di sebuah resto. FoodNow didirikan pada tahun 2017 oleh Rangga, Azmi & david.
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-youtube"></i></a>

      </div>

    </footer>
</section>
</body>
</html>
