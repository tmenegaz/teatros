function myFunction() {
              var nave = document.getElementById("nav");
              if (nave.style.display === "flex") {
                nave.style.display = "none";
              } else {
                nave.style.display = "flex";
              }
            }

function formLogin() {
              var field = document.getElementById("field_n");
              var legenda = document.getElementById("label_n");
              var nome = document.getElementById("nome");
              run(nome, legenda, field);
            }

function formEmail() {
  var field = document.getElementById("field_e");
  var legenda = document.getElementById("label_e");
  var email = document.getElementById("email");
  run(nome, legenda, field);
}

function formSenha() {
              var field = document.getElementById("field_s");
              var legenda = document.getElementById("label_s");
              var senha = document.getElementById("senha");
run(nome, legenda, field);
            }

var run = function(nome, legenda, field){
	if(nome.value == "" || legenda.style.display == "none"){
                nome.style.border = "none";
              	legenda.style.display = 'block';
              	field.style.margin = '3.2vw';
                field.style.border = "1px solid #eeeeee";
                field.style.backgroundColor = "#fff";
              }
          };