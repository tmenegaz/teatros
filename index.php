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
        <link rel="stylesheet" href="web/css/style1.css">
        <script type="text/javascript" src="web/js/nav_button.js"></script>
        <style>
        html,
        body {
        padding: 0;
        margin: 0;
        background-color: #ebebeb;
        box-sizing: border-box;
        font-family: dinotcondregular,"Open Sans", sans-serif, Helvetica;
        }
        img {
        width: 55%;
        margin-left: 2.3vw;
        }
        /* média query */
@media only screen and (min-width: 260px) {
        .log_container {
        display: flex;
        margin-left: 5vw;
        margin-right: 5vw;
        padding: 0 5vw;
        box-sizing: border-box;
        flex-direction: column;
        background: #fff;
        padding-bottom: 5vw;
        }

        .login{
        background-color: #ebebeb;
        padding: 2vw;
        }

        .rotulo{
        padding: 5px;
        border: none;
        transition: all 1s;
        margin: 4vw;
        background: #fff;
        }
        #label_n, #label_e, #label_s{
        display: none;
        }
        .reset{
        border: none;
        height: 5vw;
        padding-left: 1vw;
        background: #fff;
        width: 95%;
        }

        .reset:focus{
            outline:  none;
        }

        .botao:hover{
            background: #fff;
        }

        .botao {
        float: right;
        padding: 3vw;
        margin-right: 3.6vw;
        margin-top: 4vw;
        margin-bottom: 2vw;
        border: none;
        text-transform: uppercase;
        border: 1px solid #eeeeee;
        }

        .limpa{
            clear: both
        }
}

@media only screen and (min-width: 901px) {
    #topo{
            width: 54vw;
        align-self: center;
        }
        .login{
        width: 50vw;
        align-self: center;
        }
        .borda-falsa {
            width: 54vw;
        align-self: center;
        }
}

        /* config para a borda que separa o content do footer */
        .borda-falsa {
        height: .16rem;
        background: #fff;
        background: linear-gradient(to right, #910011 100%,#e2001b 0%,#910011 20%);
        animation-name: borda-falsa;
        animation-duration: .5s;
        animation-iteration-count: infinite;
        }

        @keyframes borda-falsa {
        0% {background: linear-gradient(to right, #910011 100%,#e2001b 0%,#910011 20%);}
        20% {background: linear-gradient(to right, #910011 0%,#e2001b 20%,#910011 40%);}
        40% {background: linear-gradient(to right, #910011 20%,#e2001b 40%,#910011 60%);}
        65% {background: linear-gradient(to right, #910011 40%,#e2001b 60%,#910011 80%);}
        80% {background: linear-gradient(to right, #910011 60%,#e2001b 80%,#910011 100%);}
        100% {background: linear-gradient(to right, #910011 80%,#e2001b 100%,#910011 0%);}
        }
        /* /config */
        </style>

    </head>
    <body>
        <div class="log_container">
            <div id="topo">
                <header>
                    <img src="web/images/logo-vila.png"
                    alt="Marca do teatro Vila Velha: um sol com um rosto simpático">
                </header>
            </div>
            <div class="borda-falsa"></div>
            <div class="login">
                <form action="home.php" method="post">
                    <fieldset id="field_n" class="rotulo">
                        <legend id="label_n">Login</legend>
                        <input class="reset" onclick="formLogin()" onfocus="formLogin()" type="text" value="" id="nome" placeholder="Nome de acesso">
                    </fieldset>
                    <fieldset id="field_e" class="rotulo">
                        <legend id="label_e">E-mail</legend>
                        <input class="reset" onclick="formEmail()" onfocus="formEmail()" type="text" value="" id="email" placeholder="endereço de e-mail">
                    </fieldset>
                    <fieldset id="field_s" class="rotulo">
                        <legend id="label_s">Senha</legend>
                        <input class="reset" onclick="formSenha()" onfocus="formSenha()" type="text" value="" id="senha" placeholder="senha: mínimo de 8 caracteres">
                    </fieldset>
                    <input class="botao" type="submit" name="cadastro"   value="Cadastrar">
                </form>
            </div>
                <div class="borda-falsa limpa"></div>
        </div>
    </body>
</html>