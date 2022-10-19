@extends('app')

@section('title-block')Главная@endsection

@section('content')
  <h1 class="mt-5">Список контактов</h1>
  <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Имя</th>
              <th scope="col">Номер</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $key => $el)
            <tr>
              <td>{{ $el->id }}</td>
              <td>{{ $el->name }}</td>
              <td>{{ $el->phone }}</td>
              <td><a href="{{ route('one-contact', $el->id) }}" type="submit" class="btn btn-primary">Подробнее</a></td>
              <td></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <a href="{{ route('home') }}" type="submit" class="btn btn-primary">назад</a>
    </div>

@endsection
