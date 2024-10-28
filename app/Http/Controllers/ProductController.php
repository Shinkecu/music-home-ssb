<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     *
     *
     * @return Illuminate\Http\Response
     */
    public function index(){
        $products = Product::orderBy('title')->get();

        return view('admin.products.index', ['products'=>$products, 'categories'=> Category::all()]);
    }
    public function filter(Request $request){
        if($request->filter == 0){
            $products = Product::orderBy($request->sort)->get();
        }
        else {
            $products = Category::find($request->filter)
                                            ->products()
                                            ->orderBy($request->sort)
                                            ->get();
        }
        view('admin.products.index', ['products'=>$product, 'categories'=> Category::all()]);
    }
    /**
     *
     * @param Illuminate\Http\Product $product
     * @return Illuminate\Http\Response
     */
    public function show(Product $product){
            return view('admin.products.show', ['products'=>$product]);
    }
    public function create(Product $product){
        return view('admin.products.create', ['Categpries'=>Category::all()]);
    }
    public function update(Request $request, Product $product){
        $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->model = $request->model;
        $product->price = $request->price;
        $product->country = $request->country;
        $product->qty = $request->qty;
        if($request->hasFile('img')){
            $product->img_path = $request->file('img')->store('img')
        }
        $product->save();

        return  redirect()->route('product.show', ['product' => $product])->with('info', 'Данные изменены');
    }
    public function destroy(Product $product){
        return redirect('admin/products')->with('info', 'Товар удален');
    }
}
