@extends('layouts/app')

@section('content')
<div class="row"><div class="col-md-12"><p></p></div></div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table id="table" class="table display">
                <thead style="background-color: #064a62; color:white;">
                    <tr>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Año</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listMakeModelYear as $item)
                        <tr>
                            <th scope="row">{{ $item->count }}</th>
                            <td>{{ $item->make }}</td>
                            <td>{{ $item->model }}</td>
                            <td>{{ $item->year }}</td>
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
        $('#table').DataTable({
            'order': [[1, 'asc']]
        });
    } );
    </script>
@endsection
