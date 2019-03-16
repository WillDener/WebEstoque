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
        for($x=1; $x<=1000; $x++) {
            DB::table('providers')->insert([
                'nome' => str_random(70),
                'created_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}