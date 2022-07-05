<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class ControladorPrueba extends Controller
{
    //
    public function p1(){
        return Inertia::render('VistaP1');
    }

    public function p2(){
        return Inertia::render('VistaP2');
    }

}
