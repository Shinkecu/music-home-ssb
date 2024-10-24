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

    <form method="POST" action="{{route('auth.login')}}">
        @csrf

        <div  class="mb-3">
            <label for="login" class="form-label">Логин</label>
            <input name="login" type="text" class="form-control" id="login" value="{{old('login')}}" required>
        </div>

        <div lass="mb-3">
            <label class="exampleInputPassword1" class="form-label">Пароль</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
</div>
@endsection
