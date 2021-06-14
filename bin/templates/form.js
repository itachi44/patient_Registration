let myForm = document.getElementById("IdForm");
let nom = document.getElementById("nom");
let prenom = document.getElementById("prenom");
let age = document.getElementById("age");

function surligne(field, error) {
	if (error) {
		field.style.backgroundColor = "#fba";
	}
	else {
		field.style.backgroundColor = "";
	}
}

function verifNom(field) {
	if (field.value.length < 2 || field.value.length > 25 || field.value == "" ) {
		surligne(field, true);
		return false;
	}
	else {
		surligne(field, false);
		return true;

	}
}

function verifPrenom(field) {
	if (field.value.length < 2 || field.value.length > 25 || field.value == "" ) {
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


myForm.addEventListener("submit",(e) =>{
	if (verifNom(prenom)==false && verifPrenom(nom)==false && verifAge(age)==false) {
		e.preventDefault();
	}

});