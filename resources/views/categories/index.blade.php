@extends('adminlte::page')

@section('title', 'Kontrol Paneli')

@section('content_header')
    <h1>Kategoriler</h1>
@stop

@section('content')
    <table>
    @foreach($categories as $category)
        <tr><p>{{$category->title}}</p></tr>
    @endforeach
    </table>
@stop





