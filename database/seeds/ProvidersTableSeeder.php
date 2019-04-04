<?php

use Illuminate\Database\Seeder;

class ProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=1; $i <= 100; $i++) {
            DB::table('providers')->insert([
                'nome' => $faker->company(),
                'created_at' => Carbon\Carbon::now()
            ]);
        }
    }
}