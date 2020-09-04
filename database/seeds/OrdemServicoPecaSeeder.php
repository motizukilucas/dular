<?php

use Illuminate\Database\Seeder;

class OrdemServicoPecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\OrdemServicoPeca::class, 10)->create();
    }
}
