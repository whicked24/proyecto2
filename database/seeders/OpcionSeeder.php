<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpcionSeeder extends Seeder
{
	
public 	$data=array(array('descripcion'=>'INICIO','fktipo'=>1,'opcion_menu'=>1),array('descripcion'=>'ADMINISTRACION','fktipo'=>1,'opcion_menu'=>1),array('descripcion'=>'REPORTES','fktipo'=>1,'opcion_menu'=>1),array('descripcion'=>'USUARIOS','fktipo'=>2,'opcion_menu'=>2),array('descripcion'=>'ALICUOTAS','fktipo'=>2,'opcion_menu'=>2),array('descripcion'=>'ALQUILER','fktipo'=>2,'opcion_menu'=>2),array('descripcion'=>'RECIBOS','fktipo'=>2,'opcion_menu'=>3),array('descripcion'=>'VENTAS','fktipo'=>2,'opcion_menu'=>3));

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
       foreach ($this->data as  $opcion) {
      
      	DB::table('opcions')->insert([

      		'descripcion'=>$opcion['descripcion'],'fktipo'=>$opcion['fktipo'],'opcion_menu'=>$opcion['opcion_menu']

      	]);


      }
    }
}
