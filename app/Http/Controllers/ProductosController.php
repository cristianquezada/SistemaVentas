<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $productos=Producto::orderBy('id','ASC')->get();

    return view('sistema.productos.index',['productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categorias = DB::table('categorias')->get();
            
       return view('sistema.productos.create', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
$producto=new Producto($request->all());

$producto->precioCosto=(int)$request->precioCosto;
$producto->precioVenta=(int)$request->precioVenta;
$producto->stockProducto=(int)$request->stockProducto;
$producto->idCategoria=(int)$request->idCategoria;
//dd($producto);

$producto->save();


//mensaje de inserción con éxito

        Flash('Se agregó el producto '.$producto->nomProducto.' con éxito')->success();



return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto=Producto::find($id);
        $categorias = DB::table('categorias')->get();
           
      return view('sistema.productos.edit')->with(array('producto'=>$producto,'categorias'=>$categorias));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $producto=Producto::find($id);
    $producto->fill($request->all());
    $producto->save();


    //mensaje de actualización con éxito

        Flash('Se actualizó el producto '.$producto->nomProducto.' con éxito')->success();

    return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $producto= Producto::find($id);
   
   $producto->delete();


    //mensaje de inserción con éxito

        Flash('Se eliminó el producto '.$producto->nomProducto.' con éxito')->warning();

   return redirect()->route('productos.index');
    }
}
