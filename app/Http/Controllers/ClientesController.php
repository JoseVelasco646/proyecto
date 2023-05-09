<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        $data = Admin::find(session('LoggedUser'));
        $nombre = $data->nombre.''.$data->name;
        return view('dashboard.welcome')->with(compact('nombre'));
    }
}
