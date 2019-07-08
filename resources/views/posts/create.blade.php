@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5"><p>Criar Post</p></h1>
        <hr><br>
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title', 'Título')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Insira um título'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Texto')}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Insira o texto'])}}
            </div>
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
            {{Form::submit('Enviar', ['class' => 'btn btn-secondary'])}}
        {!! Form::close() !!}
    </div>
@endsection