@extends('sistema.plantillas.main')


@section('title','Categoría '.$categoria->nomCategoria)

@section('titulo','Vategoría '.$categoria->nomCategoria)

@section('content')


<div class="form-group">
{!! Form::label('nomCategoria','Nombre') !!}	
{!! Form::text('nomCategoria',$categoria->nomCategoria,['class'=>'form-control','placeholder'=>'Nombre categoría','disabled'])!!}
</div>








@endsection
