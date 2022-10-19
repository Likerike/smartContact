@extends('app')

@section('title-block')Контакт@endsection

@section('content')
  <h1 class="mt-5">Изменение Хобби</h1>

  @if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($error->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  <form action="{{ route('update-hobby-form', $data->id) }}" method="post" >
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Название</label>
    <input type="text" name="name" value="{{ $data->title }}" class="form-control">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Описание</label>
    <input type="text" name="note" value="{{ $data->note }}" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Изменить</button>
</form>

@endsection
