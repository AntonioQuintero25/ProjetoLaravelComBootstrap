<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    

    <title>@yield('title')</title>

    <style>
            body{
                font-family: 'Nunito', sans-serif;
            }
    </style>

  </head>
  <body>

<header>

      <!-- HEADER DO DASHBORD -->
<div id="header">
    <div class="container-fluid bg-light shadow mb-1">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light -sm-3">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="/img/fotothewenken.jpg" class="img-fluid rounded-circle" style="border-radius:25px;">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/youtube">Youtube</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/facebook">Facebook</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Procurar</button>
                        </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row p-3">
            <div class="col">
                <h3>Uma biografia de The Weeknd</h3>
                <p>The Weeknd é um talentoso e popular artista de R&B Hipster da Etiópia que vem do belo país do Canadá - Ontário em particular. Nascido em 16 de fevereiro de 1990 sob o nome de Abel Tesfaye, ele sentiu as dores de uma vida de criança abaixo do ideal enquanto crescia.</p>
            </div>
            <div class="col"> 
                    <p class="rounded-pill p-3 mb-2 bg-danger text-white d-inline">Music</p>
            <p class="rounded-pill p-3 mb-2 bg-info text-white d-inline">R&B Hipster</p>
                
            </div>
        </div>
        <div>
    </div>
</div>
<!--/HEADER DO DASHBORD -->

</header>

  @yield('content')

  <footer>
        <div class="container-fluid bg-dark text-white border-top border-white">
            <div class="row align-items-center p-3">
                <div class="col text-center" >
                    <p class="">Dashboard com Laravel e Bootstrap - Desenvolvido por Antonio Quintero - 2022</p>
                </div>

            </div>
        </div>

  </footer>

      <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>