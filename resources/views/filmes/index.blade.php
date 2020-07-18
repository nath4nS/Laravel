@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-top:40px">
    <div class="col-6">
        <h2>Gerenciar Filmes <span class="badge badge-info"></span></h2>
    </div>
    <div class="col-4">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="pesquisa" type="search" placeholder="Pesquisar" aria-label="Pesquisar" value="">
      <button class="btn btn-success my-2 my-sm-0" type="submit">
        <i class="fas fa-search"></i>   
      </button>
      <a href="produtos" class="btn btn-warning my-2 my-sm-0">
        <i class="fas fa-trash-alt"></i>
      </a>
    </form>
    </div>
    <div class="col-2">
        <a href="" class="btn btn-success">Novo</a>
    </div>
</div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Filmes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Nome</th> 
                            <th>Gênero</th> 
                        </tr>
                        @foreach($filmes as $filme)
                        <tr>
                            <td>{{ $filme->nome }}</td> 
                            <td>{{ $filme->Genero }}</td> 
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection