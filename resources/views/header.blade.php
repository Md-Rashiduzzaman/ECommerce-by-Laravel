<?php 
use App\Http\Controllers\ProductController;
$total_cart=0;
if(Session::has('user'))
{
  $total_cart= ProductController::CartItem();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar slider-texts">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">BD Online Market</a>
      <a class="navbar-brand" href="/">Home</a>
      <a class="navbar-brand" href="/my_orders_list">Orders List</a>
    </div>

    <form class="navbar-form" action="/search">
      <div class="form-group">
        <input type="text" name="query" class="form-control search-box" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form>

    <div class="navbar-header float-end">
      <a href="/cartlist" class="navbar-brand"> Cart({{$total_cart}})</a>
    </div>
    <!-- @if(Session::has('user'))
    <div class="dropdown">
    <button class=" dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{Session::get('user')['name']}}
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Logout</button>
  </div>
  </div>
      @else
      <a href="/login" class="">Login</a>
      @endif
  </div> -->
  @if(Session::has('user'))
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  {{Session::get('user')['name']}}
  <!-- Login user show korabe ai code dara -->
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="/logout">Logout</a></li>
  </ul>
</div>
@else
  <a href="/login" class="navbar-brand">Login</a>
  <a href="/register" class="navbar-brand">Register</a>
@endif
</nav>

</body>
</html>
