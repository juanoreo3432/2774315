<?php

namespace App\Http\Controllers;

use App\Models\Table1;
use Illuminate\Http\Request;

class Table1Controller extends Controller
{
   

    public function create() {

        return view('formulario');
       
    }

    public function store(Request $request ){

       $product = new Table1();
       $product->name=$request->name;  
       $product->procesador=$request->procesador;
       $product->save();
       return $product;


    }



}
