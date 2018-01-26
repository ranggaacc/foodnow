@extends('layouts/layoutCustomer.master')
@section('title','Forget PASSWORD')
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
    @include('layouts.flash')
          <div class="row row-centered">
            <div class="col-sm-4 col-centered">
              <article role="login">
                <h3 class="text-center" style="font-family:roboto; color:#E6297D;"><i class="fa fa-lock"></i>FORGET THE PASSWORD ?</h3>
                <p class="text-center" style="font-family:roboto; color:#E6297D;"><b>input your mail and system will sent your password to your mail !</b></p>
                <form class="signup" action="resetpw" method="post">
                  <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="email" required="true">
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
