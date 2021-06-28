@extends('maket.app')

@section('title') {{ $data->subject }} @endsection

@section('content')
    <h1>{{ $data->subject }}</h1>
    <div class="alert alert-info">
        <h5>{{ $data->message }}</h5>
        <p>{{ $data->email }}</p>
        <p>{{ $data->created_at }}</p>
        <p>{{ $data->name }}</p>
        <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-primary">Редактировать запись</button></a>
        <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Удалить запись</button></a>
    </div>
@endsection

