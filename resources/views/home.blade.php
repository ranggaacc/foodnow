@extends('layouts/layoutCustomer.master3')
@section('title','FoodNow')
@section('content')
<style>
body {
    background: #f1f4f7;
    padding-top: 0px;
    color: #5f6468;
}
</style>
    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                    <!-- <div class="transbox">
                        <h1 style=" color:#E6297D; "><strong>FoodNow</h1>
                    </div> --><br><br><br><br><br><br>
                        <!-- <h3 style=" color:#ffffff;">Estimasikan Ordermu disini</h3> -->
                        <!-- <hr class="intro-divider"> -->
                        <ul class="list-inline intro-social-buttons" style=" color:#E6297D;">
                            <li>
                                <a style=" color:#E6297D;" href="/user" class="btn btn-default btn-lg"></i> <span class="network-name">Start Order</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

    <a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Custom What You Want</h2>
                    <p class="lead">Kustomisasi order sesuai dengan kebutuhan dan budget. Ratusan plihan menu dan paket terbaik tersedia disini  </p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="{{URL::asset('/image/gambar11.jpg')}}" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Easy Way To Calculate Your Order</h2>
                    <p class="lead">Hitung dan estimasi total pembelian menjadi lebih mudah dengan bantuan sistem kami :). Selamat Mencoba:)</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="{{URL::asset('/image/gambar12.jpg')}}" alt="">>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Enjoy The Best Menu</h2>
                    <p class="lead">Nikmati menu-menu terbaik dari restauran-restauran pilihan kami yang ada di Bogor dan sekitarnya</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="{{URL::asset('/image/gambar13.jpg')}}" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
    



@endsection