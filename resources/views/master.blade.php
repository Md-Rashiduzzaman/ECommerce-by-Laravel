<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECommerce Project</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</head>
<body>

    {{View::make('header')}}
    @yield('content')<br/>
    {{View::make('footer')}}

</body>
<style>
   * {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 35px;
  background-color: white;
}

/* Full-width input fields */
input[type=text],input[type=tel], input[type=email],input[type=password] {
  width: 40%;
  padding: 10px;
  margin: 0px 0 0px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

    .custom-login{
        height:500px;
        padding-top:100px;
    }
    .footer {
    padding: 3px;
    background-color: ;
    color: black;
    }
    .custom-product{
        height:600px;        
    }
    img.slider-img{
        height: 400px !important;
        
    }
    .slider-text{
    background-color: #35443585 !important;
    }
    .slider-texts{
    background-color: #C0C0C0 !important;
    }
    
    .trending-image{
        height:100px;
    }
    .trending-item{
        float:left;
        width:16%;
    }
    .trending-wrapper{
        margin:30px;
    }
    .form-control{
        width:40%;
        float:right;
    }
    .form-controls{
        width:45%;
        height:40px;
        float:left;
    }
    .detail-div1{
        height:70%;
        width:100%;
        margin-left:2px;
        margin-bottom:12px;
    }
    .detail-div2{
        float:left;
    }
    .detail-div3{
        float:right;
    }   
    }
    .detail-div{
        float:right;
    }
    .detail-img{
        height:80%;
        width:80%;
        float:left;
    }
    .detail-img2{
        height:100%;
        width:80%;
        float:left;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-divider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 15px;
        padding-bottom: 15px;
    }

</style>
</html>