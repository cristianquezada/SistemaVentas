@extends('sistema.plantillas.main')

@section('title','Boletas')

@section('titulo','Crear Boleta')

@section('content')
{!! Form::open(['method'=>'POST','id'=>'miFormulario'])!!}
<div class="field_wrapper">

    <div class="d-flex flex-row">
        <div class="p-2">
        <select class="form-control" name="field_name[]"  id="id">
            <option value="0">Seleccione un producto</option>
            @foreach($productos as $producto)
            <option value="{{$producto->nomProducto}}">{{$producto->nomProducto}}</option>
            @endforeach
        </select>
             
        </div>
        <div class="p-2">
                Cantidad: <input type="text" id="id" name="field_cant[]"   />
        </div>
        <div class="p-2">
                Precio: <input type="text" id="id" name="field_precio[]"  />
        </div>
        
            <a href="javascript:void(0);" class="add_button" title="Add field"><img src="add.jpg" style="width: 20px;height: 20px" /></a>  
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
    var fieldHTML = '<div class="remove"><div class="d-flex flex-row"><div class="p-2"><select class="form-control" name="field_name[]"  id="id"><option value="0">Seleccione un producto</option>@foreach($productos as $producto)<option value="{{$producto->id}}">{{$producto->nomProducto}}</option>@endforeach</select></div><div class="p-2"> Cantidad: <input type="text" id="id" name="field_cant[]"   /></div><div class="p-2"> Precio: <input type="text" id="id" name="field_precio[]"  /></div><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="quitar.png" style="width: 20px;height: 20px"/></a></div>'; //New input field html 
    
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

@endsection