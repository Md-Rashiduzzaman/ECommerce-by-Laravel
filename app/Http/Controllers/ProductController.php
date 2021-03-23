<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
//import model name into controller for products table
use App\Models\Cart; 
//import model name into controller for cart table
use App\Models\Order;

use Session;

use Illuminate\Support\Facades\DB;
//use this for join
class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();
//product table er sob data fetch hobe        
        return view('product',['products'=>$data]);
    }

    function detail($id)
    {
        $data= Product::find($id);
//Product(model er naam) db te ja products table aikhane model e table er kaj korbe ja id dhore table theke data search korbe        
        return view('detail',['product'=>$data]);
//product hosse array er key jate table er oi data thakbe     
    }
    function search(Request $req)
    {
         $data= Product:: where ('name','like','%'.$req->input('query').'%')->get();
         return view('search',['products'=>$data]);    
    }
    function AddToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart= new Cart; 
            $cart->user_id= $req->session()->get('user')['id'];
            $cart->product_id= $req->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }
    static function CartItem()
    {
        $UserId=Session::get('user')['id'];
        return Cart::where('user_id',$UserId)->count();
    }
    function CartList()
    {
        $UserId=Session::get('user')['id'];
        $products= DB::table('cart')
        ->join('products','cart.product_id', '=', 'products.id')
        ->where('cart.user_id',$UserId)
        ->select('products.*','cart.id as cart_id')
        ->get();
        
        return view('cartlist',['products'=>$products]);
    }
    function RemoveCart($id)
    {
        Cart::destroy($id);
//Cart:: ata cart er model name jar table naam o cart
        return redirect('cartlist');         
    }
     function OrderNow()
    {
        $UserId=Session::get('user')['id'];
        $total= $products= DB::table('cart')
        ->join('products','cart.product_id', '=', 'products.id')
        ->where('cart.user_id',$UserId)
        ->sum('products.price');
        
        return view('ordernow',['total'=>$total]); 
    }
    function OrderPlace(Request $req)
    {
        $UserId= Session::get('user')['id'];
        $allcart= Cart::where('user_id',$UserId)->get();
        foreach($allcart as $cart)
        {
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status='pending';
            $order->payment_method=$req->payment;
            $order->payment_status='pending';
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$UserId)->delete();
        }
         $req->input();
         return redirect('/');
    }
    function MyOrdersList()
    {
        
        $UserId=Session::get('user')['id'];
        $orders= DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$UserId)
        ->get();
        return view('myorderslist',['orders'=>$orders]);
    }
}
