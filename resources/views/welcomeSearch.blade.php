@extends('layouts/layoutCustomer.master')
@section('title','Search Result')
@section('content')


      <!-- Popular Resto -->
      <div class="container">

        <center><h3 style="font-family:roboto; color:#E6297D;"><b>Search Result</b></h3></center>
      </div>
      <br>
{{-- <div id="myId" class="hidden">Foobar</div> --}}

      <div class="container">
          <div class="row">
            @if(isset($details))
            @foreach($details as $resto)
                        <div class="col-sm-3 col-md-3">
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
                
            @else <!--/Flash layout gagal-->
                @include('layouts.flash')
            @endif
                </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

@endsection
