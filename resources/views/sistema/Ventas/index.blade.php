@extends('sistema.plantillas.main')

@section('title','Historial de Ventas')

@section('titulo','Historial de Ventas')


@section('content')
<a href="{{route('ventas.create')}}" class="btn btn-info">Realizar Boleta</a><br><hr>

@endsection