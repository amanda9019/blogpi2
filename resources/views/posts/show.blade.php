@extends('layouts.app')

@section('content')
    <h1 class="mt-5"><p><a href="/posts" class="btn btn-outline-secondary">Voltar</a></p></h1>
    <h1>{{$post->title}}</h1>
    <img style="width:90%" src="/storage/cover_images/{{$post->cover_image}}" class="rounded mx-auto d-block" alt="...">
    <br><br>
    <div>{!!$post->body!!}</div>
    <hr>
    <small>Criado em {{$post->created_at}} por {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Editar</a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Deletar', ['class' => 'btn btn-outline-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif

    <div class="container" style="margin-top:5%">
    <h4>Comentários</h4>
    <br>
    @foreach($post->comments as $comment)
        <div class="display-comment">
            <strong>Comentário por {{ $comment->user->name }}</strong>
            <p>{{ $comment->body }}</p>
            
            @if(!Auth::guest())
                @if(Auth::user()->id == $comment->user_id)
                    {!!Form::open(['action' => ['CommentsController@destroy', $comment->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Deletar', ['class' => 'btn btn-sm btn-outline-secondary'])}}
                    {!!Form::close()!!}
                @endif
            @endif
        </div>
    @endforeach
    </div>

    @if(!Auth::guest())
    <div class="container" style="margin-top:9%">
    <h4>Adicionar Comentário</h4>
    <form method="post" action="{{ route('comment.store') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="comment_body" class="form-control" />
            <input type="hidden" name="post_id" value="{{ $post->id }}" />
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-prmary" style="background-color: #7FA7B1; border-color: #7FA7B1" value="Comentar" />
        </div>
    </form>
    </div>
    <br><hr>
    
    @endif
@endsection