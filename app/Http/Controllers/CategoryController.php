<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.categories.index', ['categories'=> Category::all()]);
    }

    public function create(){
        return view('admin.categories.create');
    }
    /**
     *
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Request
     */
    public function store(Request $request){
        Category::create(['title'=>$request->title]);

        return redirect('admin/categories')->with('info', 'Категория добавлена');
    }
    public function edit(Category $category){
        return view('admin.categories.edit', ['category'=>$category]);
    }

    public function update(Request $request,Category $category){
        $category->title = $request->title;
        $category->save();
        return redirect('admin/categories')->with('info', 'Категория Обновлена');
    }
    public function destroy(Category $category){
        foreach($category->products as  $product){
            $product->delete();
        }
        $category->delete();
        return redirect('admin/categories')->with('info', 'Категория Удалена');
    }
}

