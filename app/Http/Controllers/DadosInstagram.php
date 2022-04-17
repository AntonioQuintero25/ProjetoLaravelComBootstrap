<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DadosInstagram extends Controller
{
    public function index()
    {
        $seguidores = 37.8;
        $seguindo = 5; 
        $publicacoes = 589;
        $mediaposts = 5;
        $meidacomentario = 104;
        $likeporpost = 7.6;
        $engagement= 9;

        return view('index', [
            'seguidores'=>$seguidores,
            'seguindo'=>$seguindo,
            'publicacoes'=>$publicacoes,
            'mediaposts'=>$mediaposts,
            'mediacomentario'=>$meidacomentario,
            'likeporpost'=>$likeporpost,
            'engagement'=>$engagement
        ]);
    }
}
