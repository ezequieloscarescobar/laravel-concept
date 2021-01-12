<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $municipios = DB::table('municipio')
           ->select('*')
           ->get();
       return response()->json($municipios);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $municipio = DB::table('municipio')
            ->select('*')
            ->where(['id' => $id])
            ->get();
        return response()->json($municipio);
    }
}
