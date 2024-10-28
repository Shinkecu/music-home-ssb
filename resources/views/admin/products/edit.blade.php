@extends('layout')

@section('content')
<div class="container">
    <form class="row g-3" enctype="multipart/form-data" method="POST" action="{{route('products.update', $product)}}">
        @csrf
        @method('PUT')
        <select class="form-select" aria-label="Категория товара" name="category_id">
            @foreach (@categories as @category)
                <option value="{{@category->id}}" @if ($category->id == $product->category_id)selected @endif>{{$category->title}}</option>
            @endforeach
        </select>

        <div class="mb-3">
            <label for="title" class="form-label">Измените название Товара</label>
            <input value="{{$product->title}}" name="title" aria-describedby="title" type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label for="model" class="form-label">Изменить модель</label>
            <input value="{{$product->model}}" name="model" aria-describedby="model" type="text" class="form-control" id="model">
        </div>

        <div class="mb-3">
            <label for="country" class="form-label">Изменить страну производства</label>
            <input value="{{$product->country}}" name="country" aria-describedby="country" type="text" class="form-control" id="country">
        </div>


        <button type="submit" class="btn btn-primary">Сохранить</button>


    </form>
</div>
@endsection
