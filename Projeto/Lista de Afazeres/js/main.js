document.addEventListener('DOMContentLoaded', function(){
	console.log("Funcionando");

     document.getElementById("buttomSave").onmouseclick = createRecordatorio;
});



function validarTexto(texto){
      if(texto == null || texto == "" || texto.lenght < 1){
      	return false;
      } else{
      	return true;
      }
}



function mostrarError() {
	var html = "";
	html += '<div class="alert alert-danger" role="alert">';
	html += 'Por Favor, adicione algo';
	html += '</div>';

	document.getElementById('error').innerHTML = html;
}




function limparError() {
	document.getElementById("error").innerHTML = "";
}

function createRecordatorio() {
	var conteudoTextArea = document.getElementById("texto").value;
	if(!conteudoTextArea){
      mostrarError();
      return;
	}

	limparError();
}