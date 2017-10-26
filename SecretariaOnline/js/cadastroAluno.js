function validaSubmit(){
	var form = document.getElementById('form_cadastro');
	
	var nome = document.getElementById('nome');
	var ra = document.getElementById('ra');
	var email = document.getElementById('email');
	var senha = document.getElementById('senha');
	var contato = document.getElementById('contato');	
	
	
	nome.value == "" ? nome.style.border = "1px solid red" : nome.style.border = "1px solid green";
	ra.value == "" ? ra.style.border = "1px solid red" : ra.style.border = "1px solid green";
	email.value == "" ? email.style.border = "1px solid red" : email.style.border = "1px solid green";
	senha.value == "" ? senha.style.border = "1px solid red" : senha.style.border = "1px solid green";
	contato.value == "" ? contato.style.border = "1px solid red" : contato.style.border = "1px solid green";
	
	if(nome.value != "" || ra.value != "" || email.value != "" || senha.value != "" || contato.value != "")
	
	form.submit();
	
}

function limpaText(item){	
	item.style.border = "";	
}