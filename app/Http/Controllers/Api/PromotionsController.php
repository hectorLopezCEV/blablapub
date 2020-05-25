<?php

namespace App\Http\Controllers\Api;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class PromotionsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */

    public function index()
    {
        return response()->json(Promotion::get());
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
        $promotions = Promotion::create($solicitud->all());
        return response()->json($promotions);
    }

    /**
     * Display the specified resource.
     * api/lugar/{lugar_id}/promotions/{id}
     * @param  Request  $request
     * @param  int  $id
     * @return JsonResponse
     */
    public function show(Request $request, $id)
    {
        $promotions = Promotion::find($id);
        return response()->json($promotions);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * api/lugars/1/promotions/1   -   VERBO PUT
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return JsonResponse
     */
    public function update(Request $request, $id, $lugar_id)
    {
        $promotions = Promotion::where('lugar_id', $lugar_id)
            ->where('id', $id)
            ->firstOrFail();
        $promotions->fill($request->all());
        $promotions->save();
        return response()->json($promotions);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy($lugar_id, $id)
    {
        $promotions = Promotion::where('lugar_id', $lugar_id)
            ->where('id', $id)
            ->firstOrFail();
        $promotions->delete();
        return response()->json(['exito' => 'Lugar id:'.$promotions->id.' eliminado']);
    }
}




