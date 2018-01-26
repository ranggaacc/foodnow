@extends('layouts/layoutCustomer.master2')

@section('title','Login-Page')


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
<br>
<br></br>
     <div class="row row-centered">
            <div class="col-md-4 col-centered">
            <center>   
                <h3 style="font-family:roboto; color:#E6297D;" href=""><strong>LOGIN FORM</strong></h3>
                <br></br>
            </center>
                 <form class="form" role="form" method="post" action="{{url(action('LoginController@postLogin'))}}" accept-charset="UTF-8" id="login-nav">
                        <div class="form-group">
                             <label class="sr-only" for="exampleInputEmail2">Email or Username</label>
                             <input type="text" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email or Username" required>
                        </div>
                        <div class="form-group">
                             <label class="sr-only" for="exampleInputPassword2">Password</label>
                             <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                             
                        </div>
                        {{csrf_field() }}
                        <div class="form-group">
                             <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                        </div>
                        <div class="checkbox">
                             <label>
                             <input type="checkbox"> keep me logged-in
                             </label>
                        </div>
                        <div class="bottom text-center">
               				 New here ? <a href="register"><b>Join Us</b></a>
           				</div>
                 </form>
            </div>

     </div>


	
@endsection

</html>
