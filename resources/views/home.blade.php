@extends('layout')

@section('title', 'Page Title')

@section('sidebar')

    <p>Este es el contenido de la vista</p>
    <a href="{{route('pagina2')}}"> Links a pagina2</a>
@endsection

@section('content')

@endsection
