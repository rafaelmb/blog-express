@extends('template')

@section('conteudo')

    <div class="container">
        <div class="col-md-12 center-block">
            <h1>{{$post['titulo']}}</h1>
            <br>
            <p>{{$post['texto']}}</p>
            <p><a class="btn btn-primary btn-sm" href="{{url('/')}}">Voltar</a></p>
        </div>
    </div>

@endsection