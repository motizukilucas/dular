<?php

use Illuminate\Database\Seeder;

class AparelhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Aparelho::class, 20)->create();
    }
}
