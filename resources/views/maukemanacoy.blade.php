@extends('layouts/layoutCustomer.master')

@section('title','!! FORBIDDEN !!')


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
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
		<center>
			<h1 style="font-family:roboto; color:#E6297D;"><strong>!! PAGE NOT FOUND !!</strong>&nbsp;&nbsp;</h1>
		<img class="img-responsive" src="{{URL::asset('/image/404.png')}}" alt="">
		</center>
	<br></br>
</div>
</div>
	
@endsection

</html>
