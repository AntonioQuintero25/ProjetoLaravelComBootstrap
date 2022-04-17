<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DadosFacebook extends Controller
{
    public function index()
    {
        $curtidasporpost = 25.9;
        $comentariosporpost = 12.5;
        $compartilhamentoporpost = 67.8;
        $curtidas = 10;
        $comentarios = 100;
        $compartilhamento = 40;

        return view('facebook',
        [
            'curtidasporpost'=>$curtidasporpost,
            'comentariosporpost'=>$comentariosporpost,
            'compartilhamentoporpost'=>$compartilhamentoporpost,
            'curtidas'=>$curtidas,
            'comentarios'=>$comentarios,
            'compartilhamento'=>$compartilhamento
        ]);
    }
}
