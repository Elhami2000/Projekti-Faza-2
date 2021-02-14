//deklarimi i userave manualisht:
/*var users = [
	{username: 'Elhami', password: 'elhami123'},
	{username: 'Valmiri', password: 'vali420'},
	{username: 'asd', password: 'asd'}
];

//Kod per regjistrim te userave
function shtoUser (users){
	var usernamer = document.getElementById('usernamer').value;
	var passwordr = document.getElementById('passwordr').value;
	users(username).push('usernamer');
	users(password).push('passwordr');
	var pval = "";

	for(i = 0; i < users.length; i++){
		pval = pval + users[i];
	}

	document.getElementById('usernamer').innerHTML = pval;
	document.getElementById('passwordr').innerHTML = pval;
	
	Kodi per regjistrim nuk punon...
}

//lol emri i id's tbutonit button-sing. NICE VALMIR!
var button = document.getElementById('button-sing');

button.onclick = function(){
	var name = document.getElementById('username').value;
	var pass = document.getElementById('password').value;
	var checkbox = document.getElementById('check');

	for (var i = 0; i<users.length; i++){
		if(name == "" && password == ""){
			alert('Please type your information here.');
			break;
		}
		else if(name == users[i].username  && pass == users[i].password && checkbox.checked == true){
			alert('Login successful');
			window.location.href = 'index.html';
			
			break;
		}
		else if(name == users[i].username  && pass == users[i].password && checkbox.checked == false){
			alert('Ju lutemi klikoni checkboxin te verifikoni se nuk jeni robot!');
			break;
		}
		/*while(!(name == users[i].username && pass == users[i].password)){
			i++;
			alert('asd');
			break;  kodi nuk punon
		}*/
		/*else if(name != users[i].username  && pass != users[i].password){
			alert('Email or password incorrect.');
		}
	}
}*/

/*function registerlogin (parameter){
	var forms = document.getElementsByClassName('formDiv');
	if(parameter == 0){
		forms[0].classList.remove("login");
		forms[0].classList.add("register");
		forms[1].classList.add("login");
		forms[1].classList.remove("register");
	}
	else {
		forms[1].classList.remove("login");
		forms[1].classList.add("register");
		forms[0].classList.add("login");
		forms[0].classList.remove("register");
	}
}
*/
function reglog (parameter){
	var forms = document.getElementsByClassName('registerlogin');
	if(parameter == 0){
		forms[0].classList.remove("login");
		forms[0].classList.add("register");
		forms[1].classList.add("login");
		forms[1].classList.remove("register");
	}
	else {
		forms[1].classList.remove("login");
		forms[1].classList.add("register");
		forms[0].classList.add("login");
		forms[0].classList.remove("register");
	}
}