@extends('maket.app')

@section('title') Обновление записи @endsection

@section('content')
<h1>Обновление записи</h1>

<form action="{{ route('contact-update-submit', $data->id)}}" method="POST" class="">
    @csrf

    <div class="form-group">
        <label for="name">Введите имя</label>
        <input type="text" class="form-control" name="name" value="{{ $data->name }}" placeholder="Введите имя" id="name">
    </div>
    
    <div class="form-group">
        <label for="email">Введите email</label>
        <input type="text" class="form-control" name="email" value="{{ $data->email }}" placeholder="Введите email" id="email">
    </div>
    
    <div class="form-group">
        <label for="subject">Тема сообщения</label>
        <input type="text" class="form-control" name="subject" value="{{ $data->subject }}" placeholder="Тема сообщения" id="subject">
    </div>
    
    <div class="form-group">
        <label for="message">Сообщение</label>
        <textarea name="message" id="message" class="form-control">{{ $data->message }}</textarea>
    </div>

    <button type="submit" class="btn btn-success bt">Обновить</button>
</form>
@endsection ('content')    