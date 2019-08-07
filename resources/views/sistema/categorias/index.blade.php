@extends('sistema.plantillas.main')

@section('title','Categorías')

@section('titulo','Categorías')


@section('content')
<a href="{{route('categorias.create')}}" class="btn btn-info">Registrar nueva categoría</a><br><hr>

<table class="table table-striped" id="tablaCategorias">
	<thead>
	<th>ID</th>	
<th>Nombre</th>	
<th>Acción</th>
	</thead>
	<tbody>
		@foreach ($categorias as $categoria)
			<tr>
				<td>{{$categoria->id}}</td>
				<td>{{$categoria->nomCategoria}}</td>
					
				
				<td>
					<a href="{{ route('categorias.edit',$categoria->id)}}" class="btn btn-warning" >Editar</a>
				<a href="{{ route('categorias.destroy',$categoria->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar esta categoría?')" >Eliminar</a> 
				</td>
				</tr>
		@endforeach
	</tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script >
	$(document).ready( function () {
    $('#tablaCategorias').DataTable();
} );
</script>




@endsection