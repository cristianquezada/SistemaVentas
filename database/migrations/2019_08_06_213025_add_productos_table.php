<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->Increments('idProducto');
            $table->string('nomProducto',100);
            $table->string('codProducto',100);
            $table->integer('precioCosto');
            $table->integer('precioVenta');
            $table->integer('stockProducto');
            $table->string('descripcionProducto',200);

            
            $table->integer('idCategoria')->unsigned();
            $table->foreign('idCategoria')->references('id')->on('categorias')->onDelete('cascade');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
