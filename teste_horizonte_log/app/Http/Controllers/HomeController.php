<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        // Redireciona para a rota 'frotas.index'
        return Redirect::route('frotas.index');
    }
}
