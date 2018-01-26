@extends('layouts/layoutCustomer.master')
@section('title','How To Order')
@section('content')

<style type="text/css" media="screen">
.row-centered{
  text-align: center;
 }
 .col-centered{
  display:inline-block;;
  float:none;
  text-align:left;
  margin-right: -4px;

 }
</style>
<br></br>


<div class="container">
  <div class="panel order" id="order">
    <div class="panel-body order" id="order">
      <div class="row">
        <h3 style="font-family:roboto; color:#E6297D;"><b>1. Login </b></h3>
        <div class="col ">
          <img src="{{URL::asset('/image/0.png')}}" height="500" width="800" style='float: left;'>
        </div>
        <div class="col-sm-3">
          <h4 style="font-family:roboto; color:#E6297D;" align="left">Sebelum melakukan Order User terlebih dahulu harus Login melalui form login yang terdapat pada navbar <b> FOODNOW</b> , Login bisa dilakukan dengan memasukkan email atau username yang telah terdaftar . Jika user belum memiliki account user dapat melakukan registrasi account <a href="/register">disini</a> </h4>
        </div>
      </div>
      <br>
      <div class="row">
        <h3 style="font-family:roboto; color:#E6297D;"><b>2. Click Go To </b></h3>
        <div class="col">
          <center><img src="{{URL::asset('/image/7.png')}}" height="500" width="800"  style='float: left;'></center>
        </div>
        <div class="col-sm-3">
          <h4 style="font-family:roboto; color:#E6297D;" align="left">Setelah melakukan Login user dapat memeilih restoran mana yang disukai, kemudian click tombol <b>"Go To"</b> pada bagian bawah card kategori restoran untuk melihat menu-menu pada restoran tersebut dan kemudian melakukan order. </h4>
        </div>
      </div>
      <br>
      <div class="row">
        <h3 style="font-family:roboto; color:#E6297D;"><b>3. Lihat Detail Paket  </b></h3>
        <div class="col">
          <img src="{{URL::asset('/image/3.png')}}" height="500" width="800" style='float: left;'>
        </div>
        <div class="col-sm-3">
          <h4 style="font-family:roboto; color:#E6297D;" align="left">User akan diberikan beberapa pilihan paket yang dapat dilihat detailnya dengan menekan tombol <b>"Detail"</b> yang ada pada bagian bawah menu-menu paket tersebut.</h4>
        </div>
      </div>
      <br>
      <div class="row">
        <h3 style="font-family:roboto; color:#E6297D;"><b>4. Pilih Custom atau Paket  </b></h3>
        <div class="col">
          <img src="{{URL::asset('/image/10.png')}}" height="500" width="800" style='float: left;'>
        </div>
        <div class="col-sm-3">
          <h4 style="font-family:roboto; color:#E6297D;" align="left">Pada laman ini user dapat memilih order berupa menu paket atau custom .Custom berarti user memilih sendiri isi dari paket.</h4>
        </div>
      </div>
      <br>
      <div class="row">
        <h3 style="font-family:roboto; color:#E6297D;"><b>5. Order Custom & Save Invoice  </b></h3>
        <div class="col">
          <img src="{{URL::asset('/image/11.png')}}" height="500" width="800" style='float: left;'>
        </div>
        <div class="col-sm-3">
          <h4 style="font-family:roboto; color:#E6297D;" align="left">Jika user memilih tab custom, user dapat memilih sendiri <b> nasi, sayur, lauk, kerupuk, buah dan minuman yang nanti akan disatukan menjadi paket.</b> sistem akan langsung menghitung berapa total order berdasarkan kuantitas dan harga per menu <b>nasi, sayur, lauk, kerupuk, buah dan minuman</b> . user juga dapat melakukan Print & Save slip transaksi</h4>
        </div>
      </div>
      <br>
      <div class="row">
        <h3 style="font-family:roboto; color:#E6297D;"><b>6. Order Paket & Save Invoice  </b></h3>
        <div class="col">
          <img src="{{URL::asset('/image/13.png')}}" height="500" width="800" style='float: left;'>
        </div>
        <div class="col-sm-3">
          <h4 style="font-family:roboto; color:#E6297D;" align="left">Jika user memilih tab paket, user dapat memilih beberapa paket yang telah disediakan oleh restoran. Sama seperti menu custom sistem akan langsung menghitung berapa total order berdasarkan kuantitas dan harga per menu <b> paket</b> . user juga dapat melakukan Print & Save slip transaksi.</h4>
        </div>
      </div>      
      <br>
      <div class="row">
        <h3 style="font-family:roboto; color:#E6297D;"><b>7. Lihat Detail Transaksi & Cetak ulang  </b></h3>
        <div class="col">
          <img src="{{URL::asset('/image/14.png')}}" height="500" width="800" style='float: left;'>
        </div>
        <div class="col-sm-3">
          <h4 style="font-family:roboto; color:#E6297D;" align="left">Hasil save slip/invoice dapat dilihat pada menu <b>Transaction</b> yang terdapat pada navbar "FOODNOW". User juga dapat melihat detail transaksi dan dapat mencetak kembali slip/invoice transaksi seperti pada gambar dibawah</h4>
        </div>
      </div> 
      <br>
      <div class="row">
        <h3 style="font-family:roboto; color:#E6297D;"><b></b></h3>
        <div class="col">
          <img src="{{URL::asset('/image/15.png')}}" height="500" width="800" style='float: left;'>
        </div>
        <div class="col-sm-3">
          <h4 style="font-family:roboto; color:#E6297D;" align="left">Hasil save slip/invoice dapat dilihat pada menu <b>Transaction</b> yang terdapat pada navbar "FOODNOW". User juga dapat melihat detail transaksi dan dapat mencetak kembali slip/invoice transaksi seperti pada gambar dibawah</h4>
        </div>
      </div>      
    </div>
  </div>
</div>
@endsection
