@extends("master")
@section("content")
<br/>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<center>
<h1 style="color:green">Login Form</h1>
<form action="/login" method="POST">
  <div class="container">
    @csrf
    <label for="email"><b>Email</b></label><br>
    <input type="email" style="text-align:center" placeholder="Please Enter Your Valid Email" name="email" id="" required>
    <br><br>
    <label for="psw"><b>Password</b></label><br>
    <input type="password" style="text-align:center" placeholder="Please Enter Your valid Password" name="password" id="psw" required>
    <br><br>
    <button type="submit" class="btn btn-success">Login</button>
  </div> 
</form>
</center>
<br><br><br><br>
</body>
</html>

@endsection