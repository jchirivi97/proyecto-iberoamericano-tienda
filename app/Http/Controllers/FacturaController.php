<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\Producto;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FacturaController extends Controller
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

    public function getTotalVenta(){
        $total=0;
        $venta= Factura::all();
        foreach($venta as $item){
            $total += $item['total'];
        }
        return $total;
    }

    public function getFacturaUser($user){
        $facturas = Factura::where('usuario',"=",$user)->get();
        return $facturas;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resp = Factura::create(array(
                'fecha'=>$request->fecha,
                'total'=>$request->total,
                'usuario'=>$request->usuario,
                'estado'=>$request->estado
        ));
        /*
        $user= array(Usuario::where('nickname','=',$request->usuario)->get());

        $mensaje = array('user'=>$user,'detalle'=>$resp);
        var_dump($mensaje);
        Mail::send('messageReceived',['mensaje'=>$mensaje],function($menssage) use ($mensaje){
            $menssage->from('pruebalaravel2021@gmail.com','Notificacion');
            $menssage->to($mensaje['user'][0]['correo']);
            $menssage->subject('TIENDA ONLINE: Compra realizada');
        });*/

        return $resp;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show(Factura $factura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $factura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factura $factura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factura $factura)
    {
        //
    }
}
