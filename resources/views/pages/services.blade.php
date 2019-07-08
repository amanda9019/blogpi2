@extends('layouts.app')

@section('content')
    <br>
    <div class="container">
        <h1 class="mt-5"><p>{{$title}}</p></h1>

        <p>O Laravel é um framework de desenvolvimento rápido para PHP, livre e de código aberto.
        Cujo o principal objetivo é permitir que você trabalhe de forma estruturada e rápida.</p>

        Esta página ensinará apenas como criar seu projeto Laravel, iniciar o Apache e MySQL e estabelecer uma senha para seu banco de dados.
        Assuntos mais a fundo como desenvolver o projeto não será ensinado porém indico o canal Traversy Media
        que tem a série de vídeos <a href='https://www.youtube.com/playlist?list=PLillGF-RfqbYhQsN5WMXy6VsDMKGadrJ-'>Laravel From Scratch</a> que ensina a criar e desenvolver seu projeto.
        <br><hr><br>

        <h3><li>Requisitos</li></h3>
        <br>
        <p>- Ter instalado a versão 5.5.9 ou maior do PHP e as extensões OpenSSL PHP, PDO PHP, Mbstring PHP, Tokenizer;</p>
        <p>- Ter instalado o Composer;</p>
        <p>- Um servidor como Apache/Nginx;</p>
        <p>- Um editor de código ou IDE de sua preferência.</p>
        <p>* Ou ao invés disso, instalar o XAMPP que já fornece o PHP, o servidor Apache e o banco de dados MySQL, o editor de código Sublime Text 3 e o Cmder.</p>
        <hr><br>

        <h3><li>Preparativos</li></h3>
        Começando, devemos iniciar o Apache e o MySQL.
        Abra o painel de controle do XAMPP como administrador e clique nas caixas marcadas com um X vermelho, isso instalará o Apache e o MySQL.
        Feito isso aperte em Start na linha do Apache e do MySQL para iniciá-los.
        <br><br><img src="/storage/cover_images/blog.png" class="img-fluid center" alt="Imagem blog"><br>
        E depois disso é necessário criar uma senha para o seu phpMyAdmin, senão seu banco de dados estará aberto para qualquer um entrar.
        Entre no localhost do phpMyAdmin, na aba de contas (User account) verá uma tela assim:
        <br><br><img src="/storage/cover_images/blog1.png" class="img-fluid center" style="width:80%" alt="Imagem blog"><br>
        Observe que na última linha o localhost está sem senha, então clique em Edit privileges e na parte superior da nova página clique na aba Change password.
        <br><br><img src="/storage/cover_images/blog2.png" class="img-fluid center" style="width:80%" alt="Imagem blog"><br>
        Preencha os campos de senha e dê ok. Ao tentar voltar nas páginas anteriores o site não te permite, então vá no diretório: C:xampp/phpMyAdmin e abra o arquivo config.inc.php
        <br><br><img src="/storage/cover_images/blog3.png" class="img-fluid center" style="width:60%" alt="Imagem blog"><br>
        Na parte de password insira a senha que estabeleceu entre as aspas vazias, salve e feche o arquivo. Agora você consegue navegar no localhost do phpMyAdmin.
        <hr><br>

        <h3><li>Criando o Projeto</li></h3>
        Para criar um novo projeto Laravel, é necessário abrir o terminal do Windows, navegar até a pasta htdocs do XAMPP e digitar o comando:
        <br><br><img src="/storage/cover_images/blog4.png" class="img-fluid center" style="width:80%" alt="Imagem blog"><br>
        Usando o Composer, cria-se um novo projeto Laravel chamado “aprendendo-laravel” no diretório htdocs.
        <hr><br>

        <h3><li>Criando e Configurando o Host Virtual</li></h3>
        Com seu editor, abra o arquivo httpd-vhosts.conf no diretório do XAMPP: xampp\apache\conf\extra. No final do arquivo digite:
        <br><br><img src="/storage/cover_images/blog5.png" class="img-fluid center" style="width:80%" alt="Imagem blog"><br>
        Feito isso, salve o arquivo e feche. Abra o arquivo host no diretório C:\Windows\System32\drivers\etc com o bloco de notas (executando como administrador)
        e no final acrescente o código seguinte, salve e feche o arquivo.
        <br><br><img src="/storage/cover_images/blog6.png" class="img-fluid center" style="width:80%" alt="Imagem blog"><br>
        Após isso, vá ao painel de controle do XAMPP e reinicie o Apache, clicando em Stop e depois Start novamente.
        E se estiver tudo configurado, ao entrar no endereço “http://aprendendoLaravel” a seguinte tela abrirá:
        <br><br><img src="/storage/cover_images/blog7.png" class="img-fluid center" style="width:80%" alt="Imagem blog"><br>
        
        E esse é um breve tutorial para começar seu projeto usando o Laravel,
        e relembrando que o resto do desenvolvimento pode ser seguido pela série de vídeos
        <a href='https://www.youtube.com/playlist?list=PLillGF-RfqbYhQsN5WMXy6VsDMKGadrJ-'>Laravel From Scratch</a> no Youtube.
    </div>
@endsection

<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>
