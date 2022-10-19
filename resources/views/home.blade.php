@extends('app')

@section('title-block')Главная@endsection

@section('content')
  <h1 class="mt-5">Главная страница</h1>

  <a href="{{ route('list') }}" type="submit" class="btn btn-primary">Список контактов</a>
  <div class="table-responsive">
  </div>

@endsection
