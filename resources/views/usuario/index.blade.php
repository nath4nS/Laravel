@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuários</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Nome</th> 
                            <th>Sexo</th> 
                        </tr>
                        @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->nome }}</td> 
                            <td>{{ $usuario->sexo }}</td> 
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
