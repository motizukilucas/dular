<?php

use Illuminate\Database\Seeder;

class OrdemServicoTecnicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\OrdemServicoTecnico::class, 20)->create();
    }
}
