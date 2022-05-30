<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    //
    public function inicio()
    {
        $logueado = Auth::check();
        $user = Auth::user();
        return Inertia::render("inicio",
            ["logueado" => $logueado,
                "user" => $user]
        );
    }
}
