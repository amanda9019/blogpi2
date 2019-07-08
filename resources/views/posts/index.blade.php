@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5"><p>Posts</p></h1>
        <hr><br>
        @if(count($posts) > 0)
                <!-- Grade com card-deck, para auto-ajustar -->
            <div class="card-deck">
                @foreach($posts as $post)
                    <div class="col-md-4">
                        <div class="card">
                            <!-- Topo card / Imagem -->
                            <img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}">
                            
                            <!-- Corpo card / Texto -->
                            <div class="card-body">
                                <!-- Título -->
                                <h3 class="mb-0"><p>
                                    <a class="customText" href="/posts/{{$post->id}}">{{$post->title}}</a>
                                </p></h3>
                                <!-- Data -->
                                <div class="mb-1 text-muted"><small>Criado em {{$post->created_at}}</small></div>
                                <!-- Descrição -->
                                <p class="card-text mb-auto"></p>
                                <br>
                                <!-- Botões -->
                                @if(!Auth::guest())
                                    <!-- Para usuário -->
                                    @if(Auth::user()->id == $post->user_id)
                                        <!-- Para o usuário criador do post -->
                                        <a href="/posts/{{$post->id}}" class="btn btn-primary" style="background-color: #7FA7B1; border-color: #7FA7B1">Ver mais</a>
                                        <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Editar</a>
                                    @else
                                        <!-- Para qualquer outro usuário -->
                                        <a href="/posts/{{$post->id}}" class="btn btn-primary" style="background-color: #7FA7B1; border-color: #7FA7B1">Ver mais</a>
                                    @endif
                                @else
                                    <!-- Para visitante -->
                                    <a href="/posts/{{$post->id}}" class="btn btn-primary" style="background-color: #7FA7B1; border-color: #7FA7B1">Ver mais</a>
                                @endif
                            </div>

                            <!-- Rodapé card / Autor -->
                            <div class="card-footer">
                                <div class="mb-1 text-muted"><small>Post por {{$post->user->name}}</small></div>
                            </div>
                        </div>
                        <br><br>
                    </div>
                @endforeach
            </div>
            <hr>
        @else
            <p>Nenhum post encontrado</p>
        @endif
    </div>
@endsection



<style>
    .thumbnail{
        position: relative;
        width: 328px;
        height: 250px;
        overflow: hidden;
    }

    .thumbnail img {
        position: absolute;
        left: 50%;
        top: 50%;
        height: 100%;
        width: auto;
        -webkit-transform: translate(-50%,-50%);
            -ms-transform: translate(-50%,-50%);
                transform: translate(-50%,-50%);
    }
    .thumbnail img.portrait {
        width: 100%;
        height: auto;
    }


    .customText{
        color:#5195AA
    }


    .img-gradient{
    position:relative;
    display:inline-block;
    }
    .img-gradient:after {
    content:'';
    position:absolute;
    left:0; top:0;
    width:100%; height:100%;
    display:inline-block;
    background: -moz-linear-gradient(top, rgba(0,47,75,0.5) 0%, rgba(220, 66, 37, 0.5) 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(220, 66, 37, 0.5)), color-stop(100%,rgba(0,47,75,0.5))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, rgba(0,47,75,0.5) 0%,rgba(220, 66, 37, 0.5) 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, rgba(0,47,75,0.5) 0%,rgba(220, 66, 37, 0.5) 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, rgba(0,47,75,0.5) 0%,rgba(220, 66, 37, 0.5) 100%); /* IE10+ */
    background: linear-gradient(to bottom, rgba(0,47,75,0.5) 0%,rgba(220, 66, 37, 0.5) 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#002f4b', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */
    }
    .img-gradient img{
    display:block;
    }
    .img-gradient-overlay { /* FF3.6+ */ /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(rgba(0,47,75,0.5) 0%, rgba(220, 66, 37, 0.5) 100%);
        background: -o-linear-gradient(rgba(0,47,75,0.5) 0%, rgba(220, 66, 37, 0.5) 100%);
        background: linear-gradient(rgba(0,47,75,0.5) 0%, rgba(220, 66, 37, 0.5) 100%); /* Chrome10+,Safari5.1+ */ /* Opera 11.10+ */ /* IE10+ */ /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#002f4b', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */
        border-radius: .3rem;
    }

    .bg-img {
        position: relative;
        width: 100%;
        height: 100%;
        background: url('http://unsplash.it/1200x800') center center no-repeat;
        background-size: cover;
        
        &:before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: linear-gradient(to bottom right,#002f4b,#dc4225);
            opacity: .6; 
        }
    }
</style>