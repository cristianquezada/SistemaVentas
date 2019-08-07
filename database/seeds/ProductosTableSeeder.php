<?php

use Illuminate\Database\Seeder;

use App\Producto;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
      Producto::create(["nomProducto"=>"Aceite Motor Mobil 20w50","codProducto"=>"159357","precioCosto"=>7000,"precioVenta"=>10999,"stockProducto"=>15,"descripcionProducto"=>"Mobil Special es un aceite de motor con aditivos detergentes dispersantes únicos, con grado de viscosidad prolongada SAE 20W-50. Se ha formulado para la lubricación de motores a gasolina.","idCategoria"=>1]);


      Producto::create(["nomProducto"=>"Aceite Motor + Filtro Shell Hx7 10w40 Para 10.000km","codProducto"=>"357154","precioCosto"=>8000,"precioVenta"=>15990,"stockProducto"=>6,"descripcionProducto"=>"Aceite para motor 10W-40 con tecnología sintética.
Limpia y protege para un rendimiento extra.
Es dos veces más eficaz que el aceite normal para eliminar los sedimentos de los motores sucios","idCategoria"=>1]);


      Producto::create(["nomProducto"=>"NEUMATICOS MOMO 175/70R13 82T M-1 OUTRUN","codProducto"=>"147258","precioCosto"=>15000,"precioVenta"=>20999,"stockProducto"=>4,"descripcionProducto"=>"Diseño asimétrico desarrollado para automóviles pequeños y Medianos.
La comodidad es optimizada gracias a la estructura y diseño del neumático, mejorada para la superficie de la carretera, manteniendo una alta seguridad y un excelente nivel de rendimiento, incluso en condiciones de humedad.","idCategoria"=>3]);



    }
}
