<?php

namespace App\Http\Controllers;

use App\Models\hoteles;
use App\Http\Requests\StorehotelesRequest;
use App\Http\Requests\UpdatehotelesRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class HotelesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoteles = hoteles::all();

        if ($hoteles->isEmpty()) {
            $data = [
                "message" => "no se encontraron hoteles",
                "status" => 200,
            ];
            return response()->json($data, 404);
        }
        ;

        return response()->json($hoteles, 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorehotelesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "nombre" => "required",
            "idRol" => "required",
            "numPersonas" => "required",
            "idAcomodacion" => "required",
        ]);

        if ($validator->fails()) {
            $data = [
                "message" => "Error en la validacion de los datos",
                "errors" => $validator->errors(),
                "status" => 400,
            ];
            return response()->json($data, 400);
        }
        
        $hoteles = hoteles::create([
            "nombre" => $request->nombre,
            "idRol" => $request->idRol,
            "numPersonas" => $request->numPersonas,
            "idAcomodacion" => $request->idAcomodacion,
        ]);

        if($hoteles) {
            $data = [
                "message" => "Error al crear el hotel",
                "status"=> 500,
            ];
            return response()->json($data, 500);
        }

        $data = [
            "hotel" => $hoteles,
            "status"=> 501,
        ];
        return response()->json($data, 501);

    }


}
