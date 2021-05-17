<?php
    require_once('../vendor/autoload.php');
    require_once('../app/config/config.php');
    require_once('../app/functions/functions.php');
    (new \app\core\RouterCore());
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8"> <!--conjunto de caracter com  os caracteres especiais do portugues brasil-->
        <!-- <link rel="stylesheet" type = "text/css" href="Css/style.css"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSS -->
        <link rel="stylesheet" type = "text/css" href="../../bootstrap337/Css/bootstrap.min.css">
        <link rel="stylesheet" type = "text/css" href="../../bootstrap337/Css/bootstrap-theme.min.css">

         <title>Criar arquivo CSV</title>
    </head>
    <body class="container">
        <header>
            <h1 class="text-center text-uppercase">Criar o Arquivo CSV da fatura do cartão do mês corrente</h1>
            <h2 class="text-center text-uppercase">BUSCAR ARQUIVO COM OS DADOS</h2>
        </header>
        <form method="post" action ="../app/model/criarcsvfaturacartao.php" enctype="multipart/form-data">
            <br>
            <label>Arquivo</label>
            <br>
            <input type="file" name="arquivoTxt"> <br><br>
            <input type="submit" value="buscar arquivo">
        </form>
    </body>
</html>