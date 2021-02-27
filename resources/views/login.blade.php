@extends("master")
@section("content")
<br/>
<center>
    <form class="form-horizontal custom-login " action="">
        <div class="form-group">
            <b><label class="control-label col-sm-2" for="email">Email Address:</label></b><br/>
            <div class="col-sm-4">
            <input type="email" class="form-control" id="email" placeholder="Enter Your Email">
            </div>
        </div> <br/>
        <div class="form-group">
            <b><label class="control-label col-sm-2" for="pwd">Password:</label></b>
            <div class="col-sm-4">
            <input type="password" class="form-control" id="pwd" placeholder="Enter Your Password">
            </div>
        </div>
        </div> <br/>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-4">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</center>

@endsection