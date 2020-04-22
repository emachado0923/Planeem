<?php

use Illuminate\Database\Seeder;
use App\tipoAptitud;

 

class tipoaptitudsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {
            tipoAptitud::create([
                'tipo_aptitud'=> 'Fortaleza'
            ]);

            tipoAptitud::create([
                'tipo_aptitud'=> 'Amenazas'
            ]);

            tipoAptitud::create([
                'tipo_aptitud'=> 'Debilidades'
            ]);


            tipoAptitud::create([
                'tipo_aptitud'=> 'Oportunidades'
            ]);
        }
}
