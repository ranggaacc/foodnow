@extends('layouts/layoutCustomer.master2')
@section('title','Register')
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
    <!--/Flash layout insert-->
    
          <div class="row row-centered">
          @include('layouts.flash')
            <div class="col-sm-4 col-centered">
              <article role="login">
                <h3 class="text-center" style="font-family:roboto; color:#E6297D;">REGISTER</h3>
                <form class="signup" action="{{url(action('RegisterController@postRegister'))}}" method="post">
                  <div class="form-group">
                    <input type="text" name="nama" class="form-control" placeholder="Nama" required="true">
                  </div>
                  <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username" required="true">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email Address" required="true">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="true">
                  </div>
                  {{csrf_field() }}
                  <div class="form-group">
                    <input type="submit" class="btn btn-success"  value="SUBMIT">
                  </div>
                </form>

              </article>
            </div>
          </div>
          <!-- end of row -->

@endsection
