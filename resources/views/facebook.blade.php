@extends('layouts.main')

@section('title','Facebook')

@section('content')

<!--DADOS DA REDE SOCIAL FACEBOOK-->

<div class="container-fluid mt-5">

    <div class="row">

        <div class="col">
            <img src="\img\facebook(1).png" class="img-fluid rounded float-start m-2">
            <h2 class="m-4">Visão Geral do Facebook</h2>
        </div>

    </div>

    <div class="row">
        <div class="col shadow-lg p-3 mb-5 bg-light text-black rounded align-middle m-5">
            <img src="\img\gostar.png" class="img-fluid rounded mx-auto d-block">
            <figure class="text-center">
                <h3>Curtidas por Post</h3>
                <p>{{$curtidasporpost}} Milhões</p>
            </figure>
        </div>

        <div class="col shadow-lg p-3 mb-5 bg-light text-black rounded align-middle m-5">
            <img src="\img\comentario-positivo.png" class="img-fluid rounded mx-auto d-block">
            <figure class="text-center">
                <h3>Comentários por Post</h3>
                <p>{{$comentariosporpost}} Milhões</p>
            </figure>
        </div>

        <div class="col shadow-lg p-3 mb-5 bg-light text-black rounded align-middle m-5">
            <img src="\img\enviar.png" class="img-fluid rounded mx-auto d-block">
            <figure class="text-center">
                <h3>Compartilhamento por Post</h3>
                <p>{{$compartilhamentoporpost}} Milhões</p>
            </figure>
        </div>
    </div>

    <div class="row shadow-lg p-3 bg-light text-black rounded align-middle m-5">
        <div class="col">
        <canvas id="myChart" width="20" height="20"></canvas>
        </div>

        <div class="col">

            <div class="bg-dark text-white p-3 rounded m-3">
            <p>Curtidas</p>
            <p style="font-size:50px;">{{$curtidas}}%</p>
            <p><span style="color:#ff0000;">-1.4%</span> menos que o habitual</p>
            </div>

            <div class="bg-dark text-white p-3 rounded m-3">
            <p>Comentários</p>
            <p style="font-size:50px;">{{$comentarios}}K</p>
            <p><span style="color:#00ff00;">+7.4%</span> mais que o habitual</p>
            </div>

            <div class="bg-dark text-white p-3 rounded m-3">
            <p>Compartilhamento</p>
            <p style="font-size:50px;">{{$compartilhamento}}K</p>
            <p><span style="color:#00ff00;">+8.7%</span> mais que o habitual</p>
            </div>

        </div>
    </div>

</div>


<script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ['Curtidas', 'Comentários', 'Compartilhamentos'],
        datasets: [{
            label: 'Media dos Posts',
            data: [15, 15, 12, 12, 14, 14],
            backgroundColor: [
                'rgba(2, 217, 255, 0.2)',
                'rgba(2, 217, 255)',
                'rgba(2, 217, 255)',
                'rgba(2, 217, 255)',
                'rgba(2, 217, 255)',
                'rgba(2, 217, 255)'
            
            ],
            borderColor: [
                'rgba(2, 217, 255)',
                'rgba(2, 217, 255)',
                'rgba(2, 217, 255)',
                'rgba(2, 217, 255)',
                'rgba(2, 217, 255)',
                'rgba(2, 217, 255)'
                
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>


<!--/DADOS DA REDE SOCIAL FACEBOOK-->

@endsection