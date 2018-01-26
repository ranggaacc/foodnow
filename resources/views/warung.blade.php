@extends('layouts/layoutCustomer.master')
@section('title','Resto')
@section('header')
  <style>
  #harga{
    background-color: #dcdcdc !important;
    padding: 6px !important;
    border-radius: 6px !important;
  }
  #grey {
    background-color: #dcdcdc !important;
  }
  .mainbox{
    margin-top: 0px !important;

  }
  #gambar{
    width: 220px;
   height: 200px;
   margin-bottom: 10px;
   margin-top: 10px;
   border-radius: 5px;
  }
  #detail{
    margin-top: 50px;
  }
  #save{
    background-color:#E6297D;
    font-family:roboto;
    color: white;
    padding: 10px 23px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 12px 2px;
    border-radius: 10px;

  }
  .buttonPrint {background-color: #E6297D;}
  </style>
@endsection
@section('content')
<br>
<br>
<br>
  {{-- container --}}
  <div class="container">
  <br>
    <div class="row">
      <div class="panel panel-info">
        <div class="panel-body" >
          <div class="col-md-3">
            <img  class="hidden-print" src="{{asset('imageUpload/' .$restos->gambar) }}" id="gambar">
          </div>
          <div class="col-md-8" id="detail">
            <h4 align="left" style="font-family:roboto; color:#E6297D; font-size:30px"><b>{{$restos->nama_resto}}</b></h4>
            <p  align="left" style="font-family:roboto;" class="hidden-print">{{$restos->deskripsi}}</p>
            <h4 align="left" style="font-family:roboto; "><img src="{{URL::asset('/image/tempat.png')}}">&nbsp;&nbsp;&nbsp;{{$restos->alamat_resto}}</h4>
            <h4 align="left" style="font-family:roboto;"><img src="{{URL::asset('/image/phone.png')}}">&nbsp;&nbsp;&nbsp;{{$restos->no_telp}}</h4>
        </div>
      </div>
    </div>

{{-- CARD PAKET --}}    
      <div class="container">
          <div class="row">
            @foreach($pakets2 as $paket2)
                  {{-- <div class="col-sm-6 col-md-4"> --}}
                  <div class="col-sm-3 col-md-3">
                    <div class="thumbnail rounded hidden-print">
                      <img src="{{asset('imageUpload/' .$paket2->gambar) }}" id="cardResto" alt="rumah makan">
                      <div class="caption">
                        <h3 align="center" style="font-family:roboto; color:#E6297D;">{{$paket2->nama_paket}}</h3>
                            <div class="ellipsis">
                                 <p>{{$paket2->deskripsi_paket}}</p>
                            </div>
                            <h3 align="center" style="font-family:roboto; color:#E6297D;"><strong>Rp. {{$paket2->harga_paket}}</h3></strong>
                        <p><a href="" class="btn btn-primary pull-right" role="button" data-toggle="modal" data-target="#myModalPaket{{$paket2->id_paket}}">Detail  <span class="glyphicon glyphicon-log-in"></span></a> </p>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
               @endforeach
            </div>
<div class="hidden-print"><center>{!! $pakets2->links() !!}</center></div>
      </div>
    {{-- tab controller --}}
        <ul class="nav nav-tabs hidden-print">
          <li class="active"><a data-toggle="tab" href="#custom">custom</a></li>
          <li><a data-toggle="tab" href="#paket">paket</a></li>
        </ul>
    {{-- tab content  --}}
<div class="tab-content">
  {{--custom menu--}}
  <div id="custom" class="tab-pane fade  in active">
      <div style=" margin-top:50px" class="mainbox ">
        <div class="panel panel-info">
          <div class="panel-body" >
          <table class="table table-striped">
                <col width="100">
                <col width="200">
                <col width="150">
                <col width="140">
          <h2 style="font-family:roboto; color:#E6297D;">Input Your Order Here</h2>
            <div class="row">
              <div class="col-md-3">
                <h5 style="font-family:roboto; color:#E6297D;" class="hidden-print">Masukan Jumlah</h5>
                <div class="input-group" >
                    <input type="number" min="0"  class="form-control harga" name="quantityCustom" id="customtotal" val="" form="form2">
                    <div class="input-group-addon hidden-print">pcs</div>
                </div>
              </div>
            </div>
            <thead>
              <tr>
                <th>Kategori</th>
                <th>Menu</th>
                <th>Harga</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <td>
                <h5 style="font-family:roboto; color:#E6297D;">Nasi</h5>
              </td>
                <td>    
                  <div class="form-group">
                    <select class="form-control harga" id="selectMenu" name="select0" form="form2">
                      <optgroup label="Nasi">
                      <option value="" data-menu="0" >Choose</option>
                      @foreach($nasis as $nasi)
                          <option form="form2"  value="{{$nasi->nama_custom}}" data-menu="{{$nasi->harga_custom}}">{{$nasi->nama_custom}}</option>
                      @endforeach
                      </optgroup>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="panel">
                    <div class="panel-body" id="harga">
                      <a id="menu" form="form2" style="font-family:roboto; color:#E6297D;">0</a>
                    </div>
                  </div>               
                </td>
              </tr>
              <tr>
              <td>
                <h5 style="font-family:roboto; color:#E6297D;">Sayur</h5>
              </td>
                <td>    
                  <div class="form-group">
                    <select class="form-control harga" id="selectMenu1" name="select1" form="form2">
                      <optgroup label="Sayur">
                      <option value="" data-menu1="0">Choose</option>
                      @foreach($sayurs as $sayur)
                          <option form="form2" value="{{$sayur->nama_custom}}" data-menu1="{{$sayur->harga_custom}}">{{$sayur->nama_custom}}</option>
                      @endforeach
                      </optgroup>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="panel">
                    <div class="panel-body" id="harga">
                      <a id="menu1" style="font-family:roboto; color:#E6297D;">0</a>
                    </div>
                  </div>                
                </td>
              </tr>
              <tr>
              <td>
                <h5 style="font-family:roboto; color:#E6297D;">Lauk</h5>
              </td>
                <td>    
                  <div class="form-group">
                    <select class="form-control harga" id="selectMenu2" name="select2" form="form2">
                      <optgroup label="Sayur">
                      <option value="" data-menu2="0">Choose</option>
                      @foreach($lauks as $lauk)
                          <option value="{{$lauk->nama_custom}}" data-menu2="{{$lauk->harga_custom}}">{{$lauk->nama_custom}}</option>
                      @endforeach
                      </optgroup>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="panel">
                    <div class="panel-body" id="harga">
                      <a id="menu2" style="font-family:roboto; color:#E6297D;">0</a>
                    </div>
                  </div>                
                </td>
              </tr>
              <tr>
              <td>
                <h5 style="font-family:roboto; color:#E6297D;">Buah</h5>
              </td>
                <td>    
                  <div class="form-group">
                    <select class="form-control harga" id="selectMenu3" name="select3" form="form2">
                      <optgroup label="Buah">
                      <option value="" data-menu3="0">Choose</option>
                      @foreach($buahs as $buah)
                          <option value="{{$buah->nama_custom}}" data-menu3="{{$buah->harga_custom}}">{{$buah->nama_custom}}</option>
                      @endforeach
                      </optgroup>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="panel">
                    <div class="panel-body" id="harga">
                      <a id="menu3" style="font-family:roboto; color:#E6297D;">0</a>
                    </div>
                  </div>                
                </td>
              </tr>
              <tr>
                <td>
                  <h5 style="font-family:roboto; color:#E6297D;">Minum</h5>
                </td>
                <td>    
                  <div class="form-group">
                    <select class="form-control harga" id="selectMenu5" name="select5" form="form2">
                      <optgroup label="Minum">
                      <option value="" data-menu5="0">Choose</option>
                      @foreach($minums as $minum)
                          <option value="{{$minum->nama_custom}}" data-menu5="{{$minum->harga_custom}}">{{$minum->nama_custom}}</option>
                      @endforeach
                      </optgroup>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="panel">
                    <div class="panel-body" id="harga">
                      <a id="menu5" style="font-family:roboto; color:#E6297D;">0</a>
                    </div>
                  </div>                
                </td>
              </tr>
              <tr>
              <td>
                <h5 style="font-family:roboto; color:#E6297D;">Lainnya</h5>
              </td>
                <td>    
                  <div class="form-group">
                    <select class="form-control harga" id="selectMenu4" name="select4" form="form2">
                      <optgroup label="Kerupuk">
                      <option value="" data-menu4="0">Choose</option>
                      @foreach($lainnyas as $lainnya)
                          <option value="{{$lainnya->nama_custom}}" data-menu4="{{$lainnya->harga_custom}}">{{$lainnya->nama_custom}}</option>
                      @endforeach
                      </optgroup>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="panel">
                    <div class="panel-body" id="harga">
                      <a id="menu4" style="font-family:roboto; color:#E6297D;">0</a>
                    </div>
                  </div>                
                </td>
              </tr>
            </tbody>
          </table>
            <div class="row">
              <div class="col-md-6">
                <div class="panel">
                  <div class="panel-body" id="harga">
                    <b>TOTAL</b>
                  </div>
                </div>
              </div>
            <div class="col-md-3">
              <div class="panel">
                <div class="panel-body" id="harga">
                  <b style="font-family:roboto; color:#E6297D;font-weight: bold;">Rp.</b><b id="sum"  value="" name="penjualanCustom" style="font-family:roboto; color:#E6297D;font-weight: bold;">0</b>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">

                  {!! Form::open(['route' => 'save.store','id'=>'form2']) !!}
                  <button type="button" id="" class="hidden-print print-window btn btn-default  buttonPrint" style="font-family:roboto; color:#ffffff;"><span class="glyphicon glyphicon-print "></span> Print</button>
                  <input type="hidden" value="{{Auth::user()->id}}" name="user"  form="form2"/>
                  <input type="hidden" id="penjualanCustom" name="penjualanCustom" value="0" >
                  <input type="hidden" name="type" value="custom" >
                  <input type="hidden" id="restoran" name="restoran" value="{{$restos->nama_resto}}" >
                  <input type="hidden" id="username" name="username" value="{{Auth::user()->username}}" >   
                  <button type="submit"  class="hidden-print btn btn-success" role="button" type="submit"><span class="glyphicon glyphicon-save"></span> Save</button>
                  {{csrf_field() }}
                  {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@php  
  $no = 0;
@endphp
<div id="paket" class="tab-pane fade"> {{--custom paket--}}
  <div style=" margin-top:50px" class="mainbox ">
    <div class="panel panel-info">
      <div class="panel-body" >
        <table class="table table-striped">
        <h2 style="font-family:roboto; color:#E6297D;">Input Your Order Here</h2>
          <thead>
            <col width="130">
            <col width="300">
            <col width="100">
            <col width="100">
            <col width="40">
            <tr>
              <th>paket</th>
              <th>Deskripsi</th>
              <th>Harga</th>
              <th>Jumlah</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
@foreach($pakets as $paket)
            <tr>
              <td>
                  <div class="panel">
                    <div class="panel-body" id="harga">
                      {{$paket->nama_paket}}
                    </div>
                  </div>
               
              </td>
              <td>
                  <div class="panel">
                    <div class="panel-body" id="harga">
                      {{$paket->deskripsi_paket}}
                    </div>
                  </div>
              </td>
              <td>
                  <div class="panel">
                    <div class="panel-body" id="harga">
                    {{$paket->harga_paket}}
                    </div>
                  </div>
              </td>
              <td>
                  <div class="input-group" >
                    <input form="form1" type="text" class="form-control harga" name="quantity{{$no}}"  id="paket{{$paket->id_paket}}" onkeyup="kali({{$paket->id_paket}},{{$paket->harga_paket}}),total(),duit()">
                    <input type="text" form="form1" name="paketo{{$no++}}" value="{{$paket->nama_paket}}" hidden >
                    <div class="input-group-addon hidden-print" placeholder="Masukkan Jumlah">pcs</div>            
                  </div>
              </td>
              <td>
                  <div class="panel">
                    <div class="panel-body" id="harga">
                      <strong>Rp. <a id="hasilkali{{$paket->id_paket}}" class="subtotal" style="font-family:roboto; color:#E6297D;font-weight: bold;"></a></strong>
                    </div>
                  </div>
              </td>
            </tr>
@endforeach
          </tbody>
        </table>

                <div class="row">
                    <div class="col-md-6">
                      <div class="panel">
                        <div class="panel-body" id="harga">
                          <h4><b>TOTAL</b></h4>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-3">
                        <div class="panel">
                          <div class="panel-body harga">
                            <h4 id="totalpenjualan"  name="totalpenjualan" style="font-family:roboto; color:#E6297D;font-weight: bold;">0</h4>
                          </div>
                        </div>
                      </div>
                 </div>
                  {!! Form::open(['route' => 'save.store','id'=>'form1']) !!}
                  <button type="button" id="" class="hidden-print print-window btn btn-default  buttonPrint" style="font-family:roboto; color:#ffffff;"><span class="glyphicon glyphicon-print "></span> Print</button>
                  <input type="number" name="nomer" value="{{$no}}" hidden >
                  <input type="hidden" name="type" value="paket" >   
                  <input type="hidden" value="{{Auth::user()->id}}" name="user"  form="form1"/>
                  <input type="hidden" id="penjualan" name="totalpenjualan" value="0" >
                  <input type="hidden" id="restoran" name="restoran" value="{{$restos->nama_resto}}" >
                  <input type="hidden" id="username" name="username" value="{{Auth::user()->username}}" >   
                  <button type="submit"  class="hidden-print btn btn-success" role="button" type="submit"><span class="glyphicon glyphicon-save"></span> Save</button>
                  {{csrf_field() }}
                  {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
</div>
@foreach($pakets as $paket)
<!-- Modal Detail Paket-->
<div class="modal fade" id="myModalPaket{{$paket->id_paket}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" value="">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
        <div class="panel-heading"><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"></use></svg>
          Detail Paket
        </div>
            </div>
            
            <!-- Modal Body -->
      <div class="modal-body">  
        <div class="panel panel-default" id="div1">
          <div class="panel-row">
                  {!! Form::model($paket,['route' => ['paketAdmin.update',$paket],'method'=>'patch','class' => 'form-horizontal', 'files' => true]) !!} 
                      <!-- Name Paket-->
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="name" align="left">Nama Paket</label>
                        <div class="col-md-9" align="left">
                          <?php echo $paket['nama_paket'];?>
                        </div>
                      </div>
                    
                      <!-- Harga Paket-->
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="email" align="left">Harga</label>
                        <div class="col-md-9" align="left">
                          <?php echo $paket['harga_paket'];?>
                        </div>
                      </div>
                      <!-- Deskripsi Paket-->
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="message" align="left">Deskripsi</label>
                        <div class="col-md-9" align="left">
                          <?php echo $paket['deskripsi_paket'];?>
                        </div>
                      </div> 

                      <!-- Modal Footer -->
                      {{csrf_field() }} 
                              <div class="modal-footer">
                                  <button type="submit" class="btn btn-primary" data-dismiss="modal">
                                      Close
                                  </button>
                              </div>
                  {!! Form::close() !!} 
          </div>
        </div> 
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endforeach
  <script type="text/javascript" src="{{asset('js/test2.js')}}"></script>

@endsection
