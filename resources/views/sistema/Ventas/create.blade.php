@extends('sistema.plantillas.main')

@section('title','Boletas')

@section('titulo','Crear Boleta')

@section('content')
{!! Form::open(['method'=>'POST','id'=>'miFormulario','name'=>'formularioBoleta'])!!}
<div class="field_wrapper">
    <div class="d-flex flex-row">
        <div class="p-2">
        Producto: <select class="form-control" name="field_name[]"  id="id_nombre" onchange="completarInfo()">
            <option value="0">Seleccione un producto</option>
            @foreach($productos as $producto)
            <option value="{{$producto->nomProducto}}">{{$producto->nomProducto}}</option>
            @endforeach
        </select>
             
        </div>
        <div class="p-2">
                Cantidad: <input type="text" class="form-control" id="id" name="field_cant[]"   />
        </div>
        <div class="p-2">
                Precio: <input type="text" class="form-control" id="id_precio" name="field_precio[]"  />
        </div>
        
            <a href="javascript:void(0);" class="add_button" title="Add field"><img src="{{ Storage::url('img/add.jpg')}}" style="width: 20px;height: 20px" /></a>  
    </div>
</div>

<input class="alert alert-success"  onclick="myFunction()"  name="subir"value="guardar" style="width: 100px;height: 20px">
{!! Form::close()!!}


<script type="text/javascript">
 
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
   var contador=0;
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="remove"><div class="d-flex flex-row"><div class="p-2">Producto: <select class="form-control" name="field_name[]"  id="id_nombre" onchange="completarInfo()"><option value="0">Seleccione un producto</option>@foreach($productos as $producto)<option value="{{$producto->id}}">{{$producto->nomProducto}}</option>@endforeach</select></div><div class="p-2"> Cantidad: <input type="text" class="form-control" id="id" name="field_cant[]"   /></div><div class="p-2"> Precio: <input type="text" class="form-control" id="id_precio" name="field_precio[]"  /></div><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="{{ Storage::url('img/quitar.png')}}" style="width: 20px;height: 20px"/></a></div>'; //New input field html 
    
    var x = 1; //Initial field counter is 1

    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            contador=x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});

</script>



<?php 
$arreglo= array();
foreach ($productos as $producto) {
 
   $nombre= $producto;

array_push($arreglo,$nombre);
}
?>

<script>
    

function completarInfo(){
    
var items= <?= json_encode($arreglo) ?>

//console.log(items);    
    var nproducto = document.getElementById("id_nombre").value;

var valorProducto;
items.forEach( function(element, index) {
if(element.nomProducto==nproducto){
     valorProducto=element.precioVenta;
}

});


document.formularioBoleta.id_precio.value=valorProducto;
    
}

</script>

@endsection