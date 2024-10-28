@extends('admin.layout')

@section('content')
<form action="{{route('admin.products.filter')}}" method="POST">
    @csrf
    <div class="d-flex justify-content-between mb-3">
        <select class="form-select" name="filter">
            <option value="0">Все категории</option>
            @foreach ( $categories as  $category )
                <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
        <select class="form-select" name="sort">
            <option value="title">По алфавиту</option>
            <option value="price">Сначала дешевле</option>
            <option value="created_at">Сначала новые</option>
        </select>
        <button class="btn btn-primary" type="submit">Применить</button>
    </div>
</form>
<div class="row">
    @foreach ( $products as $product )
        <div class="card" style="width: 18rem;">
            <img src="{{$product->img_path}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$product->title}}</h5>
            <p class="card-text">{{$product->price}}</p>
            <a href="{{route('product', ['id'=>$product->id])}}" class="btn btn-primary">Описание Товара</a>
            <a href="{{route('product.edit', $product)}}" class="btn btn-primary">Изменить</a>
            <form method="POST" action="{{route('products.destroy', $product)}}">
                @csrf
                @method('DELETE')
                <button class='btn btn-primary' type='submit'>
                    Удалить
                </button>
            </form>
            </div>
        </div>
    @endforeach
    <a href="{{route('products.create')}}" class="btn btn-primary">Добавить новый новар</a>
</div>
@endsection
