<?php

use Illuminate\Database\Seeder;
use App\Model\estrategiasDiagnosticoSeed;
class estrategiasDiagnosticoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*CALIFICACÍON 1*/
        //v1

         estrategiasDiagnosticoSeed::create([
            'calificacion'=>'1',
            'vista'=>'v1',
            'descripcion'=>'Aumentar el número de vendedores.',
            'estado'=>'0'
        ]);
        estrategiasDiagnosticoSeed::create([
            'calificacion'=>'1',
            'vista'=>'v1',
            'descripcion'=>'Relanzamiento de su producto o servicio.',
            'estado'=>'0'
        ]);
        estrategiasDiagnosticoSeed::create([
            'calificacion'=>'1',
            'vista'=>'v1',
            'descripcion'=>'Distribución masiva.',
            'estado'=>'0'
        ]);
        estrategiasDiagnosticoSeed::create([
            'calificacion'=>'1',
            'vista'=>'v1',
            'descripcion'=>'Integrar actividades de fabricación o producción.',
            'estado'=>'0'
        ]);
        estrategiasDiagnosticoSeed::create([
            'calificacion'=>'1',
            'vista'=>'v1',
            'descripcion'=>'Optimizar los costos de operación.',
            'estado'=>'0'
        ]);
       
        /*CALIFICACÍON 2*/
        //v1

        estrategiasDiagnosticoSeed::create([
            'calificacion'=>'2',
            'vista'=>'v1',
            'descripcion'=>'Programa de premios e incentivos a los compradores y/o distribuidores.',
            'estado'=>'0'
        ]);
        estrategiasDiagnosticoSeed::create([
            'calificacion'=>'2',
            'vista'=>'v1',
            'descripcion'=>'Estabilizar los precios en función de la competencia.',
            'estado'=>'0'
        ]);
        estrategiasDiagnosticoSeed::create([
            'calificacion'=>'2',
            'vista'=>'v1',
            'descripcion'=>'Brindar experiencias en el servicio.',
            'estado'=>'0'
        ]);
        estrategiasDiagnosticoSeed::create([
            'calificacion'=>'2',
            'vista'=>'v1',
            'descripcion'=>'Flexibilidad en créditos y pagos.',
            'estado'=>'0'
        ]);
        estrategiasDiagnosticoSeed::create([
            'calificacion'=>'2',
            'vista'=>'v1',
            'descripcion'=>'Programa de CRM.',
            'estado'=>'0'
        ]);
         

    /*CALIFICACÍON 3*/
            //v1

        estrategiasDiagnosticoSeed::create([
            'calificacion'=>'3',
            'vista'=>'v1',
            'descripcion'=>'Desinversión progresiva en productos con baja rotación.',
            'estado'=>'0'
        ]);
        estrategiasDiagnosticoSeed::create([
            'calificacion'=>'3',
            'vista'=>'v1',
            'descripcion'=>'Promociones para incentivar rotación de inventarios.',
            'estado'=>'0'
        ]);
        estrategiasDiagnosticoSeed::create([
            'calificacion'=>'3',
            'vista'=>'v1',
            'descripcion'=>'Canales de distribución cortos.',
            'estado'=>'0'
        ]);
        estrategiasDiagnosticoSeed::create([
            'calificacion'=>'3',
            'vista'=>'v1',
            'descripcion'=>'Maximizar los flujos de efectivo para otras actividades económicas.',
            'estado'=>'0'
        ]);
        estrategiasDiagnosticoSeed::create([
            'calificacion'=>'3',
            'vista'=>'v1',
            'descripcion'=>'Retirar el producto o servicio del mercado.',
            'estado'=>'0'
        ]);
       
    }
}
