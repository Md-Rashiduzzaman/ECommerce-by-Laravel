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
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
    <div class="trending-wrapper">
      <h3> Result for Products</h3>
      @foreach ($products as $item)
        <div class="search-item">
        <a href="detail/{{$item['id']}}">
          <img src="{{$item['gallery']}}" class="trending-image" alt="MR.Russell">
          <div class="">
            <h2>{{$item['name']}}</h2>
            <h5>{{$item['description']}}</h5>
          </div>
        </a>  
        </div> 
      @endforeach
    </div>
    </div>
  </div>
</body>
</html>
@endsection