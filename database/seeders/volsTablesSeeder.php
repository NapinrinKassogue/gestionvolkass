<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\DbCommand;
 use   Illuminate\Support\Facades\DB;
class volsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("vols")->insert([
            ["code_vol"=>"v13","destination"=>"Filadelfi","date_depar"=>"28/09/2022", "heure_depart"=>"20h",
            "nombre_place_A"=>"15", "nombre_place_B"=>"60", "prix_classe_A"=>"1400000", "prix_classe_B"=>"1200000" ],
    ]);
    
    }
}
