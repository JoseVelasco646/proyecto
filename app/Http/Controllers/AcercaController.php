<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcercaController extends Controller
{
    public function sobre_acerca()
    {
        return view('acerca');
    }
}
