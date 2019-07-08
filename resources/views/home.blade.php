@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Conta</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-primary" style="background-color: #5195AA; border-color: #5195AA">Criar Post</a>
                    <hr>
                    <p><h3>Seus Posts</h3></p>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Título</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-secondary btn-sm">Editar</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-left'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Deletar', ['class' => 'btn btn-danger btn-sm'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>Você não possui nenhum post.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
