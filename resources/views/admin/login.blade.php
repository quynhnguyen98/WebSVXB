@extends('ad_login')
@section('layout')
    

<div id="login-page">
    <div class="container">
      <form class="form-login" action="{{URL::to('/show-dashboard')}}" method="POST">
          @csrf
        <h2 class="form-login-heading">ADMIN</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="User ID" autofocus name="user" required>
          <br>
          <input type="password" class="form-control" placeholder="Password" name="password" required>
          <label class="checkbox">
           
            </label>
          <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> ĐĂNG NHẬP</button>
       
        
        </div>
     
      </form>
    </div>
  </div>
  @endsection