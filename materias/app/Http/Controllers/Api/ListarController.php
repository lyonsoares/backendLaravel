<?php

namespace App\Http\Controllers\Api;

use GuzzleHttp\Client;
use App\API\ApiError;
use App\Repositories\Listar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Cookie\CookieJar;

class ListarController extends Controller
{
    protected $listar;

    public function __construct(Listar $listar)
    {
        $this->listar = $listar;
    }

    public function index()
    {
        $listar = $this->listar->all();

        return $listar;
    }

    public function getDados(Request $request){
        $client = new Client();

        $response = $client->post('http://desenvolvertecnologia.com/api/public/login', [

                'form_params' => [
                    'password' => $request->password,
                    'user' => $request->user,
                 ],

        ]);

       $body = $response->getBody()->getContents();
       print_r($body);

    }



}

