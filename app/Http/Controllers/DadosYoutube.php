<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DadosYoutube extends Controller
{
    public function index()
    {
        $inscritos = 27.8;
        $visualizacao = "18.001.700.936";
        $visualizacaoporvideo = 9;
        $curtidasporvideo = 124;
        $compartilhamento = 10;

        return view('youtube',
        [
            'inscritos'=>$inscritos,
            'visualizacao'=>$visualizacao,
            'visualizacaoporvideo'=>$visualizacaoporvideo,
            'curtidasporvideo'=>$curtidasporvideo,
            'compartilhamento'=>$compartilhamento
        ]);
    }
}
