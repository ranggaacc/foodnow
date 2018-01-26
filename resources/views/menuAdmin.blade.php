@extends('layouts.master')


@section('title','Menu Admin')

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
				<h1 class="page-header">Daftar Menu</h1>
			</div>
		</div><!--/.row-->

<!--/Flash layout insert-->
<div class="row">
	@include('layouts.flash')
</div>

	<!--/.tabel daftar menu custom-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Tabel Menu Custom</div>

					<div class="panel-body">
							<button type="submit" class="btn btn-success" data-toggle="modal" data-target=".custom">+  Tambah Item</button>
							<table class="table table-striped">
							    <thead>
							        <th><center>ID</center></th>
							        <th><center>Nama Item</center></th>
							        <th><center>Kategori</center></th>
							        <th><center>Harga Item</center></th>
							       	<th><center>Action</center></th>
							  	</thead>
							  	@foreach($customs as $custom)
							    <tr>
								    <td><center>{{$custom->id_custom}}</center></td>
								    <td><center>{{$custom->nama_custom}}</center></td>
								    <td><center>{{$custom->kategori}}</center></td>
								    <td><center>{{$custom->harga_custom}}</center></td>
								    <td>
									    <center>
									    <center>
										{!! Form::model($custom,['route'=>['customAdmin.destroy',$custom],'method'=>'delete' ]) !!}
										<a href="#" class="btn btn-primary btn-sm" role="button" data-toggle="modal" data-target="#myModalCustom{{$custom->id_custom}}">Edit</a>
											{!! Form::submit('Hapus',array('class' => 'btn btn-danger  btn-sm')) !!}
										{!! Form::close() !!}
									    </center>
									    </center>
								    </td>
								</tr>
								@endforeach
								</table>

						</div>
						<center>{!! $customs->links() !!}</center>
					</div>
				</div>
			</div>
		</div><!--/.row-->
  </div>
<!-- Small modal INPUT MENU CUSTOM -->
		<div class="modal fade custom" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
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
						Tambah Menu
					</div>
	            </div>
		 <!-- Modal Body INPUT MENU CUSTOM -->
	            	<div class="modal-body">     
						<div class="panel panel-default" id="div2">
							<div class="row">
								<div class="panel-body">{{-- {{ url(action('DashboardAdminController@insertResto')) }} --}}
									{!! Form::open(['route' => 'customAdmin.store', 'class' => 'form-horizontal', 'files' => true]) !!} 
											<!-- Name Paket-->
											<div class="form-group">
												<label class="col-md-3 control-label" for="name" >Nama Menu</label>
												<div class="col-md-9">
												<input id="name" name="nama_custom" type="text" placeholder="Masukkan Nama Menu" class="form-control" required="true">
												</div>
											</div>
										
											<!-- Harga Paket-->
											<div class="form-group">
												<label class="col-md-3 control-label" for="email">Harga Menu</label>
												<div class="col-md-9">
													<input id="name" name="harga_custom" type="number" placeholder="Masukkan Harga Menu" class="form-control" required="true"> 	
												</div>
											</div>
											<!-- Import gambar -->
{{-- 											<div class="form-group">
												<label class="col-md-3 control-label" for="message">Pilih Gambar</label>
												<div class="col-md-9">

													<input type="file" name="image" accept="image/*"  onchange="tampilkanPreview(this,'preview')" required="true"/>
																				<!--element image untuk menampilkan preview-->
													<img id="preview" width="220px"/>
												</div>
											</div>	 --}}
											<div class="form-group">
												<label class="col-md-3 control-label" for="Kategori">Kategori</label>
												<div class="col-md-9" >
												  
												    <label class="radio">
												      <input type="radio" value="nasi" name="kategori" required >Nasi
												    </label>
												    <label class="radio">
												      <input type="radio" value="sayur" name="kategori" >Sayur
												    </label>
												    <label class="radio">
												      <input type="radio" value="lauk" name="kategori" >Lauk
												    </label>
												    <label class="radio">
												      <input type="radio" value="minum" name="kategori" >Minum
												    </label>
													<label class="radio">
												      <input type="radio" value="buah" name="kategori" >Buah
												    </label>
													<label class="radio">
												      <input type="radio" value="lainnya" name="kategori" required>Lainnya
												    </label>
												 
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
@foreach($customs as $custom)
<!-- Modal Edit Custom-->
<div class="modal fade" id="myModalCustom{{$custom->id_custom}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" value="">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
				<div class="panel-heading"><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"></use></svg>
					Edit Menu
				</div>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">  
				<div class="panel panel-default" id="div2">
					<div class="panel-row">
									{!! Form::model($custom,['route' => ['customAdmin.update',$custom],'method'=>'patch','class' => 'form-horizontal', 'files' => true]) !!} 
											<!-- Name Paket-->
											<div class="form-group">
												<label class="col-md-3 control-label" for="name" >Nama Menu</label>
												<div class="col-md-9">
												<input id="name" name="nama_custom" type="text" placeholder="Masukkan Nama Menu" class="form-control" required="true" value="<?php echo $custom['nama_custom'];?>">
												</div>
											</div>
										
											<!-- Harga Paket-->
											<div class="form-group">
												<label class="col-md-3 control-label" for="email">Harga Menu</label>
												<div class="col-md-9">
													<input id="name" name="harga_custom" type="text" placeholder="Masukkan Harga Menu Paket" class="form-control" required="true" value="<?php echo $custom['harga_custom'];?>">
												</div>
											</div>
{{-- 											<!-- Import gambar -->
											<div class="form-group">
												<label class="col-md-3 control-label" for="message">Pilih Gambar</label>
												<div class="col-md-9">

													<input type="file" name="image" accept="image/*"  onchange="tampilkanPreview(this,'preview')" />
																				<!--element image untuk menampilkan preview-->
													<img id="preview" width="220px"/>
												</div>
											</div>	
 --}}
 											<div class="form-group" required>
												<label class="col-md-3 control-label" for="Kategori">Kategori</label>
												<div class="col-md-9">
												  
												    <label class="radio">
												      <input type="radio" value="nasi" name="kategori" >Nasi
												    </label>
												    <label class="radio">
												      <input type="radio" value="sayur" name="kategori" >Sayur
												    </label>
												    <label class="radio">
												      <input type="radio" value="lauk" name="kategori" >Lauk
												    </label>
												    <label class="radio">
												      <input type="radio" value="minum" name="kategori" >Minum
												    </label>
													<label class="radio">
												      <input type="radio" value="buah" name="kategori" >Buah
												    </label>
													<label class="radio">
												      <input type="radio" value="lainnya" name="kategori" >Lainnya
												    </label>
												 
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
</div>

</div>






								
@endsection
