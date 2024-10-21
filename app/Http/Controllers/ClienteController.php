<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // Muestra todos los clientes
    public function index() {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    // Muestra el formulario para crear un nuevo cliente
    public function create() {
        return view('clientes.create');
    }

    // Guarda un nuevo cliente
    public function store(Request $request) {
        Cliente::create($request->all());
        return redirect()->route('clientes.index');
    }
}
