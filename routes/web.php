<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\OrderControllerBackend;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Product;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//frontend
Route::get('/', function () {
    $Birthday= Product::where('category_id', 1)->get();
    $Wedding= Product::where('category_id', 2)->get();
    $Custom= Product::where('category_id', 3)->get();
    return Inertia::render('HomePage', compact('Birthday','Wedding','Custom'));
});

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/menu', [HomeController::class, 'index'])->name('menu');

Route::get('/master', function () {
    return view('frontend.master');
})->name('master');


Route::get('/services', function () {
    return view('frontend.services');
})->name('services');


Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');





//backend

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/profile', [CategoryController::class, 'delete'])->name('profile.delete');
});


Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login']);
    Route::post('/login', [AdminController::class, 'store'])->name('adminLogin');
   
});

Route::middleware('admin')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
});


//search
Route::get('findproducts', [SearchController::class, 'Search']);


//cart
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');
  
// Checkout
Route::get('checkout', [ProductController::class, 'checkout'])->name('checkout.page');
Route::post('order', [ProductController::class, 'order'])->name('checkout.order');
Route::get('reports', [ProductController::class, 'reports'])->name('reports');

    // Orders
    Route::get('orders', [OrderControllerBackend::class, 'index']);
    Route::post('order/status/{id}', [OrderControllerBackend::class, 'status'])->name('order.status');
    Route::post('order/status/{id}', [ProductController::class,'status'])->name('order.status');


// My Orders
Route::get('myorders', [CustomerController::class, 'myOrder'])->name('myorders');

// Invoice
Route::get('invoice',[PdfController::class,'generate_pdf']);
Route::get('invoice/{order_number}',[PdfController::class,'generate_pdf'])->name('invoiceperid');
Route::get('download-pdf',[PdfController::class,'download_pdf']);


// Brand
Route::resource('brands', BrandController::class);


//contact
Route::get('/contacts', [ContactController::class, 'allContact'])->name('allContact');

Route::get('invoice', [ProductController::class, 'pdfview']);


// Frontend Booking//
Route::get('frontend/booking', [ProductController::class,'index'])->name('booking.index');
Route::get('frontend/eventbooking/{id}', [ProductController::class,'create'])->name('frontend.eventbooking')->middleware('customer'); // customer middleware
Route::post('booking/store', [ProductController::class, 'store'])->name('booking.store');
// for customer booking status//

Route::post('product/status/{id}', [ProductController::class,'status'])->name('booking.status');

Route::post('product/edit/{id}', [ProductController::class,'update'])->name('product.edit');

Route::get('product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');


// Customer Registration
Route::get('registerUser', [CustomerController::class, 'registerUser'])->name('registeruser');
Route::post('userStore', [CustomerController::class, 'userStore'])->name('customer.store');


require __DIR__.'/auth.php';
