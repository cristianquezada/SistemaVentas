<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Categoria::create(["nomCategoria"=>"Lubricantes"]);
        Categoria::create(["nomCategoria"=>"Respuestos"]);
        Categoria::create(["nomCategoria"=>"Neumáticos"]);
        
    	//factory(App\Categoria::class)->times(3)->create();

    }
}
