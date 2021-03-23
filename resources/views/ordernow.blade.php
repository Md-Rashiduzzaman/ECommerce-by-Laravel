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
        <table class="table">
            <tbody>
                <tr>
                <td>Amount</td>
                <td>Tk {{$total}}</td>
                </tr>
                <tr>
                <td>VAT</td>
                <td>Tk 0</td>
                </tr>
                <tr>
                <td>Delivery Cost</td>
                <td>Tk 15</td>
                </tr>
                <tr>
                <td>Total Amount</td>
                <td>Tk {{$total+15}}</td>
                </tr>
            </tbody>
        </table>
        <div>

        <form action="/order_place" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="mb-3">Address</label><br>
                <textarea name="address" class="form-controls" placeholder="Enter Your Address"></textarea>
            </div><br><br>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Payment Method</label><br>
                <input type="radio" value="cash" name="payment"> <span>Online Payment</span><br><br>
                <input type="radio" value="cash" name="payment"> <span>EMI Payment</span><br><br>
                <input type="radio" value="cash on delivery" name="payment"> <span>Cash on Delivery</span><br>
            </div>
            <button type="submit" class="btn btn-default">Order Now</button>
        </form>
            <!-- <form>
                <div class="form-control">
               <label for="">Address<textarea type="email" placeholder="Enter Your Address" class="form-control"></textarea></label>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label">Payment Method</label>
                    <input type="radio" name="payment"> <span>Online Payment</span>
                    <input type="radio" name="payment"> <span>EMI Payment</span>
                    <input type="radio" name="payment"> <span>Cash on Delivery</span>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form> -->
        </div>
    </div>
  </div>

</body>
</html>
@endsection

