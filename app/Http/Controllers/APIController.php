<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function ListaUsuario(){
        $json = [
            'usuario' => [
                'nome' => 'Juan',
                'idade' => 22
            ],
            'usario2' => [
                'nome' => 'Petrus',
                'idade' => 25
            ]
        ];

        return response($json, 201)->header('Content-Type', 'application/json');
    }
}
