<?php

namespace App\Http\Controllers\Api;

use App\API\ApiError;
use Illuminate\Http\Request;
use App\Estado;
use App\Http\Controllers\Controller;

class EstadoController extends Controller
{
    /**
     * @var Estado
     */
    private $estado;

    public function __construct(Estado $estado)
    {
        $this->estado = $estado;
    }

    public function index(){
       $data = $this->estado->all();

       return response()->json($data);
    }

    public function show(Estado $id)
    {
        $data = ['data' => $id];
        return response()->json($data);
    }

    public function store(Request $request)
    {
        try {
            $estadoData = $request->all();
            $this->estado->create($estadoData);

            return response()->json(['msg' => 'Estado cadastrado com sucesso!'], 201);

        } catch (\Exception $e){
            if(config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1010));
            }

            return response()->json(ApiError::errorMessage('Houser um erro ao cadastrar', 1010));
        }
    }
}
