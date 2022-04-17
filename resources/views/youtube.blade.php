@extends('layouts.main')

@section('title','Youtube')

@section('content')

<!--DADOS DA REDE SOCIAL YOUTUBE-->

<div class="container-fluid p-3 bg-dark text-white">
    <div class="row align-items-center">
        <div class="col">
            <img src="\img\youtube.png" class="img-fluid rounded float-start m-2">
            <h2 class="m-4">Visão Geral do YouTube</h2>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-3 bg-dark text-white">
    <div class="row align-items-center">
    <div class="col shadow-lg p-3 mb-2 bg-light text-black rounded align-middle mx-5" >
        <img src="\img\inscritos.png" class="img-fluid rounded mx-auto d-block">
        <figure class="text-center">
        <h3>Inscritos</h3>
        <p>{{$inscritos}} Milhõess</p>
        </figure>
    </div>
    <div class="col shadow-lg p-3 mb-2 bg-light text-black rounded align-middle mx-5" >
        <img src="\img\visualizar.png" class="img-fluid rounded mx-auto d-block">
        <figure class="text-center">
        <h3>Visualizações</h3>
        <p>{{$visualizacao}}</p>
        </figure>
    </div>

    </div>
</div>

<div class="container-fluid p-3 bg-dark text-white">

    <div class="row align-items-center">

        <div class="col shadow-lg p-3 mb-5 bg-light text-black rounded align-middle m-5" >
        <canvas id="charteste" width="200" height="200"></canvas>
        </div>

        <div class="col shadow-lg p-3 mb-5 bg-light text-black rounded align-middle m-5" >
            <canvas id="chartvisualizacao" width="200" height="200"></canvas>
        </div>

    </div>

    <div class="row">
        <div class="col">
            <div class="col shadow-lg p-3 bg-light text-black rounded align-middle mx-5 mb-1">
                <p>Visualizações por vídeo</p>
                <p style="font-size:50px;">{{$visualizacaoporvideo}}%</p>
                <p><span style="color:#ff0000;">-1.9%</span> menos que o habitual</p>
            </div>
            <div class="col shadow-lg p-3 bg-light text-black rounded align-middle mx-5 mb-1">
                <p>Curtidas por vídeo</p>
                <p style="font-size:50px;">{{$curtidasporvideo}}M</p>
                <p><span style="color:#00ff00;">+1.4%</span> mais que o habitual</p>
            </div>
            <div class="col shadow-lg p-3 bg-light text-black rounded align-middle mx-5 mb-1">
                <p>Compartilhamento</p>
                <p style="font-size:50px;">{{$compartilhamento}}K</p>
                <p><span style="color:#ff0000;">-6.4%</span> menos que o habitual</p>
            </div>

        </div>
        <div class="col">
        <table class="table table-light">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Top 10 palavras mais usadas</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Starboy</td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Too late</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Die for you</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td colspan="2">Call out</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td colspan="2">my name</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td colspan="2">Weeknd</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td colspan="2">Secrets</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td colspan="2">After Hours</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td colspan="2">Out of Time</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td colspan="2">The Weeknd</td>
    </tr>
  </tbody>
</table>
        </div>
    </div>


    <div class="row p-4">
        <h2>Top 4 músicas mais ouvidas</h2>
    </div>
    <div class="row p-4">
        <div class="col shadow-lg p-3 mb-5 bg-light text-black rounded align-middle m-2">
            <div class="card" style="width: 100%;">
                <img src="https://i.postimg.cc/8PmwkZyn/monkey-g4b57a5891-640.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Too Late</h5>
                    <p class="card-text">19.821.131 visualizações<br>209 mil curtidas</p>
                    <a href="#" class="btn" style="background-color:#ff0000; color:#ffffff">Ver no Youtube</a>
                </div>
            </div>
        </div>
        <div class="col shadow-lg p-3 mb-5 bg-light text-black rounded align-middle m-2">
            <div class="card" style="width: 100%;">
                    <img src="https://i.postimg.cc/8PmwkZyn/monkey-g4b57a5891-640.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Wasted Times</h5>
                        <p class="card-text">50.769.369 visualizações<br>404 mil curtidas</p>
                        <a href="#" class="btn" style="background-color:#ff0000; color:#ffffff">Ver no Youtube</a>
                    </div>
                </div>
        </div>
        <div class="col shadow-lg p-3 mb-5 bg-light text-black rounded align-middle m-2">
            <div class="card" style="width: 100%;">
                        <img src="https://i.postimg.cc/8PmwkZyn/monkey-g4b57a5891-640.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Try Me</h5>
                            <p class="card-text">66.720.699 visualizações<br>445 mil curtidas</p>
                            <a href="#" class="btn" style="background-color:#ff0000; color:#ffffff">Ver no Youtube</a>
                        </div>
                    </div>
        </div>
        <div class="col shadow-lg p-3 mb-5 bg-light text-black rounded align-middle m-2">
            <div class="card" style="width: 100%;">
                            <img src="https://i.postimg.cc/8PmwkZyn/monkey-g4b57a5891-640.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Die For You</h5>
                                <p class="card-text">53.591.467 visualizações<br>466 mil curtidas</p>
                                <a href="#" class="btn" style="background-color:#ff0000; color:#ffffff">Ver no Youtube</a>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
const ctx = document.getElementById('charteste').getContext('2d');
const myhart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['2011', '2012', '2013', '2015', '2018', '2022'],
        datasets: [{
            label: 'Inscritos (milhões)',
            data: [0, 10, 15, 22, 25, 27],
            backgroundColor: [
                'rgba(255, 0, 0)',
                'rgba(255, 0, 0)',
                'rgba(255, 0, 0)',
                'rgba(255, 0, 0)',
                'rgba(255, 0, 0)',
                'rgba(255, 0, 0)'
            ],
            borderColor: [
                'rgba(255, 0, 0)',
                'rgba(255, 0, 0)',
                'rgba(255, 0, 0)',
                'rgba(255, 0, 0)',
                'rgba(255, 0, 0)',
                'rgba(255, 0, 0)'
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

<script>
const ct = document.getElementById('chartvisualizacao').getContext('2d');
const chartvisualiza = new Chart(ct, {
    type: 'line',
    data: {
        labels: ['2011', '2012', '2013', '2015', '2018', '2022'],
        datasets: [{
            label: 'Visualizações (milhões)',
            data: [0, 5, 10, 14, 16, 18],
            backgroundColor: [
                'rgba(255, 0, 0)',
                'rgba(255, 0, 0)',
                'rgba(255, 0, 0)',
                'rgba(255, 0, 0)',
                'rgba(255, 0, 0)',
                'rgba(255, 0, 0)'
            ],
            borderColor: [
                'rgba(255, 0, 0)',
                'rgba(255, 0, 0)',
                'rgba(255, 0, 0)',
                'rgba(255, 0, 0)',
                'rgba(255, 0, 0)',
                'rgba(255, 0, 0)'
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


<!--/DADOS DA REDE SOCIAL YOUTUBE-->

@endsection