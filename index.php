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
        <link rel="stylesheet" href="web/css/style-login.css">
        <script type="text/javascript" src="web/js/nav_button.js"></script>

    </head>
    <body>
        <div class="log_container">
            <div id="topo-login">
                <header>
                    <img class="logo-img" src="web/images/logo-vila.png"
                    alt="Marca do teatro Vila Velha: um sol com um rosto simpático">
                </header>
            </div>
            <div class="borda-falsa borda-falsa-login"></div>
            <div class="login">
                <form action="home.php" method="post">
                    <fieldset id="field_n" class="rotulo">
                        <legend id="label_n">Login</legend>
                        <input class="reset" onclick="formLogin()" onfocus="formLogin()" type="text" value="" id="nome" placeholder="Nome de acesso">
                    </fieldset>
                    <fieldset id="field_e" class="rotulo">
                        <legend id="label_e">E-mail</legend>
                        <input class="reset" onclick="formEmail()" onfocus="formEmail()" type="email" value="" id="email" placeholder="endereço de e-mail">
                    </fieldset>
                    <fieldset id="field_s" class="rotulo">
                        <legend id="label_s">Senha</legend>
                        <input class="reset" onclick="formSenha()" onfocus="formSenha()" type="password" value="" id="senha" placeholder="senha: mínimo de 8 caracteres">
                    </fieldset>
                    <button class="botao botao-login" type="submit">Logar</button>
                    <button class="botao botao-cadastro" type="submit">Cadastrar</button>
                </form>
            </div>
                <div class="borda-falsa borda-falsa-login limpa"></div>
        </div>
    </body>
</html>