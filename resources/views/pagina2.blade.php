@extends('layout')

@section('title', 'Page Title')

@section('sidebar')

    <p>Este es el texto de la vista secundaria.</p>
@endsection

@section('content')
    <a href="{{route('listaalumnos')}}">Links a pagina</a>
@endsection
