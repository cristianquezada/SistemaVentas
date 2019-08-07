@extends('sistema.plantillas.main')


@section('title','Editar Categoría '.$categoria->nomCategoria)

@section('titulo','Editar categoría '.$categoria->nomCategoria)

@section('content')
<!-- Hacer formulario-->
{!! Form::open(['route'=>['categorias.update',$categoria->id],'method'=>'PUT']) !!}

<div class="form-group">
{!! Form::label('nomCategoria','Nombre') !!}	
{!! Form::text('nomCategoria',$categoria->nomCategoria,['class'=>'form-control','placeholder'=>'Nombre categoría','required'])!!}
</div>


<div class="form-group">
	{!!	Form::submit('Editar',['class'=>'btn btn-primary'])!!}

</div>


{!! Form::close() !!}


@endsection
