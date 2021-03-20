<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="@jlbnunes" />
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images//icons//Dreams-Capital-shout-one.png" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <title>Painel de Controle - Dreams finance</title>
</head>
<body class="bg-light">
<nav class="navbar d-none d-md-block">
        <div class="nav border-end flex-column position-fixed pt-5 mt-0 active" data-menu="list" data-outside="">
            <div class="text-center">
                <div class="">
                    <img src="assets/images/icons/slogan-painel.png" width="170" height="90" alt="">
                </div>
            </div>
            <div data-menu="suave-mobile">
                <a href="home" class="nav-link text-gold mt-5 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-1x2" viewBox="0 0 16 16">
                    <path d="M6 1H1v14h5V1zm9 0h-5v5h5V1zm0 9v5h-5v-5h5zM0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm1 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1h-5z"></path>
                </svg>
                Painel de controle
                </a>
                <p class="nav-item dropdown" data-bs-toggle="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                        <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"></path>
                    </svg>
                    Financeiro
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="position: static !important;">
                    <a class="dropdown-item text-gold" href="wallet">Suas carteiras</a>
                    <a class="dropdown-item text-gold" href="shipping">Compr. de Depósito</a>
                    <a class="dropdown-item text-gold" href="withdrawal">Solicita retirada</a>
                    <a class="dropdown-item text-gold" href="extracted">Extrato</a>
                </div>
                </p>
                <a href="support" class="nav-link text-gold py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                    </svg>
                    Suporte / Tickets 
                </a>
            </div>
            <a href="shipping" class="btn btn-warning mt-auto mx-2">Confirma Depósito</a>
            <div class="bottom-menu px-5 py-5 border-top">
                <div class="row justify-content-between align-items-center">
                    <div class="col-1 col-md-2">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="#000" class="bi bi-bell" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="col-1 col-md-2">
                    <div class="btn-group dropup">
                        <span data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/images/Jorge_Nunes.jpg" alt="" class="rounded-circle border border-white img-fluid" style="max-width: 2.2rem;">
                        </span>
                        <div class="dropdown-menu">
                            <div class="border-bottom d-block text-center px-5">
                                <p class="text-secondary">Jorge Nunues</p>
                                <p class="text-muted">jlbnunes@live.com</p>
                            </div>
                            <a class="dropdown-item" href="configuration">
                                Configurações
                            </a>
                            <a class="dropdown-item" href="/inlogout">
                                Sair
                            </a>
                        </div>
                    </div>                       
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light d-sm-none d-sm-block">
        <div class="container-fluid">
            <div class="d-flex">
                <div class="btn-group">
                    <span data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/images//Jorge_Nunes.jpg" class="border rounded-circle" alt="" style="max-width:2.2rem;">
                    </span>
                    <div class="dropdown-menu">
                        <div class="border-bottom d-block text-center px-5">
                            <p class="text-secondary">Jorge Nunues</p>
                            <p class="text-muted">jlbnunes@live.com</p>
                        </div>
                        <a class="dropdown-item" href="configuration">
                            Configurações
                        </a>
                        <a class="dropdown-item" href="/inlogout">
                            Sair
                        </a>
                    </div>
                </div>
            </div>
            <a class="navbar-brand" href="#">
                <img src="assets/images/icons/slogan-painel-sm.png" width="170" height="100" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-1x2" viewBox="0 0 16 16">
                                <path d="M6 1H1v14h5V1zm9 0h-5v5h5V1zm0 9v5h-5v-5h5zM0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm1 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1h-5z"></path>
                            </svg>
                            Inicio
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                                <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"></path>
                            </svg> 
                            Financeiro
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="wallet">Suas carteiras</a></li>
                        <li><a class="dropdown-item" href="shipping">Compr. de Depósito</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="withdrawal">Solicita retirada</a></li>
                        <li><a class="dropdown-item" href="extracted">Extrato</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="support" class="nav-link text-gold py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                            </svg>
                            Suporte / Tickets
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
        echo "<main class='container-fluid control-content'>";
        $url = (isset($_GET['url'])) ? $_GET['url']:'home.php';
        $url = array_filter(explode('/',$url));
    
        $file = $url[0].'.php';

        if(is_file($file)) {
            include $file;
        }else{
            include 'home.php';
        };
        echo "</main>";
    ?>
    <script type="text/javascript" src="assets/js/jquery-3.4.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="module" src="assets/js/script.js"></script>
</body>
</html>