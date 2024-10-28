@extends('layout')

@section('content')
<div class="container">
    <form class="row g-3" enctype="multipart/form-data" method="POST" action="{{route('products.store')}}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Название нового Товара</label>
            <input name="title" aria-describedby="title" type="text" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Введите модель</label>
            <input name="model" aria-describedby="model" type="text" class="form-control" id="model">
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Введите страну производства</label>
            <input name="country" aria-describedby="country" type="text" class="form-control" id="country">
        </div>
        <select class="form-select" aria-label="Категория товара" name="category_id">
            @foreach (@categories as @category)
                <option value="{{@category->id}}">{{$category->title}}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary">Создать</button>


    </form>
</div>
@endsection
