<?php

namespace App\Http\Controllers;

use App\Mail\Correo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CorreoController extends Controller
{
    public function enviar() {
        $datosEnvio = [
            'lista' => ['josemazu@gmail.com', 'naita.mcm.20@gmail.com', 'vizapaula@gmail.com', 'mamanipozofrancojesus@gmail.com'],
            'nombres' => 'cuate! :D'
        ];
        Mail::send(new Correo($datosEnvio));
    }
}
