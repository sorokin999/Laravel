@extends('maket.app')

@section('title') Messages @endsection

@section('content')
    <h1>Сообщения</h1>
    @foreach($data as $el)
    <div class="alert alert-info">
        <h3>{{ $el->subject }}</h3>
        <h7>{{ $el->created_at }}</h7>
        <p>{{ $el->name }}</p>
        <a href="{{ route('contact-data-one', $el->id) }}"><button class="btn btn-warning">Подробно</button></a>
    </div>
    @endforeach
@endsection

