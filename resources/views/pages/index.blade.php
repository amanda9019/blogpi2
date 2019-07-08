@extends('layouts.app')

<br><br>
<!-- Imagem de fundo -->
<div class="view" style="background-image: url('https://images.pexels.com/photos/1054218/pexels-photo-1054218.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'); background-repeat: no-repeat; background-size: cover; background-position: center center; height: 100%;">
  <!-- Mask & flexbox options-->
  <div class="mask rgba-black-light align-items-center">
    <!-- Content -->
    <div class="container">
      <!--Grid row-->
      <br><br><br>
      <div class="row" style="margin-top:5%;">
        <!--Grid column-->
        <div class="jumbotron jumbotron-fluid bg-dark text-center" style="height: 100%; width: 100%; text-align: center; background-size: cover; opacity:.5;">
            <div class="jumbotron-background">
            </div>
            <div class="container text-white">
              <!-- Divisória cima-->
              <hr class="my-4" style="border-color: #EEEEEE"><br>

              <!-- Título e descrição -->
              <h1 class="display-4">{{$title}}</h1>
              <p class="lead">Este blog é um projeto interdisciplinar para o curso de Ciência da Computação da Unifil.</p>
              
              <!-- Botões -->
              @if(!Auth::guest())
                  <!-- Se for usuário -->
                <hr class="my-4">
                <p><a class="btn btn-outline-light" href="/home" role="button">Sua Conta</a></p>
              @else
                  <!-- Se for visitante -->
                <hr class="my-4">
                <p><a class="btn btn-outline-light" href="/login" role="button">Fazer Login</a>
                <a class="btn btn-outline-light" href="/register" role="button">Registrar</a>
                </p>
              @endif

              <!-- Divisória baixo -->
              <br><hr class="my-4" style="border-color: #EEEEEE">
            </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Content -->
  </div>
  <!-- Mask & flexbox options-->
</div>