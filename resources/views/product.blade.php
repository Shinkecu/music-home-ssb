@extends('layout')

@section('content')


<div class="card w-60">
    <div class="card-body">
      <h1 class="card-title">{{$product->title}}</h1>
      <img src="{{asset($product->img_path)}}" class="card-img-top w-60">
      <p class="card-text">{{$product->price}}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Год производства {{$product->year}}</li>
      <li class="list-group-item">Модель {{$product->model}}</li>
      <li class="list-group-item">Страна {{$product->country}}</li>
    </ul>
    <div class="card-body">
        @auth
        <a href="#" class="card-link">В корзину</a>
        @endauth

      <a href="{{}}" class="btn btn-primary">Зарегестрироваться и купить</a>
    </div>
  </div>

  @endsection
