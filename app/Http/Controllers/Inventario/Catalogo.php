<?php

namespace App\Http\Controllers\Inventario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class catalogo extends Controller
{
    //
    public function index(){
        return view('inventario.catalogo');
    }

    public function formularioReg(){
        return view('inventario.formulario');
    }

    public function registrar(){
        return view('inventario.mensaje');
    }

    public function ofertas(){
        return view('inventario.promociones');
    }

    public function perros(){
        return view('inventario.perros');
    }

    public function gatos(){
        return view('inventario.gatos');
    }

    public function descripcion($id, $descripcion = null){
        return view('inventario.descripcion')
        ->with('id', $id)
        ->with('descripcion', $descripcion);
    }



}
