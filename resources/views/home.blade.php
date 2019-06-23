@extends('layouts.app')

@section('content')
<div class="container_blue background">
    <a href="/ads" class="ads"></a>
</div>
    <div class="header">
    <div class="container">
            <h1>RandomChat</h1>
            <div class="avatar"></div>
            <div class="menu">
                <a href="/profile">Perfil</a>
                <a href="/config">Configurações</a>
                <a href="">Criar um server</a>
                <a href="">Sair</a>
            </div>
    </div>
    </div>

    <div class="container-fluid chat">
    <div class="row">
        <div class="col-2 py-3 px-lg-5 border bg-light boo adst">
        <div class="ads" style="background-image:url('http://www.coca-colacompany.com/content/dam/journey/us/en/private/2010/01/lg_friendliest_drink-7d9d5526.jpg');"></div>
        </div>
        <div class="col py-3 boo bg-light noway">
        <div class="groupst">
                    <p>Servidores</p>
                    <?php for($i = 0; $i < 20; $i++){?>
                    <div class="channel"></div>
                    <?php } ?>
                </div>
            <div class="chat_container">
                
                <div class="important">
                <h1>Seja bem vindo ao RandomChat</h1>
                </div>
                <div class="msgs">
                <div class="msgloading"></div>
                <div class="before"></div>
                </div>
            </div>
            <div class="sendmsg">
                    <input type="text" placeholder="Envie uma mensagem">
                </div>
        </div>
        <div class="col-2 py-3 px-lg-5 border bg-light boo adst">
            <div class="ads" style="background-image:url('https://blog.printsome.com/wp-content/uploads/coca-cola-marketing.jpg');"></div>
        </div>
    </div>
    </div>
    <script src="/js/index.js?version=1"></script>
    <script src="/js/showmsgs.js?version=1"></script>
@endsection
