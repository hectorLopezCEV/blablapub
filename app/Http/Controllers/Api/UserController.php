<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

// creamos este controller de prueba para los Endpoints ////////////////////////

class UserController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return User::all(); //////// nos traemos todos los elementos de la tabla/////////////
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $user = new User(); // creamos el objeto
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->edad = $request->get('edad');
        $user->sexo = $request->get('sexo');
        $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return User::find($id)->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id); // Buscamos el usuario
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->edad = $request->get('edad');
        $user->sexo = $request->get('sexo');
        $user->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        return (User::destroy($id));
    }

    public function resetPassword(Request $request)
    {
        $email = $request->get('email');
        $user = User::where($email)->first();
        if (is_null($user)) {
            return response()->json("El usuario no existe", 400);
        } else {
            // TODO: mandar email al usuario
            return response()->json("El usuario existe");
        }

    }
}
