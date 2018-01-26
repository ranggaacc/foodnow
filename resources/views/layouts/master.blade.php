<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Dashboard</title>

 <link rel="stylesheet" type="text/css" href="{{asset('sweetalert-master/dist/sweetalert.css')}}">
<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('css/bootstrap-table.css')}}" rel="stylesheet">
<link href="{{URL::asset('css/datepicker3.css')}}" rel="stylesheet">
<link href="{{URL::asset('css/styles.css')}}" rel="stylesheet">
<!--Floating Button-->
<link rel="stylesheet" href="{{URL::asset('css/w3.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<!--Tabs online gan-->
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
<!--Icons-->
<script src="{{URL::asset('js/lumino.glyphs.js')}}"></script>
<style>
	.crop {
		width:220px;
		overflow:hidden;
		height:40px;
		line-height:20px;
		white-space: nowrap;
		text-overflow: ellipsis;
		}​
	#data {

    width: 100px;
    overflow: hidden;
    
    
    }
     #data:hover{
    overflow: visible; 
    white-space: normal; 
	}

	#cardResto{
	 width:210px;
	 height: 150px;
	}

	.w3-btn-floating{
		position:fixed;
		z-index:10;
		bottom:10px;
		right:10px;
		padding:30px;
		}

</style>

<style id="glyphs-style" type="text/css">
.glyph{
	fill:currentColor;
	display:inline-block;
	margin-left:auto;
	margin-right:auto;
	position:relative;
	text-align:center;
	vertical-align:middle;
	width:14px;
	height:14px;
}

.glyph.sm{width:30%;height:30%;}
.glyph.md{width:50%;height:50%;}
.glyph.lg{height:100%;width:100%;}
.glyph-svg{width:100%;height:100%;}
.glyph-svg .fill{fill:inherit;}
.glyph-svg .line{stroke:currentColor;stroke-width:inherit;}
.glyph.spin{animation: spin 1s linear infinite;}

@-webkit-keyframes spin {
	from { transform:rotate(0deg); }
	to { transform:rotate(360deg); }
}
@-moz-keyframes spin {
	from { transform:rotate(0deg); }
	to { transform:rotate(360deg); }
}
@keyframes spin {
	from { transform:rotate(0deg); }
	to { transform:rotate(360deg); }
}
.uppercase {
    text-transform: uppercase;
}
.lowercase {
    text-transform: lowercase;
}
    #cardResto{
     width:260px;
     height: 240px;
    }
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

</head>
<body>


	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('image/logo.png') }}" /></span></a>
				<ul class="user-menu">
					<li class="">
						<a href=""><strong>Hello !</strong></a>
						<a href="#" class="uppercase"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>{{ Auth::user()->name }} </a>

					</li>
				</ul>
			</div>				
		</div><!-- /.container-fluid -->
	</nav>


		

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
      <form class="navbar-form" role="search" action="/searchAdmin" method="POST">
      {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Resto" name="q" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
      </form>
		<ul class="nav menu">
			<li class="active"><a href="/dashboardAdmin"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="/user"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>Home</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="/logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
		</ul>

	</div><!--/.sidebar-->


@yield('content')

 <script type="text/javascript" src="{{URL::asset('js/custom.js') }}"></script>
	<script src="{{URL::asset('js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('js/chart.min.js')}}"></script>
	<script src="{{URL::asset('js/chart-data.js')}}"></script>
	<script src="{{URL::asset('js/easypiechart.js')}}"></script>
	<script src="{{URL::asset('js/easypiechart-data.js')}}"></script>
	<script src="{{URL::asset('js/bootstrap-datepicker.js')}}"></script>
	<script src="{{URL::asset('js/bootstrap-table.js')}}"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
	<script>

	$(document).ready(function(){
		
			
			$(".alert").delay(200).addClass("in").fadeOut(3500);

		    });


	</script>	
	<script>
		$(function () {
		  $('.data-delete').on('click', function (e) {
		    if (!confirm('Are you sure you want to delete?')) return;
		    e.preventDefault();
		    $('#form-delete-' + $(this).data('form')).submit();
		  });
		});
	</script>
    <!-- Scripts -->
    <script src="{{ asset('sweetalert-master/dist/sweetalert.min.js')}}"></script>

    <!-- Include this after the sweet alert js file -->
    @include('sweet::alert')
    <script>
            $('.print-window').click(function() {
            window.print();
        });
    </script>
</body>
</html>