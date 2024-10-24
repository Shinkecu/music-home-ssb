@extends('layout')

@section('content')

<div class='container w-50'>
    <h1>Введите данные регистрации</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$errors}}</li>
            @endforeach
        </ul>
    @endif

    <form class="row g-3" method="POST" action="{{route('auth.store')}}">
        @csrf
        <div class="mb-3">
            <label for="inputEmail4" class="form-label">name</label>
            <input name="name" type="text" class="form-control" id="inputEmail4">
        </div>

        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">surname</label>
            <input name="surname" type="text" class="form-control" id="inputPassword4">
        </div>

        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">patronymic</label>
            <input name="patronymic" type="text" class="form-control" id="inputPassword4">
        </div>

        <div class="mb-3">
          <label for="inputEmail4" class="form-label">Email</label>
          <input name="email" type="email" class="form-control" id="inputEmail4">
        </div>

        <div class="mb-3">
            <label for="inputEmail4" class="form-label">Login</label>
            <input name="login" type="text" class="form-control" id="inputEmail4">
          </div>

        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input name="password" type="password" class="form-control" id="inputPassword4">
        </div>

        <div  class="col-md-6">
            <label for="password_confirmation" class="form-label">Повторите пароль</label>
            <input name="password_confirmation" type="password" class="form-control" id="password_conformition">
        </div>

        <div class="col-12">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="check" required>
            <label class="form-check-label" type="password">Согласен на все</label>
          </div>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Зарегестрироваться</button>
        </div>
      </form>


@endsection
