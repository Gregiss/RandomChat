<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RandomChat</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/app.css" />
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
        

<body>
<div class="container_blue background"></div>
    <div class="header">
    <div class="container">
            <a href="/home"><h1>RandomChat</h1></a>
            <div class="avatar"></div>
            <div class="menu">
                <a href="/profile">Perfil</a>
                <a href="/config">Configurações</a>
                <a href="">Criar um server</a>
                <a href="">Sair</a>
            </div>
    </div>
</div>

<div class="container-fluid">
<div class="profile">
    <div class="container px-lg-5">
        <div class="row mx-lg-n5">
            <div class="col-4 py-3 px-lg-5 border bg-light" style="top: 87px; height: 130px;">
            <h1>Configurações</h1>
            <li><a href="">Editar perfil</a></li>
            </div>
            <div class="col-8 py-3">
                <div class="profile_o">
                    <div class="cover">
                        <div class="avatarfull"></div>
                        <h1 class="name">Alexandre Silva</h1>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>

<script src="/js/index.js?version=1"></script>
</body>

</html>