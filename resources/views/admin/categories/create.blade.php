@extends('layout')

@section('content')
<div class="container">
    <form class="row g-3" method="POST" action="{{route('categories.store')}}">
        @csrf
        <div class="mb-3">
            <label for="titleinput" class="form-label">Название новой категории</label>
            <input name="title" aria-describedby="title" type="text" class="form-control" id="titleinput">
        </div>
        <button type="submit" class="btn btn-primary">Создать</button>

    </form>
</div>
@endsection
