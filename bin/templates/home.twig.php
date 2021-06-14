{% extends "baseTemplate.twig.php" %}

{% block head %}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="templates/gallery.css">
<link rel="stylesheet" href="templates/home.css">
<title>test</title>
{% endblock %}

{% block body %}

<p>Yoroshiku onegaishimaaas</p>

{% for patient in data.patients %}
    <span> id patient : {{ patient.id_patient }} </span>
    <span> nom patient : {{ patient.nom_patient }} </span>
    <span> prenom patient:  {{ patient.prenom_patient }} </span>
    <span> age: {{ patient.age }}</span>
    <span> sexe: {{ patient.sexe }}</span>
    </br>




{% endfor %}

{% endblock %}


