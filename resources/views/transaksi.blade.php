@extends('layouts/layoutCustomer.master')
@section('title','Order History')
@section('content')
<br>
<br>
<br>
<br>
<!-- transaksi Resto -->
<div class="container">

        {{-- <a type="button" class="btn btn-primary btn-round-lg btn-sm hidden-print" href="/user"><span class="glyphicon glyphicon-chevron-left"></span> Back</a> --}}
       
        <h3 class="hidden-print" style="font-family:roboto; color:#E6297D;"><b>Order History</b></h3>

        <br>
          <div class="panel panel-default hidden-print">
            <!-- Table -->
            <div class="table-responsive">
              <table class="table">
                <tr bgcolor="#757475">
                  <th><h5 style="font-family:roboto; color:white;">No</h5></th>
                  <th><h5 style="font-family:roboto; color:white;">Date Order</h5></th>
                  <th><h5 style="font-family:roboto; color:white;">Resto</h5></th>
                  <th><h5 style="font-family:roboto; color:white;">Order Type</h5></th>
                  <th><h5 style="font-family:roboto; color:white;">Invoice</h5></th>
                  <th align="center"><h5 style="font-family:roboto; color:white;">Action</h5></th>
                  <!-- <th><h5 style="font-family:roboto; color:white;">Action</h5></th> -->
                </tr>
                @foreach($saves as $save)
                <tr>
                  <td align="left">{{$i1++}}</td>
                  <td align="left">{{$save->created_at}}</td>
                  <td align="left">{{$save->restoran}}</td>
                  <td align="left">{{$save->type}}</td>
                  <td align="left"><a href="" class="" role="button" data-toggle="modal" data-target="#myModalSave{{$save->id_save}}">Detail </a></td>
                  <td align="left">                  
                  <a id="delete-btn" href="/delete/{{$save->id_save}}" class="btn btn-danger">Delete</a>
                  </td>
                  <!-- <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal">Re-Order</button></td> -->
                </tr>
                @endforeach
              </table>
              
            </div>
          </div>
  @foreach($saves as $save)
  <!-- Modal Detail Paket-->
      <div class="modal fade" id="myModalSave{{$save->id_save}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" value="">
          <div class="modal-dialog">
              <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header hidden-print">
                      <button type="button" class="close" data-dismiss="modal">
                             <span aria-hidden="true">&times;</span>
                             <span class="sr-only">Close</span>
                      </button>
                  </div>
                  
                  <!-- Modal Body -->
            <div class="modal-body">  
              <div class="panel panel-default">
                <div class="table-responsive">
                  <table class="table">
                    <tr bgcolor="#757475">
                      <th><h5 style="font-family:roboto; color:white;">Order Code</h5></th>
                      <th><h5 style="font-family:roboto; color:white;">{{$save->id_save}}</h5></th>
                    </tr>
                    <tr>
                      <th>Order Date</th>
                      <td align="left">{{$save->created_at}}</td>
                    </tr>
                    <tr>
                      <th>Name</th>
                      <td align="left">{{$save->nama_user}}</td>
                    </tr>
                    <tr>
                      <th>Resto</th>
                      <td align="left">{{$save->restoran}}</td>
                    </tr>
                    <tr>
                      <th>Order Type</th>
                      <td align="left">{{$save->type}}</td>
                    </tr>
                    <tr>
                      <th>Detail</th>
                      <td align="left">{{$save->detail}}</td>
                    </tr>
                    <tr>
                      <th>Total Price</th>
                      <th align="left">{{$save->amount}}</th>
                    </tr>
                  </table>
                </div>              
              </div>

            </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary print-window hidden-print">
                      <span class="glyphicon glyphicon-print "></span>  Print
                  </button>
              </div>
          </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
<div class="hidden-print"><center>{!! $saves->links() !!}</center></div>
<br>
<br>
<br>
@endsection

