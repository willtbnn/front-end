<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="@jlbnunes" />
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="shortcut icon" href="assets/images//icons//Dreams-Capital-shout-one.png" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <title>Login - Dreams finance</title>
</head>
<body class="bg-light">
    <?php
        echo "<main class='container-fluid control-content'>";
        $url = (isset($_GET['url'])) ? $_GET['url']:'login.php';
        $url = array_filter(explode('/',$url));
    
        $file = $url[0].'.php';

        if(is_file($file)) {
            include $file;
        }else{
            include 'login.php';
        };
        echo "</main>";
    ?>
    <script type="text/javascript" src="assets/js/jquery-3.4.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
</html>