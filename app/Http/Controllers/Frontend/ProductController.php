<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class ProductController extends Controller
{
    public function cart()
    {
        return view('frontend.cart');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function delete(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }



    public function checkout(){
        return view('frontend.checkout');
    }

    public function order(Request $request){
        
        $order = new Order();
         $order_data = $request->all();
         $order_data['order_number'] = "ORD" . " " . rand(5, 5000);
        //  $order_data['quantity'] = 1;
         $order_data['country'] = "Bangladesh";
        //  print_r($order_data) ; 
        $order->create($order_data);
        $request->session()->forget('cart');

         
        //  print_r(session('cart'));

        //  dd($order_data);
        return redirect('menu')->with('msg','Order Successfully Placed. Thank You for Order');


        //  $carts = session('cart');
        //  print_r($carts) ; 
        //  $order_data['coupon'] = '100';
        //  $order_data['shipping_id'] = '15';
        //  $order->fill($order_data);
     }

    public function pdfview(){
        
        $data = [
            [
                'quantity' => 1,
                'description' => '1 Year Subscription',
                'price' => '129.00'
            ]
        ];
        
        
        
        $pdf = Pdf::loadView('pdf',['data' => $data]);
        return $pdf->download();
    }

    public function status(Request $request,$id){
        $order = Order::find($id);
        $data = [
            'status'=>$request->status
        ];
        $order->update($data);
        // return 'khibe baba'; }
        return back()->with('msg','status updated');
    }
   
}

