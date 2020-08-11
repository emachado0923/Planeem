<?php

use Illuminate\Database\Seeder;
use App\Model\tipo_Matriz_crecimiento;
class tipo_Matrizseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     /// migra // 2020_06_03_151423_create_tipo__matriz_crecimiento_table
     //Model // tipo_Matriz_crecimiento
     /// vista // ansorftMercado.blade
     //controller MatrizController
    public function run()


    {
        //tipo 1
        tipo_Matriz_crecimiento::create([
           'Matriz'=>'Busca captar nuevos clientes del mercado objetivo.',
           'tipo'=>'1'
        ]);

        tipo_Matriz_crecimiento::create([
            'Matriz'=>'Busca atraer a clientes de la competencia.',
            'tipo'=>'1'
         ]);

         tipo_Matriz_crecimiento::create([
            'Matriz'=>'Lanza constantemente promociones buscando aumentar frecuencia de compra.',
            'tipo'=>'1'
         ]);


         tipo_Matriz_crecimiento::create([
            'Matriz'=>'Promueve activamente la publicidad de sus productos. ',
            'tipo'=>'1'
         ]);


         tipo_Matriz_crecimiento::create([
            'Matriz'=>'Utiliza el cross selling (venta cruzada)',
            'tipo'=>'1'
         ]);

         tipo_Matriz_crecimiento::create([
            'Matriz'=>'Utiliza el up Selling (incremento de ventas por cliente)',
            'tipo'=>'1'
         ]);
        tipo_Matriz_crecimiento::create([
            'Matriz'=>'Participa en eventos que le den visibilidad a la empresa y sus productos.',
            'tipo'=>'1'
        ]);
        tipo_Matriz_crecimiento::create([
            'Matriz'=>'Busca tener una distribución más intensiva, ya sea a través de internet u otras.',
            'tipo'=>'1'
        ]);
        tipo_Matriz_crecimiento::create([
            'Matriz'=>'Promueve otras ocasiones de consumo, así como nuevos usos del producto para los mismos clientes.',
            'tipo'=>'1'
        ]);
        tipo_Matriz_crecimiento::create([
            'Matriz'=>'Tiene en la actualidad la estructura comercial correcta para atender el mercado.',
            'tipo'=>'1'
        ]);




         //tipo 2

         tipo_Matriz_crecimiento::create([
            'Matriz'=>'Busca captar nuevos clientes de otros mercados.',
            'tipo'=>'2'
         ]);


         tipo_Matriz_crecimiento::create([
            'Matriz'=>'Busca expansión hacia nuevos segmentos del mercado.',
            'tipo'=>'2'
         ]);


         tipo_Matriz_crecimiento::create([
            'Matriz'=>'Busca atraer clientes de otros segmentos del mercado.',
            'tipo'=>'2'
         ]);

         tipo_Matriz_crecimiento::create([
            'Matriz'=>'Busca dar apertura a nuevos mercados expandiéndose hacia otras zonas donde la marca carece de presencia a nivel nacional o internacional.',
            'tipo'=>'2'
         ]);



         tipo_Matriz_crecimiento::create([
            'Matriz'=>'Ha buscado nuevos canales de distribución para llegar a nuevos perfiles de usuarios o de clientes.',
            'tipo'=>'2'
         ]);

         tipo_Matriz_crecimiento::create([
            'Matriz'=>'Ha buscado aliarse con otras empresas para incrementar los niveles de distribución.',
            'tipo'=>'2'
         ]);
        tipo_Matriz_crecimiento::create([
            'Matriz'=>'Ha buscado aliarse con otras empresas ya posicionadas en un segmento de mercado diferente para incrementar la promoción conjuntamente.',
            'tipo'=>'2'
        ]);
        tipo_Matriz_crecimiento::create([
            'Matriz'=>'Busca participar de ferias internacionales, presentar los productos y conseguir clientes en el extranjero.',
            'tipo'=>'2'
        ]);
        tipo_Matriz_crecimiento::create([
            'Matriz'=>'Maneja publicidad para públicos nacionales e internacionales.',
            'tipo'=>'2'
        ]);
        tipo_Matriz_crecimiento::create([
            'Matriz'=>'Promueve otras ocasiones de consumo, así como nuevos usos del producto para nuevos clientes.',
            'tipo'=>'2'
        ]);



        //tipo 3
         tipo_Matriz_crecimiento::create([
            'Matriz'=>'La empresa busca lanzar nuevos productos en los últimos meses.',
            'tipo'=>'3'
         ]);

         tipo_Matriz_crecimiento::create([
            'Matriz'=>'Ha creado marcas para aumentar la participación del mercado.',
            'tipo'=>'3'
         ]);

         tipo_Matriz_crecimiento::create([
            'Matriz'=>'Ha realizado extensiones de línea.',
            'tipo'=>'3'
         ]);

         tipo_Matriz_crecimiento::create([
            'Matriz'=>'Ha ampliado el portafolio de productos con el ánimo de satisfacer nuevas necesidades.',
            'tipo'=>'3'
         ]);

         tipo_Matriz_crecimiento::create([
            'Matriz'=>'Ha profundizado su portafolio con nuevos tamaños y presentaciones del producto actual, (innovación en el diseño).',
            'tipo'=>'3'
         ]);

         tipo_Matriz_crecimiento::create([
            'Matriz'=>'Ha desarrollado nuevos productos aprovechando resultados de la I+D+i.',
            'tipo'=>'3'
         ]);

        tipo_Matriz_crecimiento::create([
            'Matriz'=>'Ha realizado mejoras en los productos actuales con nuevas prestaciones que supongan una diferenciación en el mercado.',
            'tipo'=>'3'
        ]);

        tipo_Matriz_crecimiento::create([
            'Matriz'=>'Ha creado nuevas gamas de producto diferenciando por calidad. (Ejemplo Línea económica línea Premium).',
            'tipo'=>'3'
        ]);

        tipo_Matriz_crecimiento::create([
            'Matriz'=>'Ha realizado mejoras técnicas o de diseño relevantes.',
            'tipo'=>'3'
        ]);

        tipo_Matriz_crecimiento::create([
            'Matriz'=>'La empresa considera la generación de productos más potentes, ecológicos y de estética de acuerdo a las nuevas tendencias del mercado.',
            'tipo'=>'3'
        ]);






         //tipo 4
         tipo_Matriz_crecimiento::create([
            'Matriz'=>'La empresa elabora productos y suministros nuevos para nuevos mercados.',
            'tipo'=>'4'
         ]);


         tipo_Matriz_crecimiento::create([
            'Matriz'=>'La empresa realiza alianzas con otras marcas ya posicionadas en categoría distintas (cobranding).',
            'tipo'=>'4'
         ]);


         tipo_Matriz_crecimiento::create([
            'Matriz'=>'La empresa desarrolla nuevos productos con el mismo mercado objetivo, pero satisfaciendo otras necesidades (Diversificación Horizontal).',
            'tipo'=>'4'
         ]);

         tipo_Matriz_crecimiento::create([
            'Matriz'=>'La empresa desarrolla nuevos productos para mercados situados antes o después del mercado actual de la empresa dentro de la cadena de aprovisionamiento (Diversificación Vertical).',
            'tipo'=>'4'
         ]);


         tipo_Matriz_crecimiento::create([
            'Matriz'=>'La empresa desarrolla nuevos productos en nuevos mercados para aprovechar sinergias tecnológicas (Diversificación Concéntrica).',
            'tipo'=>'4'
         ]);

         tipo_Matriz_crecimiento::create([
            'Matriz'=>'La empresa desarrolla nuevos productos en nuevos mercados, simplemente como inversión. (Diversificación Conglomerada).',
            'tipo'=>'4'
         ]);
        tipo_Matriz_crecimiento::create([
            'Matriz'=>'La empresa considera la compra de una empresa competidora para que siga operando bajo la misma razón social.',
            'tipo'=>'4'
        ]);
        tipo_Matriz_crecimiento::create([
            'Matriz'=>'La empresa considera la creación de una empresa conjunta que atienda otros mercados con distintos producto o servicios.',
            'tipo'=>'4'
        ]);
        tipo_Matriz_crecimiento::create([
            'Matriz'=>'La empresa aplica modelos de negocio diferentes para atraer nuevos mercados, (franquicias, micro franquicias, licencias).',
            'tipo'=>'4'
        ]);
        tipo_Matriz_crecimiento::create([
            'Matriz'=>'La empresa realiza alianzas estratégicas para nuevas necesidades con partners o empresas en otras ciudades o países.',
            'tipo'=>'4'
        ]);



    }
}
