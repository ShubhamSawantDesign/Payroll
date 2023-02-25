@extends('admin/admin')
@section('content')

<form action="{{ url('/adminlogin') }}" method="post">@csrf
<h2>Admin Login</h2>
  <div class="imgcontainer">
    <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
  </div>

  <div class="container">
    <label for="uname"><b>Admin ID</b></label>
    <input type="text" placeholder="Enter Admin ID" name="admin" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
@endsection