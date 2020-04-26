<?php

header('Content-Type: text/html; charset=utf-8');

require 'vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vila Co(n)vit(e)</title>
        <link rel="stylesheet" href="web/css/style.css">
        <script type="text/javascript" src="web/js/nav_button.js"></script>
    </head>
    <body onresize="resetDisplay()">

        <div id="container">
            <!-- header -->
            <div id="topo">
                <img class="logo-img" src="web/images/logo-vila.png"
                    alt="Marca do teatro Vila Velha: um sol com um rosto simpático">
                <a class="toggle" id="toggle_botao" href="javascript:void(0);" onclick="myFunction()"><i class="icon" ></i></a>
                <ul id="nav" class="menu-list">
                    <li class="item"><a href="#">Conta</a></li>
                    <li class="item"><a href="#">Doação</a></li>
                    <li class="item"><a href="index.php">Sair</a></li>
                </ul>
            </div>
            <!-- /header -->
            <!-- content -->
            <main id="main-content">
                <section id="title">
                    <div class="borda-falsa"></div>
                    <h1>Formas de ajudar</h1>
                </section>
                <section id="content">
                    <div  class="card">
                        <h3>Doação em Dinheiro</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Enim eaque exercitationem rerum consequatur aliquam illo
                            ullam nesciunt quas aliquid, minus, illum, voluptas ad?
                        Ducimus, cupiditate molestiae tenetur reiciendis debitis ut.</p>
                        <button class="botao" type="submit" value="">DOAR</button>
                    </div>

                    <div class="card">
                        <h3>Doação de produto/serviço</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Enim eaque exercitationem rerum consequatur aliquam illo
                            ullam nesciunt quas aliquid, minus, illum, voluptas ad?
                        Ducimus, cupiditate molestiae tenetur reiciendis debitis ut.</p>
                        <button class="botao" type="submit" value="">DOAR</button>
                    </div>

                    <div class="card">
                        <h3>Comprar produto/serviço</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Enim eaque exercitationem rerum consequatur aliquam illo
                            ullam nesciunt quas aliquid, minus, illum, voluptas ad?
                        Ducimus, cupiditate molestiae tenetur reiciendis debitis ut.</p>
                        <button class="botao" type="submit" value="">LOJA</button>
                    </div>
                    <div class="borda-falsa limpa"></div>
                </section>
            </main>
            <!-- /content -->
            <!-- footer -->
            <footer id="footer">
                <div>
                    <ul>
                        <li class="item">Ajuda</li>
                        <li class="item">Sobre</li>
                    </ul>
                </div>
            </footer>
            <!-- /footer -->
        </div>
    </body>
</html>