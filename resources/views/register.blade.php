@extends("master")
@section("content")
<br/>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script></head>
<body>
<center>
<h2 style="color:blue">Registration Form</h2>
  <!-- @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif -->
  <form action="/register" method="POST">
  @csrf
  <div class="container">
    <label for="fullname"><b>Full Name</b></label><br>
    <input type="text" style="text-align:center" placeholder="Please Enter Your Valid Name" name="name" id="fullname" required>
    <br><br>
    <label for="phone"><b>Mobile Number</b></label><br>
    <input type="tel" style="text-align:center" placeholder="Please Enter Your Valid Mobile Number" name="mobile" id="fullname" required>
    <br><br>
    <label for="email"><b>Email</b></label><br>
    <input type="email" style="text-align:center" placeholder="Please Enter Your Valid Email" name="email" id="email" required>
    <br><br>
    <label for="psw"><b>Password</b></label><br>
    <input type="password" style="text-align:center" placeholder="Please Enter Your Valid Password" name="password" id="psw" required>
    <br><br>
    <button type="submit" class="btn btn-default">Register</button>
  </div> 
</form>
</center>
</body>
</html>

@endsection