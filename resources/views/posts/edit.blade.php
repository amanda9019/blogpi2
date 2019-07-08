@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5"><p>Editar Post</p></h1>
        <hr><br>
        {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title', 'Título')}}
                {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Insira um título'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Texto')}}
                {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Insira o texto'])}}
            </div>
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Enviar', ['class' => 'btn btn-secondary'])}}
        {!! Form::close() !!}
    </div>
@endsection