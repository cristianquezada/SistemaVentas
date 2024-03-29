<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias=Categoria::orderBy('id','ASC')->get();

    return view('sistema.categorias.index',['categorias'=>$categorias]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       return view('sistema.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $categoria=new Categoria($request->all());
        $categoria->save();



//mensaje de inserción con éxito

        Flash('Se agregó la categoría '.$categoria->nomCategoria.' con éxito')->success();

        return redirect()->route('categorias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $categoria=Categoria::where('slug','=',$slug)->firstOrFail();
        return view('sistema.categorias.show')->with('categoria',$categoria);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {

//con slug
        $categoria=Categoria::where('slug','=',$slug)->firstOrFail();
      
      //para encontrar con el id si es q se recibe un id
      //$categoria=Categoria::find($id);
//dd($categoria);
      return view('sistema.categorias.edit')->with('categoria',$categoria);

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
      
$categoria=Categoria::find($id);
$categoria->fill($request->all());

$categoria->save();

//mensaje de actualización con éxito

        Flash('Se actualizó la categoría '.$categoria->nomCategoria.' con éxito')->success();

return redirect()->route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
$categoria=Categoria::find($id);
$categoria->delete();


//mensaje de eliminación con éxito

        Flash('Se eliminó la categoría '.$categoria->nomCategoria.' con éxito')->warning();

return redirect()->route('categorias.index');
    }
}
