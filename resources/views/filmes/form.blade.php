@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-top:40px">
    <div class="col-6">
        <h2>Novo Filme <span class="badge badge-info"></span></h2>
    </div>
</div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('filmes.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" name="nome" id="nome" class="form-control" required>    
                        </div> 

                        <div class="form-group">
                            <label for="genero">Gênero:</label>
                            <input type="text" name="genero" id="genero" class="form-control" required>    
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection