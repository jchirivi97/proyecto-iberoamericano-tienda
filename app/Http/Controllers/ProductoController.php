<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function allProducts(){
        $product = Producto::all();
        return $product;
    }

    public function getProducto($codigo){

        $product = Producto::where('codigo','=',$codigo)->get();
        return $product;
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $base_to_php = explode(',', $request->url);
        $data = base64_decode($base_to_php[1]);
        
        $ruta = 'img/productos/'.$request->codigo.'.png';
        file_put_contents($ruta, $data);
        
        $product = Producto::create(array(
            'codigo'=>$request->codigo,
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'valor'=>$request->valor,
            'disponible'=>$request->disponible,
            'imagen'=>$ruta,
            'categoria'=>$request->categoria
        ));
        return array("ESTADO"=>"OK");
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        $product = Producto::where('codigo','=',$request->codigo)
                ->update(array(
                    'codigo'=>$request->codigo,
                    'nombre'=>$request->nombre,
                    'descripcion'=>$request->descripcion,
                    'valor'=>$request->valor,
                    'disponible'=>$request->disponible,
                    'categoria'=>$request->categoria
                ));
        return array("ESTADO"=>"OK");
    }

    /**
     * 
     */
    public function updateImg(Request $request){
        if($request->url != "url"){
            $base_to_php = explode(',', $request->url);
            $data = base64_decode($base_to_php[1]);            
            $ruta = 'img/productos/'.$request->codigo.'.png';
            file_put_contents($ruta, $data);
        }else{
            $ruta = $request->imagen;
        }
        $product = Producto::where('codigo','=',$request->codigo)
                ->update(array(
                    'imagen'=> $ruta
                ));
        return array("ESTADO"=>"OK");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($producto)
    {
        $product = Producto::where('codigo','=',$producto)->delete();
        return array("ESTADO"=>"OK");
    }
}
