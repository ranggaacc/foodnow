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
    <div class="row">
      <div class="panel panel-info">
        <div class="panel-body" >
        <div class="row">
          <div class="col-md-3">
            <img  class="hidden-print" src="{{URL::asset('/image/gambar11.jpg')}}" id="gambar" height="150" width="300">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12" id="detail">
            <h4 style="font-family:roboto; color:#E6297D; font-size:30px"><b>Contact Us</b></h4>
            <p style="font-family:roboto;" class="hidden-print"></p>
            <h4 style="font-family:roboto; "><span class="glyphicon glyphicon-map-marker" style="color:#E6297D;"></span>&nbsp;&nbsp;&nbsp; Base Office at <b>"Bogor Agricultural University"</b> POMI lt.4 FMIPA DEPARTMENT COMPUTER SCIENCE</h4>
            
            <h4 style="font-family:roboto; "><span class="glyphicon glyphicon-envelope" style="color:#E6297D;"></span>&nbsp;&nbsp;&nbsp; information@foodnow.com</h4>
            <h4 style="font-family:roboto;"><span class="glyphicon glyphicon-phone-alt" style="color:#E6297D;"></span>&nbsp;&nbsp;&nbsp; phone : 085709153450</h4>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection
