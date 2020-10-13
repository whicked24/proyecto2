<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropietariosController extends Controller
{
   public function listPropietarios(){



   	return view('propietarios.listPropietarios');
   }
}
