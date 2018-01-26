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
    <link href="{{ asset('css2/appUser.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/bootstrapUser.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/datepicker3User.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/stylesUser.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/print.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/scrolling-nav.css') }}" rel="stylesheet">
    <script src="{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{URL::asset('js/test2.js')}}"></script>
    <script src="{{URL::asset('js/scrolling-nav.js')}}"></script>
    <script src="{{URL::asset('js/jquery.easing.min.js')}}"></script>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <style>
body {
     margin: 0;
     padding: 0;
     text-align: center;
}
.bg {
     width: 100%;
     height: 100%;
     position: fixed;
     z-index: -1;
     float: left;
     left: 0;
     opacity: 0.4;
     filter: alpha(opacity=50); 
}
#keren { 
   color: white; 
   font: bold 24px/45px Helvetica, Sans-Serif; 
   letter-spacing: -1px;  
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.7);
   padding: 10px; 
}
</style>
@yield('header')
</head>

<body data-spy="scroll">
<img src="{{URL::asset('/image/coba4.jpg')}}" alt="gambar" class="bg hidden-print" />
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header page-scroll">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="/">
                        <img alt="Brand" src="{{URL::asset('/image/foodnow.png')}}">
                    </a>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <div class="col-sm-3 col-md-3 center">
                      <form class="navbar-form" role="search" action="/search" method="POST">
                      {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Resto" name="q" id="srch-term">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                      </form>
                    </div>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        {{-- KALO GAK LOGIN --}}
                        @if (Auth::guest())
                            <li><a class="page-scroll" style="font-family:roboto; color:#E6297D;" href="#howtoorder"><span class="glyphicon glyphicon-question-sign"></span> HOW TO ORDER</a></li>
                            <li><a class="page-scroll" style="font-family:roboto; color:#E6297D;" href="#contact"><span class="glyphicon glyphicon-phone-alt"></span> CONTACT US</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle page-scroll" data-toggle="dropdown" style="font-family:roboto; color:#E6297D;">
                                      <b>LOGIN</b> 
                                      <span class="caret"></span>
                                </a>
                                <ul id="login-dp" class="dropdown-menu">
                                    <li>
                                         <div class="row">
                                                <div class="col-md-12">
                                                <center>   
                                                    <a style="font-family:roboto; color:#E6297D;" href="">LOGIN FORM</a>
                                                </center>
                                                     <form class="form" role="form" method="post" action="{{url(action('LoginController@postLogin'))}}" accept-charset="UTF-8" id="login-nav">
                                                            <div class="form-group">
                                                                 <label class="sr-only" for="exampleInputEmail2">Email or Username</label>
                                                                 <input type="text" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email or Username" required>
                                                            </div>
                                                            <div class="form-group">
                                                                 <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                                 <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                              
                                                            </div>
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                                            </div>
                                                            <div class="checkbox">
                                                                 <label>
                                                                 <input type="checkbox"> keep me logged-in
                                                                 </label>
                                                            </div>
                                                     </form>
                                                </div>
                                                <div class="bottom text-center">
                                                    New here ? <a href="/register"><b>Join Us</b></a>
                                                </div>
                                         </div>
                                    </li>
                                </ul>
                            </li>

                        {{-- ADMIN --}}
                        @elseif(Auth::user()->name=='admin')
                            <li><a class="page-scroll" style="font-family:roboto; color:#E6297D;" href="/dashboardAdmin"><span class="glyphicon glyphicon-dashboard"></span> Dashboard Admin</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle uppercase page-scroll" data-toggle="dropdown" role="button" aria-expanded="false" style="font-family:roboto; color:#E6297D;">
                                    <strong>Hello!</strong> &nbsp;{{ Auth::user()->name }} 
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu page-scroll" role="menu">
                                    <li>
                                        <a style="font-family:roboto; color:#E6297D;" href="/logout">
                                            <span class="glyphicon glyphicon-remove-circle"></span> Logout 
                                        </a>
                                        <form id="logout-form" action="" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        {{-- USER BIASA --}}
                        @else
                            <li><a class="page-scroll" style="font-family:roboto; color:#E6297D;" href="/user" id="contact"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
                            <li><a class="page-scroll" style="font-family:roboto; color:#E6297D;" href="/save/{{ Auth::user()->id }} " id="howtoorder"><span class="glyphicon glyphicon-transfer "></span> TRANSACTION</a></li>
                            <li class="dropdown page-scroll">
                                <a href="#" class="dropdown-toggle uppercase page-scroll" data-toggle="dropdown" role="button" aria-expanded="false" style="font-family:roboto; color:#E6297D;">
                                    <strong>Hello!</strong> &nbsp;{{ Auth::user()->name }} 
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>


                                     <a style="font-family:roboto; color:#E6297D;" href="/EditProfil/{{ Auth::user()->id }}">
                                     <span class="glyphicon glyphicon-cog"></span> Edit Profil</a>
                                     
                                        <a style="font-family:roboto; color:#E6297D;" href="/logout">
                                            <span class="glyphicon glyphicon-remove-circle"></span> Logout 
                                        </a>
                                        <form id="logout-form" action="" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
              </div>
          </div>
        </nav>
    </div>

        @yield('content')


<section id="contact">
    <footer class="footer-distributed hidden-print">

      <div class="footer-left">

      <h3 style="font-family:roboto; color:#E6297D;"><b>FoodNow</b></h3>

        <p class="footer-links">
          <a href="/">Home</a>
          ·
          <a href="/user">resto</a>
          ·
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
        <br>
        <p class="footer-company-about">
        <span>Our Social Media</span>
        </p>
        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-youtube"></i></a>

        </div>

      </div>

    </footer>
</section>

    <!-- Scripts -->
    <script src="{{ asset('sweetalert-master/dist/sweetalert.min.js')}}"></script>

    <!-- Include this after the sweet alert js file -->
    @include('sweet::alert')

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
    $(document).ready(function(){

            $('#itemslider').carousel({ interval: 3000 });

            $('.carousel-showmanymoveone .item').each(function(){
            var itemToClone = $(this);

            for (var i=1;i<6;i++) {
            itemToClone = itemToClone.next();

            if (!itemToClone.length) {
            itemToClone = $(this).siblings(':first');
            }

            itemToClone.children(':first-child').clone()
            .addClass("cloneditem-"+(i))
            .appendTo($(this));
            }
            });
            });

    </script>
    <script>
            $('.print-window').click(function() {
            window.print();
        });
    </script>
            <script type="text/javascript">
            $(document).ready(function () {
                $('#tanggal').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose:true
                });
                
                $('#tanggal').change(function(){
                    $('#tanggalpenjualan').val($(this).val());
                    //alert($('#tanggalpengeluaran').val());
                    //$('.tgl_hapus').val($(this).val());
                });
                
                total_pengeluaran();
                duit2();
            });
            function kali(valu,harga){
                var nilai = $('#paket'+valu).val();
                document.getElementById("hasilkali"+valu).innerHTML = nilai*harga;
            }
            
            function total(){
                var tmptotal=$('.subtotal');
                var total=0;
                for (var i=0;i<tmptotal.length;i++){
                    if(tmptotal[i].innerHTML!=""){
                        var harga = parseInt(tmptotal[i].innerHTML);
                        total+=harga;
                    
                    }
                }
                $("#totalpenjualan").text(total);
                document.getElementById('penjualan').value=total;

            }

            
    </script>
    <script>
      $("#selectMenu").change(function () {
         $("#menu").text($(this).find(':selected').data("menu"));

         if($("#customtotal").val()!==""){
          
            var pengali=$("#customtotal").val();
            var jumlah= parseInt($("#menu").text()) + 
                        parseInt($("#menu1").text())+
                        parseInt($("#menu2").text())+
                        parseInt($("#menu3").text())+
                        parseInt($("#menu4").text())+
                        parseInt($("#menu5").text());
            var subkali=pengali*jumlah;


         } else {
           var subkali=parseInt($("#menu").text())+parseInt($("#menu1").text())+parseInt($("#menu2").text())+parseInt($("#menu3").text())+parseInt($("#menu4").text())+parseInt($("#menu5").text());
         }
         
         $("#sum").text(subkali);
         document.getElementById('penjualanCustom').value=subkali;
      });
      $("#selectMenu1").change(function () {
         $("#menu1").text($(this).find(':selected').data("menu1"));

         if($("#customtotal").val()!==""){
          
            var pengali=$("#customtotal").val();
            var jumlah= parseInt($("#menu").text()) + 
                        parseInt($("#menu1").text())+
                        parseInt($("#menu2").text())+
                        parseInt($("#menu3").text())+
                        parseInt($("#menu4").text())+
                        parseInt($("#menu5").text());
            var subkali=pengali*jumlah;


         } else {
           var subkali=parseInt($("#menu").text())+parseInt($("#menu1").text())+parseInt($("#menu2").text())+parseInt($("#menu3").text())+parseInt($("#menu4").text())+parseInt($("#menu5").text());
         }
         
         $("#sum").text(subkali);
         document.getElementById('penjualanCustom').value=subkali;
      });
      $("#selectMenu2").change(function () {
         $("#menu2").text($(this).find(':selected').data("menu2"));

         if($("#customtotal").val()!==""){
          
            var pengali=$("#customtotal").val();
            var jumlah= parseInt($("#menu").text()) + 
                        parseInt($("#menu1").text())+
                        parseInt($("#menu2").text())+
                        parseInt($("#menu3").text())+
                        parseInt($("#menu4").text())+
                        parseInt($("#menu5").text());
            var subkali=pengali*jumlah;


         } else {
           var subkali=parseInt($("#menu").text())+parseInt($("#menu1").text())+parseInt($("#menu2").text())+parseInt($("#menu3").text())+parseInt($("#menu4").text())+parseInt($("#menu5").text());
         }
         
         $("#sum").text(subkali);
         document.getElementById('penjualanCustom').value=subkali;
      });
      $("#selectMenu3").change(function () {
         $("#menu3").text($(this).find(':selected').data("menu3"));

         if($("#customtotal").val()!==""){
          
            var pengali=$("#customtotal").val();
            var jumlah= parseInt($("#menu").text()) + 
                        parseInt($("#menu1").text())+
                        parseInt($("#menu2").text())+
                        parseInt($("#menu3").text())+
                        parseInt($("#menu4").text())+
                        parseInt($("#menu5").text());
            var subkali=pengali*jumlah;


         } else {
           var subkali=parseInt($("#menu").text())+parseInt($("#menu1").text())+parseInt($("#menu2").text())+parseInt($("#menu3").text())+parseInt($("#menu4").text())+parseInt($("#menu5").text());
         }
         
         $("#sum").text(subkali);
         document.getElementById('penjualanCustom').value=subkali;
      });
      $("#selectMenu4").change(function () {
         $("#menu4").text($(this).find(':selected').data("menu4"));

         if($("#customtotal").val()!==""){
          
            var pengali=$("#customtotal").val();
            var jumlah= parseInt($("#menu").text()) + 
                        parseInt($("#menu1").text())+
                        parseInt($("#menu2").text())+
                        parseInt($("#menu3").text())+
                        parseInt($("#menu4").text())+
                        parseInt($("#menu5").text());
            var subkali=pengali*jumlah;


         } else {
           var subkali=parseInt($("#menu").text())+parseInt($("#menu1").text())+parseInt($("#menu2").text())+parseInt($("#menu3").text())+parseInt($("#menu4").text())+parseInt($("#menu5").text());
         }
         
         $("#sum").text(subkali);
         document.getElementById('penjualanCustom').value=subkali;
      });
      $("#selectMenu5").change(function () {
         $("#menu5").text($(this).find(':selected').data("menu5"));

         if($("#customtotal").val()!==""){
          
            var pengali=$("#customtotal").val();
            var jumlah= parseInt($("#menu").text()) + 
                        parseInt($("#menu1").text())+
                        parseInt($("#menu2").text())+
                        parseInt($("#menu3").text())+
                        parseInt($("#menu4").text())+
                        parseInt($("#menu5").text());
            var subkali=pengali*jumlah;


         } else {
           var subkali=parseInt($("#menu").text())+parseInt($("#menu1").text())+parseInt($("#menu2").text())+parseInt($("#menu3").text())+parseInt($("#menu4").text())+parseInt($("#menu5").text());
         }
         
         $("#sum").text(subkali);
         document.getElementById('penjualanCustom').value=subkali;
      });


  /*handler customtotal keyup*/
  $("#customtotal").keyup(function(){
      var pcs= $(this).val()==="" ? 0 : parseInt($(this).val());
      var sum=parseInt($("#sum").text());
      var hasilCustom=pcs*sum;
      $("#sum").text(hasilCustom); 
      document.getElementById('penjualanCustom').value=hasilCustom; 

  })


  $( "#selectMenu option:selected" ).text();
    </script>

<script>
var deleter = {

        linkSelector : "a#delete-btn",

        init: function() {
            $(this.linkSelector).on('click', {self:this}, this.handleClick);
        },

        handleClick: function(event) {
            event.preventDefault();

            var self = event.data.self;
            var link = $(this);

            swal({
                title: "Confirm Delete",
                text: "Are you sure to delete this history?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: true
            },
            function(isConfirm){
                if(isConfirm){
                    window.location = link.attr('href');
                }
                else{
                    swal("cancelled", "Category deletion Cancelled", "error");
                }
            });

        },
    };

    deleter.init();

</script>
<script>
function myFunction() {
    var x = document.getElementById('myDIV');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}

// $("#show").removeClass('hidden');
// $("#hide").addClass('hidden');
// $("#myId").toggleClass('hidden');

// $('#show').show();
// $('#hide').hide();
</script>
</body>
</html>