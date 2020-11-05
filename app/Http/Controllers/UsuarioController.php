<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Symfony\Component\Translation\Catalogue\MergeOperation;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::get();

        return view('Usuarios.usuarioIndex', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Usuarios.usuarioForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Recibir datos

        // Validar datos
        $request->validate([
            'nombrePila' => 'required | string | min:4',
            'correo' => 'required | string | email',
            'passwd' => 'required | string | min:5',
            'edad' => 'required | numeric',
            'ocupacion' => 'required | string'
        ]);

        // Guardar en BD
            // $usuario = new Usuario();
            // $usuario->nombrePila = $request->nombrePila();

        Usuario::create( $request->all() );

        return redirect()->route('usuario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        return view('Usuarios.usuarioShow', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        return view('Usuarios.usuarioEdit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nombrePila' => 'required | string | min:4',
            'correo' => 'required | string | email',
            'passwd' => 'required | string | min:5',
            'edad' => 'required | numeric',
            'ocupacion' => 'required | string'
        ]);

        Usuario::where('id', $usuario->id)->update($request->except('_method', '_token'));

        return redirect()->route('usuario.show', [$usuario]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return redirect()->route('usuario.index');
    }
}
