<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use function PHPUnit\Framework\isNull;
use Illuminate\Support\Facades\URL;


class ControladorMain extends Controller
{
    //
    function index()
    {
        $login=false;
        $user = null;
        if (Auth::check()) {
            $login = true;
            $user = Auth::user();
            if ($user->roles()->get() == "administrador") {
                $opciones[] = 'Administrar';
            }
        }
      echo   (($login===false))?  "<h1>NOOO Estoy Logueado </h1>": "<h1> Logueado  $user->name</h1>";
        
//dd();
        $opciones[] = 'Crear usuario';
        $opciones[] = 'Documentación Hestia';
        $opciones[] = 'Wiki sobre Hestia';


        return Inertia::render('Inicio'
            , [
                'login' => $login,
                'user' => $user,
                'opciones' => $opciones,
            ]);
    }

    public function prueba1()
    {
        return Inertia::render('Prueba1');
    }
}
