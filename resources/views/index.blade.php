@extends('layouts.main')

@section('title','Instagram')

@section('content')

{{-- "https://i.postimg.cc/zBcQJdxR/fotothewenken.jpg" --}}

<!--DADOS DA REDE SOCIAL INSTAGRAM-->

<div class="container-fluid mt-3"> {{-- Início do Container --}}

    <div class="row bg-body"> {{-- Início da Linha da Visão Geral --}}

            <div class="col">
                <img src="\img\instagram(1).png" class="img-fluid rounded float-start m-3">
                <h2 class="mt-4">Visão Geral do instagram</h2>
            </div>
    </div> {{-- Fim da Linha da Visão Geral --}}


</div> {{-- Fim do Container --}}

<div class="container-fluid"> {{-- Início do Container --}}

    <div class="row"> {{-- Início dos Dados da Visão Geral --}}

        <div class="col bg-dark text-white m-3 p-3 rounded">
            <img src="\img\followers.png" class="img-fluid d-block mx-auto">
            <figure class="text-center">
            <h3>Seguidores</h3>
            <p>{{ $seguidores }} Milhões</p>
            </figure>
        </div>

        <div class="col bg-dark text-white m-3 p-3 rounded">
            <img src="\img\heart.png" class="img-fluid d-block mx-auto">
            <figure class="text-center">
            <h3>Seguindo</h3>
            <p>{{ $seguindo }}</p>
            </figure>
        </div>

        <div class="col bg-dark text-white m-3 p-3 rounded">
            <img src="\img\social-media.png" class="img-fluid d-block mx-auto">
            <figure class="text-center">
            <h3>Publicações</h3>
            <p>{{ $publicacoes }}</p>
            </figure>
        </div>

    </div> {{-- Fim dos Dados da Visão Geral --}}

</div> {{-- Fim do Container --}}

<div class="container-fluid"> {{-- Início do Container --}}

    <div class="row bg-body p-5 align-items-center"> {{-- Início do Gráfico com Texto --}}
        <div class="col-4">
        <canvas id="myChart" width="20" height="20"></canvas>
        </div>
        <div class="col-8">
        <h2>What is Lorem Ipsum?</h2>
            <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </div> {{-- Fim do Gráfico com Texto --}}

</div> {{-- Fim do Container --}}

<div class="container-fluid"> {{-- Início do Container --}}

    <div class="row bg-dark text-white p-2 m-5 rounded">
        <div class="col">
            <p>Média. Posts por dia</p>
            <p style="font-size:50px;">{{ $mediaposts }}</p>
            <p><span style="color:#00ff00;">+5.7%</span> mais que o habitual</p>
        </div>
        <div class="col">
            <p>Média. Comentários por post</p>
            <p style="font-size:50px;">{{ $mediacomentario }}</p>
            <p><span style="color:#ff0000;">-2.7%</span> menos que o habitual</p>
        </div>
        <div class="col">
            <p>Avg. Likes per Post</p>
            <p style="font-size:50px;">{{ $likeporpost }}K</p>
            <p><span style="color:#00ff00;">+4.4%</span> mais que o habitual</p>
        </div>
        <div class="col">
            <p>Avg. Engagement Rate</p>
            <p style="font-size:50px;">{{$engagement}}%</p>
            <p><span style="color:#00ff00;">+1.4%</span> mais que o habitual</p>
        </div>
    </div>

</div> {{-- Fim do Container --}}


<script>
const teste = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(teste, {
    type: 'doughnut',
    data: {
        labels: ['Seguidores', 'Seguindo', 'Publicações'],
        datasets: [{
            label: 'Pesquisa por público',
            data: [37, 10, 10],
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },

    options: {
        plugins: {
            legend: {
                display: true,
                labels: {
                    color: 'rgb(0, 0, 0)'
                }
            }
        }
    }
});
</script>

<!--/DADOS DA REDE SOCIAL INSTAGRAM-->

@endsection
