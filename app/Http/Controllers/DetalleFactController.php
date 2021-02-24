<?php

namespace App\Http\Controllers;

use App\Models\DetalleFactura;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductoController;

class DetalleFactController extends Controller
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
        foreach($request->compras as $item){
            
            $detalle= DetalleFactura::firstOrNew(array(
                'cantidad'=>$item['cantidad'],
                'producto'=>$item['codigo'],
                'factura'=>$request->factura
            ));
            $detalle->save();
        }
        return array("ESTADO"=>"OK");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetalleFactura  $detalleFactura
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleFactura $detalleFactura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetalleFactura  $detalleFactura
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleFactura $detalleFactura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetalleFactura  $detalleFactura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleFactura $detalleFactura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetalleFactura  $detalleFactura
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleFactura $detalleFactura)
    {
        //
    }
}
