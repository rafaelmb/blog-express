@extends('template')


@section('conteudo')
    <div class="container">
        <div class="col-md-12 center-block">
            <h1>Blog Sem Nome!</h1>
            <ul class="list-unstyled">
            @foreach($posts as $post)
                <li>
                    <h3>{{$post['titulo']}}</h3>
                    <p>{{substr($post['texto'],0,15)}} ...</p>
                    <p><a class="btn btn-primary btn-sm" href="{{url('/post/'.$post['id'].'/'.$post['slug'])}}">Leia mais</a></p>
                </li>
            @endforeach
        </ul>
    </div>
</div>



@endsection