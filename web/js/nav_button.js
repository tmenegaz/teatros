
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

var run = function(nome, legenda, field){
  nome.style.border = "none";
	legenda.style.display = 'block';
	field.style.margin = '3.2vw';
  field.style.border = "1px solid #eeeeee";
  field.style.backgroundColor = "#fff";
};