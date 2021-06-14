<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {% block head %}{% endblock %}
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="templates/home.css"/>
    
</head>
<body>
    

{% block header %}

{% include "header.twig.php" %}
{% endblock %}


<div class="container-fluid conteneur_body">

{% block body %}


{% endblock %}
</div>




{% block footer %}

{% include "footer.php" %}

{% endblock %}

    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="templates/home.js"></script>
    <script src="js/bootstrap.min.js"></script>            
</body>
</html> 
