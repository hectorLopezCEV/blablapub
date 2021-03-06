<?php

namespace App\Http\Controllers\Api;

use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class PlaceController extends BaseController
{
    /**
     * Despliega todos los registros activos de la tabla lugars
     *
     * @return JsonResponse
     */
    public function index()
    {
        return response()->json(Place::orderBy('id', 'desc')->get());
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
     * @param  Request  $solicitud
     * @return JsonResponse
     */
    public function store(Request $solicitud)
    {
        return response()->json(Place::create($solicitud->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id)
    {
        return response()->json(Place::with('promotions')->find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
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
        //encuentra el recurso con $id
        $lugar = Place::find($id);
        //actualizacion de campos
        $lugar->fill($request->all());
        //guarda en la base de datos
        $lugar->save();
        //devuelve el recurso actualizado
        return response()->json($lugar);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy($id)
    {
        $lugar = Place::find($id);
        $lugar->delete();
        return response()->json([
            'exito' => 'El lugar '.$lugar->nombres.' ha sido eliminado'
        ]);
    }

    public function lugarPorNombres($nombres)
    {
        $lugar = Place::where('nombres', $nombres)->get();
        return response()->json($lugar);
    }

    public function lugarPorZona($zona)
    {
        $lugar = Place::where('zona', 'like', '%'.$zona.'%')->get();
        return response()->json($lugar);
    }

    public function lugarPorIds()
    {
        $lugar = Place::find([2, 3]);
        return response()->json($lugar);
    }

    public function lugarPorzonaPorhorario($nombres, $zona = null)
    {
        $lugar = [];
        if ($zona != null) {
            $lugar = Place::where('nombres', $nombres)
                ->orWhere('zona', $zona)
                ->get();
        } else {
            $lugar = Lugar::where('nombres', $nombres)->get();
        }
        return response()->json($lugar);

    }

    public function mostrarEliminados()
    {
        return response()->json(Place::onlyTrashed()->get());
    }

    public function mostrarTodos()
    {
        return response()->json(Place::withTrashed()->get());
    }

    public function restaurar($id)
    {
        $lugar = Place::onlyTrashed()->find($id);
        //restaura registro eliminado logicamente
        //poniendo en null deleted_at
        $lugar->restore();
        return response()->json($lugar);
    }

}
