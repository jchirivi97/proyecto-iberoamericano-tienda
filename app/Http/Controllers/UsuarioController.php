<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
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
     * Funcion que retorna todos los usuarios
     */
    public function allUsers(){
        $user = Usuario::all();
        return  $user -> toArray();
    } 

    /**
     * Funcion que genera el ingreso al aplicativo 
     */
    public function login($user,$pass){
        $resp= array(Usuario::where([['nickname','=',$user],['password','=',$pass]])->get());

        if(sizeof($resp[0])>0){
            array_push($resp,array("ESTADO"=>"OK"));
            return $resp;
        }else{
            return array("ESTADO"=>"FAIL");
        }
        
    }

    /**
     * Funcion que genera el ingreso al aplicativo 
     */
    public function getUser($user){
        $resp= array(Usuario::where('nickname','=',$user)->get());

        if(sizeof($resp[0])>0){
            array_push($resp,array("ESTADO"=>"OK"));
            return $resp;
        }else{
            return array("ESTADO"=>"FAIL");
        }
        
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user = Usuario::create(array(
            'nickname' => $request->nickname,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'tipo' => $request->tipo,
            'documento' => $request->documento,
            'celular' => $request->celular,
            'password' => $request->password,
            'correo' => $request->correo,
            'direccion' => $request->direccion
        ));

        return array("ESTADO"=>"OK");
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Usuario::where('nickname','=',$request->nickname)
                ->update([
                    'nickname' => $request->nickname,
                    'nombre' => $request->nombre,
                    'apellido' => $request->apellido,
                    'tipo' => $request->tipo,
                    'documento' => $request->documento,
                    'celular' => $request->celular,
                    'password' => $request->password,
                    'correo' => $request->correo,
                    'direccion' => $request->direccion
                ]);
        return array("ESTADO"=>"OK");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($usuario)
    {
        $user = Usuario::where('nickname','=',$usuario)->delete();
        return array("ESTADO"=>"OK");
    }
}
