<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function index(){
        return view('frontend.login');
    }

    public function registerUser(){
        return view('frontend.register');
    }

    public function userStore(Request $request){
        $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:50',
            'address' => 'required|string|max:150',
            'email' => 'required|email|max:50',
            'password' => 'required|min:8'
        ]);
            // dd($request);
        Customer::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // $credentials = $request->only('email', 'password');
        // Auth::attempt($credentials);
        // $request->session()->regenerate();
        return redirect()->route('customer.login')
        ->withSuccess('You have successfully registered');
    }

    public function login(Request $request ){
        // dd($request->all()) ;
        if(Auth::guard('customer')->attempt(['email'=>$request->email,
        "password"=>$request->password])){
            return redirect('/');
        } else {
            return redirect()->route('customer.login');
        }
    }

    public function destroy (Request $request)
    {
        
        Auth::guard('customer')->logout();
        

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return redirect('customer-login');
    }

    public function myOrder(){
        // $orders = Order::all();
        $customer_id = Auth::guard('customer')->user()->id;
        // $product = Order::where('student_id', $student_id)->get();
        $orders = Order::where('customer_id', $customer_id)->get();
        // ->where('status', 0)
        
        return view( 'frontend.myorders', compact('orders') );
     }

}
