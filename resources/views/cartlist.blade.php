@extends("master")
@section("content") 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="custom-product">
    <div class="col-sm-10">
    <div class="trending-wrapper">
    <center style="color:green"> <h3> Result for Products</h3><br>
      <a class="btn btn-success fl-center" href="order_now"><h5>Order Now</h5></a> </center> <br><br>
      @foreach ($products as $item)
        <div class="row search-item cart-list-divider">

          <div class="col-sm-3">
            <a href="detail/{{$item->id}}"> 
            <img src="{{$item->gallery}}" class="trending-image" alt="MR.Russell">
            </a>
          </div>

          <div class="col-sm-4">
            <div class="">
                <h2>{{$item->name}}</h2>
                <h5>{{$item->description}}</h5>
            </div>
          </div>
          <div class="col-sm-3">
            <a href="/remove_cart/{{$item->cart_id}}" class="btn btn-warning">Remove to Cart</a>
          </div>
        </div> 
      @endforeach
    </div>
    <center><a class="btn btn-success" href="order_now"><h5>Order Now</h5></a></center> <br>
    </div>
    
  </div>
</body>
</html>
@endsection

