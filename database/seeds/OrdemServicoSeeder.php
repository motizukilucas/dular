<?php

use Illuminate\Database\Seeder;

class OrdemServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\OrdemServico::class, 20)->create();
    }
}
