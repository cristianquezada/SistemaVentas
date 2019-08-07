@extends('sistema.plantillas.main')

@section('title','Agregar Producto')

@section('titulo','Agregar Producto')



@section('content')


{!! Form::open(['route'=>'productos.store','method'=>'POST'])!!}

<div class="form-group">
{!!  Form::label('nomProducto','Nombre')!!}
{!! Form::text('nomProducto',null,['class'=>'form-control','placeholder'=>'Nombre del producto','required']) !!}
</div>	


<div class="form-group">
{!!  Form::label('codProducto','Código')!!}
{!! Form::text('codProducto',null,['class'=>'form-control','placeholder'=>'Código del producto','required']) !!}
</div>  

<div class="form-group">
{!!  Form::label('precioCosto','Precio Costo')!!}
{!! Form::text('precioCosto',null,['class'=>'form-control','placeholder'=>'Costo del producto','required']) !!}
</div>  

<div class="form-group">
{!!  Form::label('precioVenta','Valor')!!}
{!! Form::text('precioVenta',null,['class'=>'form-control','placeholder'=>'Valor del producto','required']) !!}
</div>  

<div class="form-group">
{!!  Form::label('stockProducto','Stock')!!}
{!! Form::text('stockProducto',null,['class'=>'form-control','placeholder'=>'Cantidad del producto','required']) !!}
</div>  

<div class="form-group">
{!!  Form::label('descripcionProducto','Descripción')!!}
{!! Form::textarea('descripcionProducto',null,['class'=>'form-control','placeholder'=>'Descripición del producto','required']) !!}
</div>  


<div class="form-group">
	{!! Form::label('idCategoria','Categoría') !!}

  <select class="form-control" name="idCategoria">
   <option value="0">Seleccione una categoría</option>
    @foreach($categorias as $categoria)
      <option value="{{$categoria->id}}">{{$categoria->nomCategoria}}</option>
    @endforeach
  </select>

</div>




<div class="form-group">
	{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

</div>



{!! Form::close()!!}
@endsection