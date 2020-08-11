<?php

use Illuminate\Database\Seeder;
use App\Model\analisisPorter;

class analisisPorterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Poder de negociación de los proveedores
        analisisPorter::create([
            'nombre'=>'El grado de concentración en la industria.',
            'idTipo'=> 1
        ]);

        analisisPorter::create([
            'nombre'=>'El grado de diferenciación de los productos o servicios.',
            'idTipo'=> 1
        ]);

        analisisPorter::create([
            'nombre'=>'El costo de cambio de proveedor.',
            'idTipo'=> 1
        ]);

        analisisPorter::create([
            'nombre'=>'La integración vertical hacia delante o hacia atrás.',
            'idTipo'=> 1
        ]);

        analisisPorter::create([
            'nombre'=>'La cantidad de proveedores.',
            'idTipo'=> 1
        ]);

        analisisPorter::create([
            'nombre'=>'La disponibilidad de proveedores sustitutos.',
            'idTipo'=> 1
        ]);

        analisisPorter::create([
            'nombre'=>'El grado de confianza.',
            'idTipo'=> 1
        ]);

        analisisPorter::create([
            'nombre'=>'El nivel de importancia del insumo en los procesos.',
            'idTipo'=> 1
        ]);

        analisisPorter::create([
            'nombre'=>'El tiempo de entrega. ',
            'idTipo'=> 1
        ]);

        analisisPorter::create([
            'nombre'=>'La ubicación del proveedor.',
            'idTipo'=> 1
        ]);





        //Poder de negociación de los clientes
        analisisPorter::create([
            'nombre'=>'El número de compradores.',
            'idTipo'=> 2
        ]);

        analisisPorter::create([
            'nombre'=>'La disponibilidad de sustitutos.',
            'idTipo'=> 2
        ]);


        analisisPorter::create([
            'nombre'=>'Los costes de cambio para el comprador.',
            'idTipo'=> 2
        ]);



        analisisPorter::create([
            'nombre'=>'La contribución del sector a la calidad del producto.',
            'idTipo'=> 2
        ]);


        analisisPorter::create([
            'nombre'=>'La contribución del sector a los costes del comprador.',
            'idTipo'=> 2
        ]);


        analisisPorter::create([
            'nombre'=>'El grado de dependencia de los canales de distribución.',
            'idTipo'=> 2
        ]);

        analisisPorter::create([
            'nombre'=>'El volumen del comprador.',
            'idTipo'=> 2
        ]);

        analisisPorter::create([
            'nombre'=>'La integración hacia atrás.',
            'idTipo'=> 2
        ]);

        analisisPorter::create([
            'nombre'=>'La ventaja diferencial (Exclusividad del producto).',
            'idTipo'=> 2
        ]);
        analisisPorter::create([
            'nombre'=>'La disponibilidad de información para el comprador. ',
            'idTipo'=> 2
        ]);




        //Productos Sustitutos
        analisisPorter::create([
            'nombre'=>'El costo de cambio para el usuario.',
            'idTipo'=> 3
        ]);


        analisisPorter::create([
            'nombre'=>'La rentabilidad del producto del sustituto.',
            'idTipo'=> 3
        ]);


        analisisPorter::create([
            'nombre'=>'El posicionamiento del producto sustituto en el mercado.',
            'idTipo'=> 3
        ]);


        analisisPorter::create([
            'nombre'=>'El precio del sustituto en el sector.',
            'idTipo'=> 3
        ]);


        analisisPorter::create([
            'nombre'=>'El contraste relación valor-precio.',
            'idTipo'=> 3
        ]);

        analisisPorter::create([
            'nombre'=>'La agresividad de marketing del producto sustituto.',
            'idTipo'=> 3
        ]);
        analisisPorter::create([
            'nombre'=>'La calidad de los productos sustitutos. ',
            'idTipo'=> 3
        ]);
        analisisPorter::create([
            'nombre'=>'La facilidad de acceso a los productos sustitutos. ',
            'idTipo'=> 3
        ]);
        analisisPorter::create([
            'nombre'=>'La oferta de los productos sustitutos. ',
            'idTipo'=> 3
        ]);
        analisisPorter::create([
            'nombre'=>'El volumen de producción de productos sustitutos. ',
            'idTipo'=> 3
        ]);




        //Amenazas de Entrada de Nuevos Competidores
        analisisPorter::create([
            'nombre'=>'El nivel de crecimiento del mercado.',
            'idTipo'=> 4
        ]);


        analisisPorter::create([
            'nombre'=>'La economía de escala.',
            'idTipo'=> 4
        ]);

        analisisPorter::create([
            'nombre'=>'La diferenciación de producto.',
            'idTipo'=> 4
        ]);



        analisisPorter::create([
            'nombre'=>'La fidelización de clientes.',
            'idTipo'=> 4
        ]);



        analisisPorter::create([
            'nombre'=>'El acceso a materias primas.',
            'idTipo'=> 4
        ]);



        analisisPorter::create([
            'nombre'=>'La protección gubernamental/regulación de la industria.',
            'idTipo'=> 4
        ]);

        analisisPorter::create([
            'nombre'=>'El efecto de la experiencia (y el aprendizaje). La curva de aprendizaje.',
            'idTipo'=> 4
        ]);

        analisisPorter::create([
            'nombre'=>'El costo de cambio de cliente.',
            'idTipo'=> 4
        ]);

        analisisPorter::create([
            'nombre'=>'Las barreras emocionales.',
            'idTipo'=> 4
        ]);


        analisisPorter::create([
            'nombre'=>'La capacidad de endeudamiento.',
            'idTipo'=> 4
        ]);






        //Rivalidad entre competidores
        analisisPorter::create([
            'nombre'=>'El número de competidores.',
            'idTipo'=> 5
        ]);

        analisisPorter::create([
            'nombre'=>'El crecimiento del sector/industria.',
            'idTipo'=> 5
        ]);

        analisisPorter::create([
            'nombre'=>'La velocidad del crecimiento del sector.',
            'idTipo'=> 5
        ]);


        analisisPorter::create([
            'nombre'=>'El tipo de producto.',
            'idTipo'=> 5
        ]);


        analisisPorter::create([
            'nombre'=>'La variedad de competidores.',
            'idTipo'=> 5
        ]);


        analisisPorter::create([
            'nombre'=>'La manera de incrementar capacidad instalada.',
            'idTipo'=> 5
        ]);


        analisisPorter::create([
            'nombre'=>'La guerra de precios.',
            'idTipo'=> 5
        ]);

        analisisPorter::create([
            'nombre'=>'El costo fijo.',
            'idTipo'=> 5
        ]);

        analisisPorter::create([
            'nombre'=>'El costo de cambio.',
            'idTipo'=> 5
        ]);

        analisisPorter::create([
            'nombre'=>'La participación en el mercado o industria.',
            'idTipo'=> 5
        ]);










    }
}
