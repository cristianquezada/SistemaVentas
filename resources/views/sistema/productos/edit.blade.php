@extends('sistema.plantillas.main')


@section('title','Editar Producto '.$producto->nomProducto)

@section('titulo','Editar Producto '.$producto->nomProducto)

@section('content')


<!-- Hacer formulario-->
{!! Form::open(['route'=>['productos.update',$producto->id],'method'=>'PUT']) !!}

<div class="form-group">
{!! Form::label('nomProducto','Nombre') !!}	
{!! Form::text('nomProducto',$producto->nomProducto,['class'=>'form-control','placeholder'=>'Nombre producto','required'])!!}
</div>

<div class="form-group">
{!! Form::label('codProducto','Código') !!} 
{!! Form::text('codProducto',$producto->codProducto,['class'=>'form-control','placeholder'=>'Código producto','required'])!!}
</div>

<div class="form-group">
{!! Form::label('precioCosto','Precio costo') !!} 
{!! Form::text('precioCosto',$producto->precioCosto,['class'=>'form-control','placeholder'=>'Costo del producto','required'])!!}
</div>

<div class="form-group">
{!! Form::label('precioVenta','Precio Venta') !!} 
{!! Form::text('precioVenta',$producto->precioVenta,['class'=>'form-control','placeholder'=>'Valor del producto a vender','required'])!!}
</div>

<div class="form-group">
{!! Form::label('stockProducto','Stock') !!} 
{!! Form::text('stockProducto',$producto->stockProducto,['class'=>'form-control','placeholder'=>'Cantidad de producto','required'])!!}
</div>

<div class="form-group">
{!! Form::label('descripcionProducto','Descripción') !!} 
{!! Form::textarea('descripcionProducto',$producto->descripcionProducto,['class'=>'form-control','placeholder'=>'Código producto','required'])!!}
</div>

<div class="form-group">
	{!! Form::label('idCategoria','Categoria') !!}

  <select class="form-control" name="id">
 
    @foreach($categorias as $categoria)
    @if ($producto->idCategoria==$categoria->id)
<option value="{{$categoria->id}}" selected>{{$categoria->nomCategoria}}</option>    @else

      <option value="{{$categoria->id}}">{{$categoria->nomCategoria}}</option>
@endif
    @endforeach
  </select>

</div>


<div class="form-group">
	{!!	Form::submit('Editar',['class'=>'btn btn-primary'])!!}

</div>

{!! Form::close() !!}


@endsection
