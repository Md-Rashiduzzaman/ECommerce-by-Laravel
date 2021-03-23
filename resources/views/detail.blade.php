@extends("master")
@section("content") 
<div class="container">
   <div class="row">
        <center style="color:red"><h3>Details About Your Selected Product</h3></center>
        <div class="col-sm-6">
            <img class="detail-img2" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/" class=""><h3>Go Back</h3></a> </br>
            <h4>Product Name: {{$product['name']}}</h4>
            <h4>Price: {{$product['price']}}</h4>
            <h4>Details: {{$product['description']}}</h4>
            <h4>Category: {{$product['category']}}</h4>
        <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-primary">Add to Cart</button>
            </form>
        <br><br>
        </div>
   </div>
</div>

@endsection