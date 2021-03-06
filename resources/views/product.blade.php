@extends("master")
@section("content") 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="custom-product">
    <!-- <h2 style="text-align:center">Product Item</h2> -->
    <div id="myCarousel" class="carousel slide detail-div1" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        @foreach ($products as $item)
          <div class="item {{$item['id']==1?'active':''}}">
            <a href="detail/{{$item['id']}}">
            <center><img src="{{$item['gallery']}}" class="slider-img" alt="MR.Russell"></center><br><br><br><br>
            <div class="carousel-caption">
              <h4 style="color:blue" class="detail-div2">Product: {{$item['name']}}</h4>
              <h4 style="color:blue" class="detail-div3">Details: {{$item['description']}}</h4>
            </div>
            </a>
           </div>
        @endforeach
      </div>
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <center> <h2 style="color:green">Trending Products</h2> </center>
    <div class="trending-wrapper">
      @foreach ($products as $item)
        <div class="trending-item">
        <a href="detail/{{$item['id']}}">
          <img src="{{$item['gallery']}}" class="trending-image" alt="MR.Russell">
          <h5>{{$item['name']}}</h5> 
        </a>
         
        </div> 
      @endforeach
    </div>
  </div>
</body>
</html>
@endsection