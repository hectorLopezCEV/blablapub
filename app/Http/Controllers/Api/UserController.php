<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        return response()->json(User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return null;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        if (is_null($request->get('name')) || $request->get('name') === '') {
            return response()->json([
                'error' => 'Name required'
            ], 400);
        }
        if (is_null($request->get('email')) || $request->get('email') === '') {
            return response()->json([
                'error' => 'Email required'
            ], 400);
        }
        if (is_null($request->get('password')) || $request->get('password') === '') {
            return response()->json([
                'error' => 'Password required'
            ], 400);
        }
        if (is_null($request->get('edad')) || $request->get('edad') === '') {
            return response()->json([
                'error' => 'Edad required'
            ], 400);
        }
        if ($request->get('sexo') === 'hombre' || $request->get('sexo') === 'mujer' || $request->get('sexo') === 'n/a') {
            return response()->json([
                'error' => 'Sexo must be hombre, mujer or n/a'
            ], 400);
        }
        $user = new User(); // creamos el objeto
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->edad = $request->get('edad');
        $user->sexo = $request->get('sexo');
        $user->save();
        return response()->json([
            'success' => 'User created successfully',
            'user' => $user
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
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
        return null;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return JsonResponse
     */
    public function update(Request $request, $id)
    {
        if (is_null($request->get('name')) || $request->get('name') === '') {
            return response()->json([
                'error' => 'Name required'
            ], 400);
        }
        if (is_null($request->get('email')) || $request->get('email') === '') {
            return response()->json([
                'error' => 'Email required'
            ], 400);
        }
        if (is_null($request->get('password')) || $request->get('password') === '') {
            return response()->json([
                'error' => 'Password required'
            ], 400);
        }
        if (is_null($request->get('edad')) || $request->get('edad') === '') {
            return response()->json([
                'error' => 'Edad required'
            ], 400);
        }
        if ($request->get('sexo') === 'hombre' || $request->get('sexo') === 'mujer' || $request->get('sexo') === 'n/a') {
            return response()->json([
                'error' => 'Sexo must be hombre, mujer or n/a'
            ], 400);
        }
        $user = User::find($id); // Buscamos el usuario
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->edad = $request->get('edad');
        $user->sexo = $request->get('sexo');
        $user->save();
        return response()->json([
            'success' => 'User updated successfully',
            'user' => $user
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy($id)
    {
        User::destroy($id);
        return response()->json([
            'success' => 'User deleted successfully'
        ]);
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
