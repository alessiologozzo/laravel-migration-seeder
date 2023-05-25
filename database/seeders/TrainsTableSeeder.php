<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 250; $i++){
            $train = new Train();

            $train->azienda = $faker->company();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_partenza = $faker->dateTimeBetween("-1 year", "+2 year");
            $train->orario_arrivo = $faker->dateTimeBetween($train->orario_partenza->format('Y-m-d H:i:s'), $train->orario_partenza->format('Y-m-d H:i:s') . "+1 day");
            $train->codice_treno = $faker->numberBetween(10000, 10000000);
            $train->numero_carrozze = $faker->numberBetween(3, 10);
            $train->puntuale = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }

        // Train::truncate(); cancella tutte le righe della tabella
    }
}
