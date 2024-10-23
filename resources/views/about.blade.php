@extends('layout')

@section('content')

<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="{{asset($products[0]->img_path)}}" class="d-block w-50">
        <div class="carousel-caption d-none d-md-block">
            <h5>{{$products[0]->title}}</h5>
            <p>{{$products[0]->price}}</p>
        </div>
    </div>
</div>
@for ($i=1; $i <5;  $i++)
<div class="carousel-item">
    <img src="{{ asset($products[$i]->img_path)}}" class="d-block w-50">
    <div class="carousel-caption d-none d-md-block">
        <h5>{{$products[$i]->title}}</h5>
        <p>{{$products[$i]->price}}</p>
    </div>
</div>
@endfor
@endsection
