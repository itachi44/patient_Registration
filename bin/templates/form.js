let myForm = document.getElementById("btn");
let nom = document.getElementById("nom");
let prenom = document.getElementById("prenom");
let age = document.getElementById("age");
let regex = new RegExp ("^[a-zA-Zç .-]{0,}$");

function surligne(field, error) {
	if (error) {
		field.style.backgroundColor = "#fba";
	}
	else { 
		field.style.backgroundColor = "";
	}
}

function verifFullName(field) {
	if (!regex.test(field.value) || field.value.length < 2 || field.value.length > 25 || field.value == "") {
		surligne(field, true);
		return false;
	}
	else {
		surligne(field, false);
		return true;

	}
}



function verifAge(field) {
	if (field.value <= 1 || field.value >= 100 || field.value == "" ) {
		surligne(field, true);
		return false;
	}
	else {
		surligne(field, false);
		return true;

	}
}

nom.addEventListener("change",(e) => {
	surligne(nom, false);
})


prenom.addEventListener("change",(e) => {
	surligne(prenom, false);
})

age.addEventListener("change",(e) => {
	surligne(age, false);
})




myForm.addEventListener("click",(e) =>{
	if (verifFullName(prenom)==false || verifFullName(nom)==false || verifAge(age)==false)
		e.preventDefault();
});

window.addEventListener("keypress",(e) => {
	surligne(prenom, false);
	surligne(nom, false);
	surligne(age, false);
})


