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
                <h3 class="text-center" style="font-family:roboto; color:#E6297D;">EDIT PROFIL</h3>
                {!! Form::model($users, ['route' => ['EditProfil.update', $users], 'method'=>'patch','class' => 'form-horizontal']) !!}
                  <div class="form-group">
                  <label class="control-label" for="name" >Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama" required="true" value="<?php echo $users['name'];?>">
                  </div>
                  <div class="form-group">
                  <label class=" control-label" for="name" >Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required="true" value="<?php echo $users['username'];?>">
                  </div>
                  <div class="form-group">
                  <label class=" control-label" for="name" >Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email Address" required="true" value="<?php echo $users['email'];?>">
                  </div>
{{--                   <div class="form-group">
                      <a href="/EditPassword/{{ Auth::user()->id }}"><b>Change Password</b></a>
                  </div> --}}
                  {{csrf_field() }}
                  <div class="form-group">
                    <input type="submit" class="btn btn-success"  value="SUBMIT">
                  </div>
                {!! Form::close() !!}

              </article>
            </div>
          </div>
          <!-- end of row -->

@endsection
