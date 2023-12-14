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
        for ($i = 0; $i < 10; $i++) {
            $new_train = new Train();

            $new_train->azienda = $faker->randomElement(['Trenitalia', 'Italo']);
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->dateTimeBetween('-1 week', '+1 day');
            $new_train->orario_di_arrivo = $faker->dateTimeBetween($new_train->orario_di_partenza, '+1 day');
            $new_train->codice_treno = $faker->randomNumber(5, true);
            $new_train->numero_carrozze = $faker->numberBetween(1, 12);
            $new_train->in_orario = $faker->boolean();
            $new_train->cancellato = $faker->boolean();

            $new_train->save();
        }
    }
}
