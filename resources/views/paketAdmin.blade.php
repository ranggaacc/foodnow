@extends('layouts.master')


@section('title','Paket Admin')

@section('sidebar')
<style>
	.crop2 {
		width:230px;
		overflow:hidden;
		height:20px;
		line-height:20px;
		white-space: nowrap;
		text-overflow: ellipsis;
		}​
</style>

<script>
            function tampilkanPreview(gambar,idpreview){
//                membuat objek gambar
                var gb = gambar.files;
                
//                loop untuk merender gambar
                for (var i = 0; i < gb.length; i++){
//                    bikin variabel
                    var gbPreview = gb[i];
                    var imageType = /image.*/;
                    var preview=document.getElementById(idpreview);            
                    var reader = new FileReader();
                    
                    if (gbPreview.type.match(imageType)) {
//                        jika tipe data sesuai
                        preview.file = gbPreview;
                        reader.onload = (function(element) { 
                            return function(e) { 
                                element.src = e.target.result; 
                            }; 
                        })(preview);
 
    //                    membaca data URL gambar
                        reader.readAsDataURL(gbPreview);
                    }else{
//                        jika tipe data tidak sesuai
                        alert("Type file tidak sesuai. Khusus image.");
                    }
                   
                }    
            }

        </script>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href=""><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href=".user"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>Home</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
		</ul>

</div><!--/.sidebar-->
@endsection


@section('content')



	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Paket</h1>
			</div>
		</div><!--/.row-->

<!--/Flash layout insert-->
<div class="row">
	@include('layouts.flash')
</div>
	



	<!--/.tabel daftar menu paket-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Tabel Menu Paket</div>
						<div class="panel-body">
							<button type="submit" class="btn btn-success" data-toggle="modal" data-target=".paket">+  Tambah Item</button>
							<br></br>
							<table class="table table-striped table-bordered" >
							    <thead>
							        <th><center>ID</center></th>
							        <th><center>Nama Item</center></th>
							        <th><center>Harga Item</center></th>
							        <th><center>Deskripsi</center></th>
							        <th><center>Image</center></th>
							       	<th><center>Action</center></th>
							  	</thead>
							@foreach($pakets as $paket)
							    <tr>   
								    <td><center>{{$paket->id_paket}}</center></td>
								    <td><center>{{$paket->nama_paket}}</center></td>
								    <td><center>{{$paket->harga_paket}}</center></td>
								    <td><center class="crop">{{$paket->deskripsi_paket}}</center></td>
								    <td><center>{{$paket->gambar}}</center></td>
								    <td>

									    <center>
										{!! Form::model($paket,['route'=>['paketAdmin.destroy',$paket],'method'=>'delete' ]) !!}
										<a href="#" class="btn btn-primary btn-sm" role="button" data-toggle="modal" data-target="#myModalPaket{{$paket->id_paket}}">Edit</a>
											{!! Form::submit('Hapus',array('class' => 'btn btn-danger  btn-sm')) !!}
										{!! Form::close() !!}
									    </center>
								    </td>
								
								</tr>
							@endforeach
								</table>
								<center>{!! $pakets->links() !!}</center>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
<!-- Small modal INPUT MENU PAKET -->
		<div class="modal fade paket" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
			  <div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
		<!-- Modal Header -->
	            <div class="modal-header">
	                <button type="button" class="close" 
	                   data-dismiss="modal">
	                       <span aria-hidden="true">&times;</span>
	                       <span class="sr-only">Close</span>
	                </button>
					<div class="panel-heading"><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"></use></svg>
						Tambah Menu Paket
					</div>
	            </div>
		 <!-- Modal Body INPUT MENU PAKET -->
	            	<div class="modal-body">     
						<div class="panel panel-default" id="div1">
							<div class="row">
								<div class="panel-body">{{-- {{ url(action('DashboardAdminController@insertResto')) }} --}}
									{!! Form::open(['route' => 'paketAdmin.store', 'class' => 'form-horizontal', 'files' => true]) !!} 
											<!-- Name Paket-->
											<div class="form-group">
												<label class="col-md-3 control-label" for="name" >Nama Paket</label>
												<div class="col-md-9">
												<input id="name" name="nama_paket" type="text" placeholder="Masukkan Nama Paket" class="form-control" required="true">
												</div>
											</div>
										
											<!-- Harga Paket-->
											<div class="form-group">
												<label class="col-md-3 control-label" for="email">Harga Paket</label>
												<div class="col-md-9">
													<input id="name" name="harga_paket" type="number" placeholder="Masukkan Harga Menu Paket" class="form-control" required="true">
												</div>
											</div>
											<!-- Deskripsi Paket-->
											<div class="form-group">
												<label class="col-md-3 control-label" for="message">Deskripsi</label>
												<div class="col-md-9">
													<textarea class="form-control" id="deskripsi" name="deskripsi_paket" placeholder="Deskripsikan Isi Paket" rows="5" required="true" ></textarea>
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
												<input id="name" name="id_resto" type="hidden" value="{{$restos->id_resto}}">

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
@foreach($pakets as $paket)
<!-- Modal Edit Paket-->
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
					Edit Menu Paket
				</div>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">  
				<div class="panel panel-default" id="div1">
					<div class="panel-row">
									{!! Form::model($paket,['route' => ['paketAdmin.update',$paket],'method'=>'patch','class' => 'form-horizontal', 'files' => true]) !!} 
											<!-- Name Paket-->
											<div class="form-group">
												<label class="col-md-3 control-label" for="name" >Nama Paket</label>
												<div class="col-md-9">
												<input id="name" name="nama_paket" type="text" placeholder="Masukkan Nama Menu Paket" class="form-control" required="true" value="<?php echo $paket['nama_paket'];?>">
												</div>
											</div>
										
											<!-- Harga Paket-->
											<div class="form-group">
												<label class="col-md-3 control-label" for="email">Harga</label>
												<div class="col-md-9">
													<input id="name" name="harga_paket" type="text" placeholder="Masukkan Harga Menu Paket" class="form-control" required="true" value="<?php echo $paket['harga_paket'];?>">
												</div>
											</div>
											<!-- Deskripsi Paket-->
											<div class="form-group">
												<label class="col-md-3 control-label" for="message">Deskripsi</label>
												<div class="col-md-9">
													<textarea class="form-control" id="deskripsi" name="deskripsi_paket" placeholder="Deskripsikan Isi Paket" rows="5" required="true" value=""><?php echo $paket['deskripsi_paket'];?></textarea>
												</div>
											</div>
											<!-- Import gambar -->
											<div class="form-group">
												<label class="col-md-3 control-label" for="message">Pilih Gambar</label>
												<div class="col-md-9">

													<input type="file" name="image" accept="image/*"  onchange="tampilkanPreview(this,'preview')"/>
																				<!--element image untuk menampilkan preview-->
													<img id="preview" width="220px"/>
												</div>
											</div>	

											<!-- Modal Footer -->
									 		{{csrf_field() }} 
									            <div class="modal-footer">
									                <button type="submit" class="btn btn-primary">
									                    Save
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
