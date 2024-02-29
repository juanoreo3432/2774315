<?php

namespace App\Http\Controllers;

use App\Models\Table2;
use Illuminate\Http\Request;

class Table2Controller extends Controller
{
   

    public function create() {

        return view('formulario2');
       
    }

    public function store(Request $request ){

       $info = new Table2();
       $info->name=$request->name;  
       $info->ciudad=$request->ciudad;
       $info->direccion=$request->direccion;
       $info->telefono=$request->telefono;
       $info->save();
       return $info;


    }



}
