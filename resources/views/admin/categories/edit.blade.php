@extends('layout')

@section('content')
<div class="container">
    <form class="row g-3" method="POST" action="{{route('categories.update', $category)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Введите новое название категории</label>
            <input name="title" aria-describedby="title" value="{{$category->title}}" type="text" class="form-control" id="title">
        </div>
        <button type="submit" class="btn btn-primary">Изменить</button>

    </form>
</div>
@endsection
