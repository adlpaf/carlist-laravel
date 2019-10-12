@extends('layouts/app')

@section('content')
<div class="row"><div class="col-md-12"><p></p></div></div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table id="table" class="table display">
                <thead style="background-color: #064a62; color:white;">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Características</th>
                        <th scope="col">Año</th>
                        <th scope="col">Precio mínimo</th>
                        <th scope="col">Precio máximo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listModels as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->make }}</td>
                            <td>{{ $item->model }}</td>
                            <td>{{ $item->trim }}</td>
                            <td>{{ $item->year }}</td>
                            <td style="text-align: right">{{ number_format($item->minprice, 2, ',', '.') }}</td>
                            <td style="text-align: right">{{ number_format($item->maxprice, 2, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        var path = window.location.pathname;
        var order = 0;
        var type = 'asc';
        if (path == '/listLowerPrice') {
            order = 5;
            type = 'asc';
        } else if (path == '/listHigherPrice') {
            order = 6;
            type = 'desc';
        }
        $('#table').DataTable({
            'order': [[order, type]]
        });
    } );
    </script>
@endsection
