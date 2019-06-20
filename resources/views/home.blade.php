@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="pull-right">
                <div class="btn-group">
                    <a href="" class="btn btn-primary">
                        <i class="fas fa-plus" aria-hidden="true"></i> Añadir Cliente
                    </a>
                </div>
            </div>
            <hr>
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>RUT</th>
                        <th>Nombres</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)      
                        <tr>
                            <td>{{$cliente->rut_cliente}}</td>
                            <td>{{$cliente->nombre_cli}}</td>
                            <td>{{$cliente->direccion}}</td>
                            <td>{{$cliente->telefono}}</td>
                            <td>{{$cliente->mail}}</td>
                            <td>
                                <a class="btn btn-danger" href="">
                                    <i class="fas fa-trash" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-warning" href="">
                                    <i class="fas fa-edit" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection