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
        <style>

            #escolha{
                display: flex;
                visibility: visible;
                justify-content: space-evenly;
                flex-wrap: wrap;
            }
            #escolha .botao{
                margin-top: 2vw;
            }

        </style>

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
<!-- laravel 03399005730020451677743276701018682380000002599 -->

            <div id="cadastro" class="form-in">
                <form action="home.php" id="form_cad" method="post">
                    <fieldset id="field_n" class="rotulo">
                        <legend id="label_n">Login</legend>
                        <input class="reset" onclick="formLogin()" onfocus="formLogin()" type="text" value="" id="nome" placeholder="Nome completo">
                    </fieldset>
                    <fieldset id="field_t" class="rotulo">
                        <legend id="label_t">Celular</legend>
                        <input class="reset" onclick="formCel()" onfocus="formcel()" type="tel" value="" id="tel" placeholder="Telefone celular" maxlength="10">
                    </fieldset>
                     <fieldset id="field_e" class="rotulo">
                        <legend id="label_e">E-mail</legend>
                        <input class="reset" onclick="formEmail()" onfocus="formEmail()" type="email" value="" id="email" placeholder="Endereço de e-mail">
                    </fieldset>
                    <fieldset id="field_s" class="rotulo">
                        <legend id="label_s">Senha</legend>
                        <input class="reset" onclick="formSenha()" onfocus="formSenha()" type="password" value="" id="senha" placeholder="Senha: mínimo de 8 caracteres">
                    </fieldset>
                    <button class="botao botao-cancela" type="button" form="escolha" onclick="funCancela()">Cancelar</button>
                    <button class="botao botao-acao" type="submit">Cadastrar</button>

                </form>
            </div>


            <div id="login" class="form-in">
                <form action="home.php" method="post">
                    <fieldset id="field_nl" class="rotulo">
                        <legend id="label_nl">Login</legend>
                        <input class="reset" onclick="formLogin_l()" onfocus="formLogin_l()" type="text" value="" id="nome_l" placeholder="Telefone celular ou E-mail">
                    </fieldset>
                    <fieldset id="field_sl" class="rotulo">
                        <legend id="label_sl">Senha</legend>
                        <input class="reset" onclick="formSenha_l()" onfocus="formSenha_l()" type="password" value="" id="senha_l" placeholder="Senha: mínimo de 8 caracteres">
                    </fieldset>
                    <button class="botao botao-cancela" type="button" form="escolha" onclick="funCancela()">Cancelar</button>
                    <button class="botao botao-acao" type="submit">Logar</button>
                </form>
            </div>


            <div id="escolha" class="form-in">
                    <button autofocus="true" onclick="funCad()" class="botao bt-escolha" type="button" form="form_cad">Cadastrar</button>
                    <button onclick="funLogin()" class="botao bt-escolha" type="button">Entrar</button>
            </div>

            <div class="borda-falsa borda-falsa-login limpa"></div>

        </div>

    </body>
</html>