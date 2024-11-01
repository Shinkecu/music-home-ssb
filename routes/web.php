<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CartController;

use App\Product;
use App\Category;
use App\User;
use App\Order;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('about',['products'=>Product::orderBy('created_at', 'desc')->limit(5)->get()]);
})->name('about');

Route::get('/contacts', function (){
    return  view('contacts');
})->name('contacts');

Route::get('/catalog', function () {
    $products = Product::where('qty', '>', '0')->get();
    return view('catalog', ['products'=>$products, 'categories'=>Category::all()]);
})->name('catalog');

Route::get('/product/{id}',function ($id) {
    return  view('product', ['product'=>Product::find($id)]);
})->name('product');

Route::post('/catalog/filter', function (Request $request){
    if ($request->filter == 0){
        $products = Product::where('qty', '>', '0')
                            ->orderBy($request->sort)
                            ->get();
    }
    else{
        $products = Category::find($request->filter)
                            ->products()
                            ->orderBy($request->sort)
                            ->get();
    }
    return view('catalog', ['products'=>$products, 'categories'=>Category::all()]);
})->name('catalog.filter');

Route::middleware(['guest'])->group(function() {
    Route::get('/register', [RegisterController::class, 'create'])->name('auth.create');
    Route::post('/register', [RegisterController::class, 'store'])->name('auth.store');

    Route::get('/login',[RegisterController::class, 'loginform'])->name('auth.loginform');
    Route::post('/login',[RegisterController::class, 'login'])->name('auth.login');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/logout', [RegisterController::class, 'logout'])->name('auth.logout');
});

Route::middleware(['admin'])->group(function() {
    Route::view('/admin', 'admin.layout');
    Route::resource('admin/categories', CategoryController::class);
    Route::resource('admin/products', ProductController::class);
    Route::post('admin/filter', [ProductController::class, 'filter'])->name('admin.products.filer');
});
