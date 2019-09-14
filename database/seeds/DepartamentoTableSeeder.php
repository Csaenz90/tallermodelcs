<?php

use Illuminate\Database\Seeder;

class DepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $departamentos = factory(App\Models\Departamento::class, 5)
       ->create()
       ->each(function ($departamento) {
        	$departamento->municipios()->save(factory(App\Models\Municipio::class)->make());
        });  
    }
}
