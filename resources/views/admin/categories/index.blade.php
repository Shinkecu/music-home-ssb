@extends('layout')

@section('content')

<table class="table table-striped mt-5">
    <thead>
      <tr>
        <th scope="col">Номер</th>
        <th scope="col">Название</th>
        <th scope="col">Изменить</th>
        <th scope="col">Удалить</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->title}}</td>
                <td><a class="btn btn-primary" href="{{route('categories.edit', $category)}}">Изменить</a></td>
                <td><a class="btn btn-primary" href="{{route('categories.create')}}">Добавить новую категорию</a></td>
                <td>
                    <form method="POST" action="{{route('categories.destroy', $category)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary" type='submit'>
                            Удалить
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

@endsection
