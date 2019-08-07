@extends('sistema.plantillas.main')

@section('title','Productos')

@section('titulo','Productos')


@section('content')
<a href="{{route('productos.create')}}" class="btn btn-info">Registrar nuevo producto</a><br><hr>



<table class="table table-striped">
	<thead>
	<th>ID</th>	
<th>Nombre</th>
<th>Código</th>
<th>Precio costo</th>
<th>Precio venta</th>
<th>Stock</th>
<th>Descripción</th>
<th>Categoría</th>
<th>Acción</th>
	</thead>
	<tbody>
		@foreach ($productos as $producto)
			<tr>
				<td>{{$producto->id}}</td>
				<td>{{$producto->nomProducto}}</td>
				<td>{{$producto->codProducto}}</td>	
				<td>{{$producto->precioCosto}}</td>
				<td>{{$producto->precioVenta}}</td>
				<td>{{$producto->stockProducto}}</td>
				<td>{{$producto->descripcionProducto}}</td>
				<td>{{$producto->idCategoria}}</td>
				<td>
					<a href="{{ route('productos.edit',$producto->id)}}" class="btn btn-warning" >Editar</a>
				<a href="{{ route('productos.destroy',$producto->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar este producto?')" >Eliminar</a> 
				</td>
				</tr>
		@endforeach
	</tbody>
</table>







@endsection