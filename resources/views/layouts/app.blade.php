<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de autos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #064a62; color:white;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{ url('/') }}">Inicio<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active" href="{{ url('/list') }}">Listado principal</a>
            <a class="nav-item nav-link active" href="{{ url('/listLowerPrice') }}">Menor precio</a>
            <a class="nav-item nav-link active" href="{{ url('/listHigherPrice') }}">Mayor precio</a>
            <a class="nav-item nav-link active" href="{{ url('/listModels') }}">Modelos de 1998</a>
            <a class="nav-item nav-link active" href="{{ url('/listAvgMake') }}">Promedio por marca</a>
            <a class="nav-item nav-link active" href="{{ url('/listMakeModelYear') }}">Listado de marca y modelo por año</a>
          </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
