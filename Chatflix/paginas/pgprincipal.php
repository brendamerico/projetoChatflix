<?php
session_start();
$_SESSION["email"] = "Técnico em Informática";
$_SESSION[""] = "IFPR Paranavaí";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatflix</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="hero">
            <div class="header">
                <div class="logo">
                    <img src="img//5feedb273569cbb247f902f873f94342.png" alt="">
                </div>
                <div class="menu">
                    <!--Menu left-->
                    <div class="menu-left">
                        <ul>
                            <li>Início</li>
                            <li>Séries</li>
                            <li>Filmes</li>
                            <li>Recentes</li>
                            <li>Minha lista</li>
                        </ul>
                    </div>
                    <!--Fim do menu left-->

                    <!--Menu right-->
                    <div class="menu-right">
                        <ul>
                            <li> <i class="fas fa-search"></i> </li>
                            <li>Infantil</li>
                            <li> <i class="fas fa-gift"></i> </li>
                            <li> <i class="fas fa-bell"></i> </li>
                            <li class="user">
                                <img src="img/user.png" alt="">
                                <i class="fas fa-sort-down"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--Fecha menu-->
            </div>
            <!--Fecha header-->

            <!--Banner-->
            <div class="banner">
                <img src="img/banner.jpg" class="poster" alt="">
                <span class="subtitle">

                </span>
                <div class="buttons">
                    <button class="btn"> <i class="fas fa-play"></i> Assistir </button>
                    <button class="btn"> <i class="fas fa-plus"></i> Minha Lista </button>
                </div>
            </div>
            <!--Fechamento do banner-->

            <!--Categorias-->
            <div class="category">
                <span>Recomendados</span>
                <div class="slider">
                    <div class="movie">
                        <img src="img/video_001.jpg" alt="">
                    </div>
                    <div class="movie">
                        <img src="img/video_002.jpg" alt="">
                    </div>
                    <div class="movie">
                        <img src="img/video_003.jpg" alt="">
                    </div>
                    <div class="movie">
                        <img src="img/video_004.jpg" alt="">
                    </div>
                    <div class="movie">
                        <img src="img/video_005.jpg" alt="">
                    </div>
                    <div class="movie">
                        <img src="img/video_006.jpg" alt="">
                    </div>
                </div>
            </div>


            <div class="category">
                <span>Top Movies</span>
                <div class="slider">
                    <div class="movie">
                        <img src="img/video_006.jpg" alt="">
                    </div>
                    <div class="movie">
                        <img src="img/video_005.jpg" alt="">
                    </div>
                    <div class="movie">
                        <img src="img/video_004.jpg" alt="">
                    </div>
                    <div class="movie">
                        <img src="img/video_003.jpg" alt="">
                    </div>
                    <div class="movie">
                        <img src="img/video_002.jpg" alt="">
                    </div>
                    <div class="movie">
                        <img src="img/video_001.jpg" alt="">
                    </div>
                </div>
            </div>
            <!--Fechamento das categorias-->


            <!--Footer-->
            <div class="footer">
                <div class="social">
                    <i class="fas fa-facebook-square"></i>
                    <i class="fas fa-instagram"></i>
                    <i class="fas fa-twitter"></i>
                    <i class="fas fa-youtube"></i>
                </div>
                <!--Fechamento sociais-->

                <div class="flex">
                    <div class="info">
                        <ul>
                            <li>Idioma e Legendas</li>
                            <li>Privacidade</li>
                            <li>Entre em contato</li>
                            <li>Cadastre seu filme</li>
                        </ul>
                    </div>
                    <div class="info">
                        <ul>
                            <li>Idioma e Legendas</li>
                            <li>Privacidade</li>
                            <li>Entre em contato</li>
                            <li>Cadastre seu filme</li>
                        </ul>
                    </div>
                    <div class="info">
                        <ul>
                            <li>Idioma e Legendas</li>
                            <li>Privacidade</li>
                            <li>Entre em contato</li>
                            <li>Cadastre seu filme</li>
                        </ul>
                    </div>


                </div>
            </div>

        </div>
    </div>
</body>

</html>