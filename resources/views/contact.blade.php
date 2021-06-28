@extends('maket.app')

@section('title') Контакты @endsection

@section('content')
<h1>Контакты</h1>

<form action="{{route('contact-form')}}" method="POST" class="">
    @csrf

    <div class="form-group">
        <label for="name">Введите имя</label>
        <input type="text" class="form-control" name="name" placeholder="Введите имя" id="name">
    </div>
    
    <div class="form-group">
        <label for="email">Введите email</label>
        <input type="text" class="form-control" name="email" placeholder="Введите email" id="email">
    </div>
    
    <div class="form-group">
        <label for="subject">Тема сообщения</label>
        <input type="text" class="form-control" name="subject" placeholder="Тема сообщения" id="subject">
    </div>
    
    <div class="form-group">
        <label for="message">Сообщение</label>
        <textarea name="message" id="message" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-success bt">Отправить</button>
</form>
@endsection ('content')    