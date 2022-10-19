@extends('app')

@section('title-block')Контакт@endsection

@section('content')
  <h1 class="mt-5">Контакт {{$data->id}}</h1>
  <p class="fs-5 col-md-8">Имя: {{$data->name}}</p>
  <p class="fs-5 col-md-8">Телефон: {{$data->phone}}</p>
  <h1 class="fs-5 col-md-8"><i><br>Хобби</i></h1>
  <table class="table table-striped table-sm">
    <thead></thead>
    <tbody>
      <tr>
        <td>Заголовой</td>
        <td>Описание</td>
        <td></td>
      </tr>
      @foreach($hobby as $key => $hob)
      <tr>
        <td>{{$hob->title}}</td>
        <td>{{$hob->note}}</td>
        <td>
            <a href="{{ route('update-hobby', $hob->id) }}" type="submit" class="btn btn-primary">Изменить</a>
            <a href="{{ route('delete-hobby', $hob->id) }}" type="submit" class="btn btn-primary">Удалить</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <h1 class="fs-5 col-md-8"><i><br>Уменния</i></h1>
  <table class="table table-striped table-sm">
    <thead></thead>
    <tbody>
      <tr>
        <td>Заголовок</td>
        <td>Уровень</td>
        <td>Описание</td>
        <td></td>
      </tr>
      @foreach($skill as $key => $sk)
      <tr>
        <td>{{$sk->title_skill}}</td>
        <td>{{$sk->level}}</td>
        <td>{{$sk->note}}</td>
        <td>
            <a href="{{ route('update-skill', $sk->id) }}" type="submit" class="btn btn-primary">Изменить</a>
            <a href="{{ route('delete-skill', $sk->id) }}" type="submit" class="btn btn-primary">Удалить</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="mb-2">
  </div>
<a href="{{ route('list') }}" type="submit" class="btn btn-primary mt-3">назад</a>
@endsection
