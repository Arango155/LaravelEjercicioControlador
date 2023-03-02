<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NombreController extends Controller
{


    public function pagina2(){
        return view('pagina2');
    }

    public function listaalumnos(){
        return view('listaalumnos');
}

}
