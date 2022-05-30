<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;


class ControladorMain extends Controller
{
    //
    function index()
    {
        $login = false;
        $user = "Manolo";

//        if (Auth::check()) {
//            $login = true;
//            $user = Auth::user();
//        }


        return Inertia::render('Inicio'
            , [
                'login' => $login,
                'user' => $user
            ]);
    }

    public function prueba1()
    {
        return Inertia::render('Prueba1');
    }
}
