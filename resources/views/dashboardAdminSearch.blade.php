@extends('layouts.master')


@section('title','Dashboard Admin')



@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="user"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard Admin</h1>
			</div>
		</div><!--/.row-->
	<!--/.FLOATING BUTTON-->
		<div class="w3-container" data-toggle="modal" data-target=".produk">
			  <a class="w3-btn-floating w3-green"><span style="position:absolute; top:9px; left:20px;">+</span></a>
		</div>

	<!-- Small modal INPUT RESTO -->
		<div class="modal fade produk" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
			  <div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
		<!-- Modal Header -->
	            <div class="modal-header">
	                <button type="button" class="close" 
	                   data-dismiss="modal">
	                       <span aria-hidden="true">&times;</span>
	                       <span class="sr-only">Close</span>
	                </button>
					<div class="panel-heading"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						Tambah Resto
					</div>
	            </div>
		 <!-- Modal Body INPUT RESTO -->
	            	<div class="modal-body">     
						<div class="panel panel-default" id="div1">
							<div class="row">
								<div class="panel-body">{{-- {{ url(action('DashboardAdminController@insertResto')) }} --}}
									{!! Form::open(['route' => 'dashboardAdmin.store', 'class' => 'form-horizontal', 'files' => true]) !!}
											<!-- Name input-->
											<div class="form-group">
												<label class="col-md-3 control-label" for="name" >Nama Resto</label>
												<div class="col-md-9">
												<input id="name" name="nama_resto" type="text" placeholder="Masukkan Nama Restaurant..." class="form-control" required="true">
												</div>
											</div>
										
											<!-- Alamat input-->
											<div class="form-group">
												<label class="col-md-3 control-label" for="email">Alamat</label>
												<div class="col-md-9">
													<input id="name" name="alamat_resto" type="text" placeholder="Masukkan Alamat...." class="form-control" required="true">
												</div>
											</div>
											<!-- No telp input-->
											<div class="form-group">
												<label class="col-md-3 control-label" for="name">No.Telp Resto</label>
												<div class="col-md-9">
												<input id="name" name="no_telp" type="number" placeholder="Masukkan Nomer Telepon..." class="form-control" required="true">
												</div>
											</div>
											
											<!-- Deskripsi Input -->
											<div class="form-group">
												<label class="col-md-3 control-label" for="message">Deskripsi</label>
												<div class="col-md-9">
													<textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsikan Resto..." rows="5" required="true"></textarea>
												</div>
											</div>
											<!-- Import gambar -->
											<div class="form-group">
												<label class="col-md-3 control-label" for="message">Pilih Gambar</label>
												<div class="col-md-9">

													<input type="file" name="image" accept="image/*"  onchange="tampilkanPreview(this,'preview')" required="true"/>
																				<!--element image untuk menampilkan preview-->
													<img id="preview" width="220px"/>
												</div>
											</div>	

											<!-- Modal Footer -->
											{{csrf_field() }}
									            <div class="modal-footer">
									                <button type="submit" class="btn btn-success">
									                    Tambah
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

		<!--/CARD RESTO-->
		
		<div class="row">
            @if(isset($details))
            @foreach($details as $resto)
				  <div class="col-sm-6 col-md-4">
				        <div class="modal-header">
							<div class="admin-delete pull-right">
									{!! Form::open(['method'=> 'DELETE','route'=>['dashboardAdmin.destroy',$resto->id_resto],'id' => 'form-delete-companies-' . $resto->id_resto ]) !!}
									<a href="" class="button data-delete" data-form="companies-{{ $resto->id_resto }}">
									Delete <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> </a>
									{!! Form::close() !!}
			
							</div>
						</div>

						<div class="thumbnail">
							<img src="{{asset('imageUpload/' .$resto->gambar) }}" id="cardResto" alt="rumah makan" >
							<div class="caption">
							<div class="crop">
								<font face=""><h3>{{ $resto->nama_resto }}</h3></font>
							</div>
								<div class="crop">
								<p>{{ $resto->alamat_resto }}</p>
								{{-- {{ $resto->deskripsi }} --}}
								</div>
								<br>
								<!-- Button trigger modal Edit Profil -->
									<a href="#" class="btn btn-primary btn-sm " role="button" data-toggle="modal" data-target="#myModalNorm{{$resto->id_resto}}">Edit Resto</a> 
									<a href="/dashboardAdmin/{{$resto->id_resto}}" class="btn btn-default btn-sm" role="button">Paket</a> 
									<a href="/customAdmin/{{$resto->id_resto}}" class="btn btn-default btn-sm " role="button">Custom</a> 
				     		</div>
						</div>
				  </div>
            @endforeach
                
            @else <!--/Flash layout gagal-->
                @include('layouts.flash')
            @endif
		</div><!--/.row-->

@foreach($restos as $resto)
<!-- Modal Edit Resto-->
<div class="modal fade" id="myModalNorm{{$resto->id_resto}}" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
				<div class="panel-heading"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
					Edit Resto
				</div>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
			<div class="panel panel-default" id="div1">
				
					<div class="panel-body">
					{!! Form::model($resto, ['route' => ['dashboardAdmin.update', $resto], 'method'=>'patch','class' => 'form-horizontal', 'files' => true]) !!}
						{{-- <form class="form-horizontal" action="{{route('dashboard',$resto->id_resto)}}" method="PATCH" enctype="multipart/form-data"> --}}
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name" >Nama Resto</label>
									<div class="col-md-9">
									<input id="name" name="nama_resto" type="text" placeholder="Masukkan Nama Restaurant..." class="form-control" required="true" value="{{ old('nama_resto', $resto->nama_resto) }}">
									</div>
								</div>
							
								<!-- Alamat input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Alamat</label>
									<div class="col-md-9">
										<input id="name" name="alamat_resto" type="text" placeholder="Masukkan Alamat...." class="form-control" required="true" value="<?php echo $resto['alamat_resto'];?>">
									</div>
								</div>
								<!-- No telp input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">No.Telp Resto</label>
									<div class="col-md-9">
									<input id="name" name="no_telp" type="number" placeholder="Masukkan Nomer Telepon..." class="form-control" required="true" value="<?php echo $resto['no_telp'];?>">
									</div>
								</div>
								
								<!-- Deskripsi Input -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Deskripsi</label>
									<div class="col-md-9">
										<textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsikan Resto..." rows="5" required="true" value=""><?php echo $resto['deskripsi'];?></textarea>
									</div>
								</div>
								<!-- Import gambar -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Pilih Gambar</label>
									<div class="col-md-9">

										<input type="file" value="<?php echo $resto['gambar'];?>" name="image" accept="image/*"  onchange="tampilkanPreview(this,'preview')"/>
																	<!--element image untuk menampilkan preview-->
										<img id="preview" width="220px"/>
									</div>
								</div>	

								<!-- Form actions -->
								{{csrf_field() }}
								<!-- Modal Footer -->
						            <div class="modal-footer">
						                <button type="submit" class="btn btn-primary">
						                    Save changes
						                </button>
						            </div>
						{!! Form::close() !!}
					</div>
				</div> 
            </div>
        </div>
    </div>
</div>

@endforeach



								
@endsection
