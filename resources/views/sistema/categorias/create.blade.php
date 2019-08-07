@extends('sistema.plantillas.main')

@section('title','Agregar categoría')

@section('titulo','Agregar categoría')



@section('content')


{!! Form::open(['route'=>'categorias.store','method'=>'POST'])!!}

<div class="form-group">
{!!  Form::label('nomCategoria','Nombre')!!}
{!! Form::text('nomCategoria',null,['class'=>'form-control','placeholder'=>'Nombre categoría','required','maxlength'=>50]) !!}
</div>	

<div class="form-group">
	{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

</div>



{!! Form::close()!!}
@endsection