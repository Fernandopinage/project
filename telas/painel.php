<?php
require_once "../conection/conection.php";
$con = ConnectFactory::getConection();


?>
<html>

<head>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Adicionando Javascript -->

</head>

<body>
    <div class="area">

    </div>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="?p=add">
                    <i class="fa fa-laptop fa-2x"></i>
                    <span class="nav-text">
                        Novo Usuário
                    </span>
                </a>

            </li>


        </ul>

        <ul class="logout">
            <li>
                <a href="?p=logout">
                    <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text">
                        Logout
                    </span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="conteudo">

        <?php



        @$pagina = $_GET['p'];


        switch ($pagina) {
            case 'add':
                include_once '../telas/add.php';
                break;
            case 'logout':
                header('location:../telas/index.php');
                break;

            default:
                # code...
                break;
        }
        ?>


        <footer>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        </footer>

</body>

</html>