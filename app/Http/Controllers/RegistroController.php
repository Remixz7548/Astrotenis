<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Verificar si el correo ya está en la base de datos
        $existingEmail = Usuario::where('email', $request->correo)->first();
        if ($existingEmail) {
            return response()->json(['error' => 'Este correo ya está registrado en la base de datos']);
        }

        // Verificar si el usuario ya está en la base de datos
        $existingUsername = Usuario::where('username', $request->usuario)->first();
        if ($existingUsername) {
            return response()->json(['error' => 'Este usuario ya está registrado en la base de datos']);
        }
        // Si los datos son válidos, crear el nuevo usuario
        $usuario = new Usuario();
        $usuario->name = $request->nombre;
        $usuario->username = $request->usuario;
        $usuario->email = $request->correo;
        $usuario->password = bcrypt($request->psw);
        $usuario->user_type = $request->input('user_type', 'normal');
        $usuario->remember_Token = $request->token;
        $usuario->save();
        return response()->json(['success' => '¡Registro exitoso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
