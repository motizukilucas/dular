<?php

use Illuminate\Database\Seeder;

class OrdemServicoAparelhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\OrdemServicoAparelho::class, 20)->create();
    }
}
