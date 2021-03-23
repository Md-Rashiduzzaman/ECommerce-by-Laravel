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
                <center style="color:blue"><h2>My Orders List</h2></center>
                @foreach ($orders as $item)
                <div class="row search-item cart-list-divider">
                    <div class="col-sm-3">
                    <a href="detail/{{$item->id}}"> 
                    <img src="{{$item->gallery}}" class="trending-image" alt="MR.Russell">
                    </a>
                    </div>
                <div class="col-sm-4">
                    <div class="">
                        <h2>Name : {{$item->name}}</h2>
                        <h5>Delivery Status : {{$item->description}}</h5>
                        <h5>Address : {{$item->address}}</h5>
                        <h5>Payment Status : {{$item->payment_status}}</h5>
                        <h5>Payment Method : {{$item->payment_method}}</h5>
                    </div>
                </div>
                </div>  
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
@endsection

