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

function verifPseudo(field) {
	if (field.value.length < 2 || field.value.length > 25 || field.value.length == "" ) {
		surligne(field, true);
	}
	else {
		surligne(field, false);
	}
}

myForm.addEventListener("submit", (e) => {
	e.preventDefault();
	verifPseudo(nom);
	verifPseudo(prenom);
	verifPseudo(age);
})