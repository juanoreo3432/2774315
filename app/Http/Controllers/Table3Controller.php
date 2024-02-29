<?php
namespace App\Http\Controllers;

use App\Models\Table3;
use Illuminate\Http\Request;

class Table3Controller extends Controller
{
   

    public function create() {

        return view('formulario3');
       
    }

    public function store(Request $request ){

       $info = new Table3();
       $info->name=$request->name;  
       $info->edad=$request->edad;
       $info->fechadenacimiento=$request->direccion;
       $info->telefono=$request->telefono;
       $info->save();
       return $info;


    }



}



   