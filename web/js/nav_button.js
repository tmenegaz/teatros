function funCad(){
  var escolha = document.getElementById("escolha");
  var cadastro = document.getElementById("cadastro");
  if(cadastro.style.display === "" || cadastro.style.display === "none"){
    cadastro.style.display = "block";
    escolha.style.display = "none";
  }
}

function funLogin(){
  var escolha = document.getElementById("escolha");
  var login = document.getElementById("login");
  if(login.style.display === "" || login.style.display === "none"){
    login.style.display = "block";
    escolha.style.display = "none";
  }
}

function funCancela(){
  var escolha = document.getElementById("escolha");
  var cadastro = document.getElementById("cadastro");
  var login = document.getElementById("login");
  if(cadastro.style.display === "block" || login.style.display === "block"){
    cadastro.style.display = "none";
    login.style.display = "none";
    escolha.style.display = "flex";
  }
}


function myFunction() {
  var nave = document.getElementById("nav");
  if (nave.style.display === "flex") {
    nave.style.display = "none";
  } else {
    nave.style.display = "flex";
  }
}

function resetDisplay(){
  var toggle_botao = document.getElementById("toggle_botao");
  var nave = document.getElementById("nav");
  var w = window.outerWidth > 900;
  if(w === true){
    nave.style.display = "flex";
    toggle_botao.style.display = "none";
  } else {
    toggle_botao.style.display = "block";
    myFunction();
  }

  if(w === false){
    nave.style.display = "none";
  }
}

function formLogin() {
  var field = document.getElementById("field_n");
  var legenda = document.getElementById("label_n");
  var nome = document.getElementById("nome");
  if(nome.value == "" || legenda.style.display == "none"){
    run(nome, legenda, field);
  }
}

function formLogin_l() {
  var field_l = document.getElementById("field_nl");
  var legenda_l = document.getElementById("label_nl");
  var nome_l = document.getElementById("nome_l");
  if(nome_l.value == "" || legenda_l.style.display == "none"){
    run(nome_l, legenda_l, field_l);
  }
}

function formCel() {
  var field = document.getElementById("field_t");
  var legenda = document.getElementById("label_t");
  var tel = document.getElementById("tel");
  if(tel.value == "" || legenda.style.display == "none"){
    run(tel, legenda, field);
  }
}

function formEmail() {
  var field = document.getElementById("field_e");
  var legenda = document.getElementById("label_e");
  var email = document.getElementById("email");
  if(email.value == "" || legenda.style.display == "none"){
    run(email, legenda, field);
  }
}

function formSenha() {
  var field = document.getElementById("field_s");
  var legenda = document.getElementById("label_s");
  var senha = document.getElementById("senha");
  if(senha.value == "" || legenda.style.display == "none"){
    run(senha, legenda, field);
  }
}

function formSenha_l() {
  var field_l = document.getElementById("field_sl");
  var legenda_l = document.getElementById("label_sl");
  var senha_l = document.getElementById("senha_l");
  if(senha_l.value == "" || legenda_l.style.display == "none"){
    run(senha_l, legenda_l, field_l);
  }
}

var run = function(nome, legenda, field){
  nome.style.border = "none";
	legenda.style.display = 'block';
	field.style.margin = '3.2vw';
  field.style.border = "1px solid #eeeeee";
  field.style.backgroundColor = "#fff";
};