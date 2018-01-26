@extends('layouts/layoutCustomer.master')
@section('title','EDIT PROFIL')
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
                <h3 class="text-center" style="font-family:roboto; color:#E6297D;"><i class="fa fa-lock"></i>EDIT PROFIL</h3>
                {!! Form::model($users, ['route' => ['EditPassword.update', $users], 'method'=>'patch','class' => 'form-horizontal']) !!}
                  <div class="form-group">
                  <label class="control-label" for="name" >Old Password</label>
                    <input type="password" name="oldpassword" class="form-control" placeholder="Old Password" required="true" value="<?php echo $users['name'];?>">
                  </div>
                  <div class="form-group">
                  <label class=" control-label" for="name" >New Password</label>
                    <input type="password" name="newpassword" class="form-control" placeholder="New Password" required="true" value="<?php echo $users['username'];?>">
                  </div>
                  <div class="form-group">
                  <label class=" control-label" for="name" >Retype Password</label>
                    <input type="password" name="retypepassword" class="form-control" placeholder="Password" required="true">
                  </div>
                  {{csrf_field() }}
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary"  value="Save Change">
                  </div>
                {!! Form::close() !!}

              </article>
            </div>
          </div>
          <!-- end of row -->

@endsection
