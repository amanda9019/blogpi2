@extends('layouts.app')

@section('content')
    <br>
    <div class="container">
        <!-- Título página -->
        <h1 class="mt-5"><p><?php echo $title; ?></p></h1>
    
        <div class="row">
            <div class="col-3">
                <!-- Menu -->
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">O Blog</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Desenvolvedora</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Ferramentas</a>
                </div>
            </div>
            
            <div class="col-9">
                <!-- Conteúdos -->
                <div class="tab-content" id="v-pills-tabContent">
                    <!-- O blog -->
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <p>O blog foi desenvolvido como projeto interdisciplinar da UniFil durante o 3° período do curso de Ciência da Computação, em 2019.</p>
                        <p>O projeto tem a proposta de criar um blog, criar um servidor na Nuvem, registrar o domínio, dentre outros passos necessários para a construção de um blog.</p>
                    </div>
                    <!-- Desenvolvedora -->
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            O blog foi desenvolvido por Amanda Mika Onuma, graduanda do curso de Ciência da Computação, do Centro Universitário Filadélfia - Unifil.
                    </div>
                    <!-- Ferramentas -->
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <h3><li>Laravel</li></h3>
                        <img src="/storage/cover_images/laravel-logo-banner.png" class="img-fluid" alt="Imagem xampp"><br><br>
                            O Laravel é um framework de desenvolvimento rápido para PHP, livre e de código aberto.
                            Cujo o principal objetivo é permitir que você trabalhe de forma estruturada e rápida.
                            <br><br>
                        <h3><li>Visual Studio Code</li></h3>
                        <img src="/storage/cover_images/vsc-logo-banner.png" class="img-fluid" alt="Imagem xampp"><br><br>
                            O Visual Studio Code é um editor de código destinado ao desenvolvimento de aplicações web lançado pela Microsoft, em 2015.
                            É uma ferramenta multiplataforma, disponível para Windows, Mac OS e Linux, atendendo uma quantidade grande de projetos,
                            além do editor suportar sintaxe de linguagens como Python, Ruby e C++.
                            <br><br>
                            
                        <h3><li>XAMPP</li></h3>
                        <img src="/storage/cover_images/xampp-logo-banner.png" class="img-fluid" alt="Imagem xampp"><br><br>
                            O XAMPP é um pacote com os principais servidores de código aberto do mercado, incluindo FTP, banco de dados MySQL e Apache com suporte as linguagens PHP e Perl.
                            Com ele, é possível rodar sistemas como WordPress e Drupal localmente, o que facilita e agiliza o desenvolvimento.
                            Como o conteúdo estará armazenado numa rede local, o acesso aos arquivos é realizado instantaneamente.
                            <br><br>
                        <h3><li>Composer</li></h3>
                        <img src="/storage/cover_images/composer-logo-banner.png" class="img-fluid" alt="Imagem xampp"><br><br>
                            O Composer é uma ferramenta para gerenciamento de dependências para o PHP. Ele permite que com poucas linhas de configurações você declare as bibliotecas de terceiros
                            que você necessita utilizar em seu projeto, ele se encarrega de baixá-las e criar um autoloader deixando-as prontas para uso.
                            <br><br>
                        <h3><li>Git</li></h3>
                        <img src="/storage/cover_images/git-logo-banner.png" class="img-fluid" alt="Imagem xampp"><br><br>
                            Git é um sistema de controle de versão de arquivos. Através deles podemos desenvolver projetos na qual diversas pessoas podem contribuir simultaneamente no mesmo,
                            editando e criando novos arquivos e permitindo que os mesmos possam existir sem o risco de suas alterações serem sobrescritas.
                            <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<style>
    .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: #fff;
    background-color: #B2626D;
    }
</style>
