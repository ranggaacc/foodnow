@extends('layouts/layoutCustomer.master')
@section('title','FoodNow')
@section('content')
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
<!-- slider atas -->
<!-- Indicators -->
<ol class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
  <li data-target="#myCarousel" data-slide-to="2"></li>
</ol>
<br>
<br>

<!-- Wrapper for slides -->

<div class="carousel-inner">
  <div class="item active">
    <img src="{{URL::asset('/image/gambar11.jpg')}}" alt="Los Angeles">
  </div>
  <div class="item">
    <img src="{{URL::asset('/image/gambar12.jpg')}}" alt="Chicago">
  </div>
  <div class="item">
    <img src="{{URL::asset('/image/gambar13.jpg')}}" alt="New York">
  </div>
</div>

<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  <span class="sr-only">Next</span>
</a>
</div>
<!-- slider atas -->
<!-- slider marquee -->

 <div class="panel panel-info">
  <div class="panel-body" >
    <div class="row" id="slider-text">
      <div class="col-md-6" >
        <h2 style="font-family:roboto; color:#E6297D;">COLLECTION PAKET </h2>
      </div>
    </div>
  </div>
      <marquee style="  scrollamount="6" scrolldelay="20" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
          <a href="">
            <ul class="list-inline list-unstyled r">
              @foreach($pakets as $paket)
              <li class="productbox">
                  <img src="{{asset('imageUpload/' .$paket->gambar) }}" class="img-responsive" id="cardResto">
                  <center><div class="producttitle" style="font-family:roboto; color:#E6297D;"><h3 style="font-family:roboto; color:#E6297D;"> {{$paket->nama_paket}}</h3></div> 
                  </center>
              </li>
              &nbsp;&nbsp;&nbsp;&nbsp;
              @endforeach
            </ul>
          </a>
        <br>
      </marquee>
</div>

 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
 {{--  
 <br>
 <br>
 <br>

<!--Item slider text-->
 <div class="panel panel-info">
  <div class="panel-body" >
    <div class="container">
      <div class="row" id="slider-text">
        <div class="col-md-6" >
          <h2 style="font-family:roboto; color:#E6297D;">COLLECTION PAKET</h2>
        </div>
      </div>
    </div>

    <!-- Item slider-->
    <div class="container-fluid">

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="carousel carousel-showmanymoveone slide" id="itemslider">
            <div class="carousel-inner">
            
              <div class="item active">
                <div class="col-xs-12 col-sm-6 col-md-2">
                  <a href="#"><img src="{{asset('imageUpload/' .$pakets[2]->gambar) }}" height="150" width="200"></a>
                  <h3 class="text-center" style="font-family:roboto; color:#E6297D;">{{$pakets[0]->nama_paket}}</h3>
                  <h4 class="text-center" style="font-family:roboto; color:#E6297D;">Rp. {{$pakets[0]->harga_paket}}</h4>
                </div>
              </div>

              @foreach($pakets as $paket)
              <div class="item ">
                <div class="col-xs-12 col-sm-6 col-md-2">
                  <a href="#"><img src="{{asset('imageUpload/' .$paket->gambar) }}" height="150" width="200"></a>
                  <h3 class="text-center" style="font-family:roboto; color:#E6297D;">{{$paket->nama_paket}}</h3>
                  <h4 class="text-center" style="font-family:roboto; color:#E6297D;">Rp. {{$paket->harga_paket}}</h4>
                </div>
              </div>
                @endforeach

            </div>

            <div id="slider-control">
            <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://s12.postimg.org/uj3ffq90d/arrow_left.png" alt="Left" class="img-responsive"></a>
            <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="https://s12.postimg.org/djuh0gxst/arrow_right.png" alt="Right" class="img-responsive"></a>
          </div>
          </div>
        </div>
      </div>
    </div>
    </div>
</div> 
<!-- Item slider end--> --}}
<br>
<br>
      <!-- Popular Resto -->
      <div class="container">
        <div id="keren">
          <center><h3 style="font-family:roboto; color:#E6297D;"><b>ALL RESTO</b></h3></center>
          </div>
        </div>
      <br>

      <div class="container">
          <div class="row">
            @foreach($restos as $resto)
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="{{asset('imageUpload/' .$resto->gambar) }}" id="cardResto" alt="rumah makan">
                      <div class="caption">
                        <strong><h3 align="center" style="font-family:roboto; color:#E6297D;">{{$resto->nama_resto}}</h3></strong>
                            <div class="ellipsis">
                                 <p>{{$resto->deskripsi}}</p>
                            </div>
                        <p><a href="/resto/{{$resto->id_resto}}" class="btn btn-primary pull-right" role="button">Go To <span class="glyphicon glyphicon-log-in"></span></a> </p>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
               @endforeach

            </div>
      <center>{!! $restos->links() !!}</center>
            

{{--             <center>
              <a href="" ><p>Show all resto</p></a>
            </center> --}}
      </div>


      <br><br>
      <!-- How To Order -->
      <section id="howtoorder">
      <br><br>
      <div class="container">
        <div id="keren">
          <center><h3 style="font-family:roboto; color:#E6297D;"><b>HOW TO ORDER</b></h3></center>
        </div>
      </div>
      <br><br>
      <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="service-box">
                        <i></i>
                        <img src="{{URL::asset('/image/order1.png')}}" width="100">
                        <h3 style="font-family:roboto; color:#ffffff;"><strong>Log In</strong></h3>
                        <h4 class="text-muted" style="font-family:roboto;color:#000000;">Login dengan akunmu terlebih dahulu. Lakukan signup jika kamu belum memiliki akun di Foodnow.</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="service-box">
                        <i></i>
                        <img src="{{URL::asset('/image/order2.png')}}" width="100">
                        <h3 style="font-family:roboto; color:#ffffff;"><strong>Cari Resto</strong></h3>
                        <h4 class="text-muted" style="font-family:roboto; color:#000000;">Pergi ke halaman utama dan temukan resto favorit kamu.</h4>
                    </div>
                </div>
            </div>
      </div>
      <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="service-box">
                        <i></i>
                        <img src="{{URL::asset('/image/order3.png')}}" width="100">
                        <h3 style="font-family:roboto; color:#ffffff;"><strong>Pilih Metode Pemesanan</strong></h3>
                        <h4 class="text-muted" style="font-family:roboto; color:#000000;">Pilih metode pemesanan kustom atau paket makanan dari setiap resto.</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="service-box">
                        <i></i>
                        <img src="{{URL::asset('/image/order4.png')}}" width="100">
                        <h3 style="font-family:roboto; color:#ffffff;"><strong>Cetak Bukti Pemesanan</strong></h3>
                        <h4 class="text-muted" style="font-family:roboto; color:#000000;">Klik tombol print untuk mencetak bukti pemesanan yang selanjutnya diberikan kepada resto terkait.</h4>
                    </div>
                </div>
            </div>
      </div>
      </section>


@endsection