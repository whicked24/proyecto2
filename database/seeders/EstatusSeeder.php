<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EstatusSeeder extends Seeder
{
	public  $data=['Activo','Inactivo'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
			foreach ($this->data as $estatus) {
				
		DB::table('estatus')->insert([
			
				'descripcion'=>$estatus

			]);

			}



    }
}
