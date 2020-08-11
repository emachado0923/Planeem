<?php

use Illuminate\Database\Seeder;
use App\Model\analisis;

class analisisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Politico
        analisis::create([
            'nombre'=>'Las modificaciones de los tratados comerciales (TTIP…)',
            'idTipo'=> 1

        ]);
        analisis::create([
            'nombre'=>'La norma técnica obligatoria.',
            'idTipo'=> 1

        ]);
        analisis::create([
            'nombre'=>'El cambio de partidos políticos en los gobiernos y sus ideas sobre la sociedad y la empresa.',
            'idTipo'=> 1

        ]);
        analisis::create([
            'nombre'=>'La política de impuesto tributario.',
            'idTipo'=> 1

        ]);
        analisis::create([
            'nombre'=>'Las diferentes políticas de los gobiernos mundiales, continentales, nacionales, locales.',
            'idTipo'=> 1

        ]);
        analisis::create([
            'nombre'=>'La legislación laboral.',
            'idTipo'=> 1

        ]);
        analisis::create([
            'nombre'=>'La política fiscal de los diferentes países.',
            'idTipo'=> 1

        ]);
        analisis::create([
            'nombre'=>'La legislación actual en el mercado local.',
            'idTipo'=> 1

        ]);
        analisis::create([
            'nombre'=>'Las subvenciones del gobierno.',
            'idTipo'=> 1

        ]);
        analisis::create([
            'nombre'=>'El período gubernamental.',
            'idTipo'=> 1

        ]);




        //Social

        analisis::create([
            'nombre'=>'El nivel de educación.',
            'idTipo'=> 2

        ]);
        analisis::create([
            'nombre'=>'El cambio en la moda.',
            'idTipo'=> 2

        ]);
        analisis::create([
            'nombre'=>'La tasa de crecimiento de la población.',
            'idTipo'=> 2

        ]);
        analisis::create([
            'nombre'=>'El estilo de vida.',
            'idTipo'=> 2

        ]);
        analisis::create([
            'nombre'=>'El comportamiento de compra del consumidor.',
            'idTipo'=> 2

        ]);
        analisis::create([
            'nombre'=>'El cambio geográfico de la población (migraciones).',
            'idTipo'=> 2

        ]);
        analisis::create([
            'nombre'=>'La estructura de edades cambiantes de la población (babyboomer, generación x, z, millenials).',
            'idTipo'=> 2

        ]);
        analisis::create([
            'nombre'=>'El crecimiento de la diversidad (racial, discapacidad, opción sexual, tendencias).',
            'idTipo'=> 2

        ]);
        analisis::create([
            'nombre'=>'La estructura familiar (solteros. Sin hijos).',
            'idTipo'=> 2

        ]);
        analisis::create([
            'nombre'=>'El cambio en el nivel de ingresos.',
            'idTipo'=> 2

        ]);





        //Legal

        analisis::create([
            'nombre'=>'Los decretos temporales que afectan a la empresa.',
            'idTipo'=> 3

        ]);
        analisis::create([
            'nombre'=>'El código de protección y defensa de los consumidores',
            'idTipo'=> 3

        ]);
        analisis::create([
            'nombre'=>'El cambio en la legislación del sector.',
            'idTipo'=> 3

        ]);
        analisis::create([
            'nombre'=>'Las licencias.',
            'idTipo'=> 3

        ]);
        analisis::create([
            'nombre'=>'Las leyes sobre el empleo.',
            'idTipo'=> 3

        ]);
        analisis::create([
            'nombre'=>'El derecho de propiedad intelectual.',
            'idTipo'=> 3

        ]);
        analisis::create([
            'nombre'=>'Las leyes de salud y seguridad laboral.',
            'idTipo'=> 3

        ]);
        analisis::create([
            'nombre'=>'Los sectores protegidos o regulados.',
            'idTipo'=> 3

        ]);
        analisis::create([
            'nombre'=>'Las certificaciones y acreditaciones necesarias para ejercer.',
            'idTipo'=> 3

        ]);
        analisis::create([
            'nombre'=>'La privacidad de los usuarios cookies, GDPR.',
            'idTipo'=> 3

        ]);






        //Económico

        analisis::create([
            'nombre'=>'La distribución de la renta.',
            'idTipo'=> 4

        ]);

        analisis::create([
            'nombre'=>'La política económica del gobierno.',
            'idTipo'=> 4

        ]);
        analisis::create([
            'nombre'=>'La inflación.',
            'idTipo'=> 4

        ]);

        analisis::create([
            'nombre'=>'La tasa de empleo.',
            'idTipo'=> 4

        ]);
        analisis::create([
            'nombre'=>'La situación económica local.',
            'idTipo'=> 4

        ]);
        analisis::create([
            'nombre'=>'El crecimiento / decrecimiento del PIB (Producto interno bruto).',
            'idTipo'=> 4

        ]);
        analisis::create([
            'nombre'=>'La devaluación y reevaluación de la moneda.',
            'idTipo'=> 4

        ]);

        analisis::create([
            'nombre'=>'La tasa de interés de los créditos. ',
            'idTipo'=> 4

        ]);
        analisis::create([
            'nombre'=>'El cambio en el escenario de importaciones.',
            'idTipo'=> 4

        ]);
        analisis::create([
            'nombre'=>'El ciclo económico.',
            'idTipo'=> 4

        ]);





        //Ambiental

       analisis::create([
            'nombre'=>'El control ambiental.',
            'idTipo'=> 5

        ]);

        analisis::create([
            'nombre'=>'La deforestación. ',
            'idTipo'=> 5

        ]);
        analisis::create([
            'nombre'=>'La reforma agraria.',
            'idTipo'=> 5

        ]);
        analisis::create([
            'nombre'=>'El cambio climático.',
            'idTipo'=> 5

        ]);
        analisis::create([
            'nombre'=>'La calidad del Aire.',
            'idTipo'=> 5

        ]);
        analisis::create([
            'nombre'=>'La normatividad en certificaciones ambientales.',
            'idTipo'=> 5

        ]);
        analisis::create([
            'nombre'=>'El aumento de la contaminación.',
            'idTipo'=> 5

        ]);
        analisis::create([
            'nombre'=>'La normatividad de protección medioambiental.',
            'idTipo'=> 5

        ]);
        analisis::create([
            'nombre'=>'La concienciación social ecológica.',
            'idTipo'=> 5

        ]);
        analisis::create([
            'nombre'=>'La escasez de materias primas.',
            'idTipo'=> 5

        ]);

        //Tecnológico

        analisis::create([
            'nombre'=>'La normatividad y/o legislación tecnológica.',
            'idTipo'=> 6

        ]);
        analisis::create([
            'nombre'=>'La oferta de la tecnología, licenciamiento, patentes.',
            'idTipo'=> 6

        ]);
        analisis::create([
            'nombre'=>'Las nuevas formas de comunicación.',
            'idTipo'=> 6

        ]);
        analisis::create([
            'nombre'=>'Las nuevas fuentes energéticas.',
            'idTipo'=> 6

        ]);
        analisis::create([
            'nombre'=>'La velocidad en investigación y desarrollo tecnológico. ',
            'idTipo'=> 6

        ]);
        analisis::create([
            'nombre'=>'Nueva maquinaria o dispositivos tecnológicos.',
            'idTipo'=> 6

        ]);
        analisis::create([
            'nombre'=>'Incentivos por uso de tecnologías.',
            'idTipo'=> 6

        ]);
        analisis::create([
            'nombre'=>'La tasa de transferencia Tecnológica.',
            'idTipo'=> 6

        ]);
        analisis::create([
            'nombre'=>'Las Tecnologías emergentes (Realidad aumentada, virtual e impresión 3d).',
            'idTipo'=> 6

        ]);
        analisis::create([
            'nombre'=>'La OIT (internet de las cosas).',
            'idTipo'=> 6

        ]);





    }
}
