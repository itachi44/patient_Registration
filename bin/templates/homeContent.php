<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    {% if data.prenom and data.nom %}
    <span>
    {{data.prenom}} {{data.nom}} a bien été enregistré dans la base.
    </span>
    <hr>
    <br>
    {% endif %}



    <span> Tous les patients </span> <br> <br>
    {% for patient in data.patients%}
        <span>nom : {{ patient.nom_patient }} </span>
        <span>prenom : {{ patient.prenom_patient }} </span>
        <span>age : {{ patient.age }} </span>
        <span>sexe : {{ patient.sexe }} </span>
        <br>
        <br>

    {% endfor %}
</body>
</html>