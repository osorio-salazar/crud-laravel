<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres'=>'required|string|max:255',
            'apellidos'=>'required|string|max:255',
            'correo'=>'required|email|unique:usuarios',
            'edad'=>'required|integer',
            'genero'=>'required|in:masculino,femenino',
            'direccion'=>'required|string|regex:/^[a-zA-Z0-9\s#\/-]+$/',
        ]);

        $usuario = new Usuario();
        $usuario->nombres = $request->nombres;
        $usuario->apellidos = $request->apellidos;
        $usuario->correo = $request->correo;
        $usuario->edad = $request->edad;
        $usuario->genero = $request->genero;
        $usuario->direccion = $request->direccion;

        $usuario->save();

        return redirect()->route('usuario.index')->with('success', 'Usuario Creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = Usuario::findOrFail($id);

        $request->validate([
            'nombres' => 'required|string',
            'apellidos' => 'required|string',
            'correo' => 'required|email',
            'edad' => 'required|integer',
            'genero' => 'required|in:masculino,femenino',
            'direccion' => 'required|string|regex:/^[a-zA-Z0-9\s#\/-]+$/',
        ]);

        $usuario->nombres = $request->nombres;
        $usuario->apellidos = $request->apellidos;
        $usuario->correo = $request->correo;
        $usuario->edad = $request->edad;
        $usuario->genero = $request->genero;
        $usuario->direccion = $request->direccion;

        $usuario->save();

        return redirect()->route('usuario.index')->with('success', 'Usuario modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuario.index')->with('eliminar', 'ok');
    }
}
