<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opcion;


class HomeController extends Controller
{
    public function inicio(){

    	$menu=Opcion::where('opcion_menu',1)->orderBy('id')->get();
    	$menu2=Opcion::all();

    	return view('welcome',compact('menu','menu2'));
    }
}
