<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes=Cliente::All();
        return view('home',compact('clientes')); 
    }

    public function create()
    {
        //return view('cliente.create');
    }

    public function store()
    {
    }

    public function show()
    {
    }

    public function edit()
    {
    }

    public function destroy()
    {
    }
}
