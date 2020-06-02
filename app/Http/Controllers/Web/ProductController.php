<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderDetail;
use App\Models\Payment;
use App\Repositories\Contracts\ProductInterface;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class ProductController extends Controller
{
    protected $productRepository;
    protected $productService;

    public function __construct(
        ProductInterface $productRepository, 
        ProductService $productService)
    {
        $this->productRepository = $productRepository;
        $this->productService = $productService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(9);
        $categories = Category::all();

        return view('web.products.index', compact('products', 'categories'));
    }

    public function filterByCategory(Request $request, $id)
    {
        $products = Product::where('category_id', $id)->paginate(9);
        $categories = Category::all();

        return view('web.products.index', compact('products', 'categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {   
        $product = Product::whereSlug($slug)->firstOrFail();

        return view('web.products.detail', compact('product'));
    }

    public function getAddToCart(Request $request, $id)
    {   
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function getDelItemCart($id)
    {   
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart', $cart);
        }
        else{
            Session::forget('cart');
        } 
        return redirect()->back();
    }

    public function getCart(){
        if (!Session::has('cart')) {
            return view('web.orders.shopping_cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('web.orders.shopping_cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
        // 
    }

    public function getCheckout(){
        if (!Session::has('cart')) {
            return view('web.orders.shopping_cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('web.orders.checkout', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
        // 
    }

    public function postCheckout(Request $request){
        $cart = Session::get('cart');
        $cart->items;
        
        $user = Auth::user();
        $id = Auth::id();
        
        $order = new Order;
        $order->user_id = $user->id;
        $order->total_price = $cart->totalPrice;
        $order->payment_method = $request->payment_method;
        $order->customer_name = $request->customer_name;
        $order->customer_phone = $request->customer_phone;
        $order->delivery_address = $request->delivery_address;
        $order->save();

        foreach ($cart->items as $key => $value) {
            $order_detail = new OrderDetail;
            $order_detail->order_id = $order->id;
            $order_detail->product_id = $key;
            $order_detail->quantity = $value['qty'];
            $order_detail->total_price = ($value['price']);
            $order_detail->save();
        }

        Session::forget('cart');
        return redirect()->back()->with('success', 'Successfully purchased products!');   
    }


}
