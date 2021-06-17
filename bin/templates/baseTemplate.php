<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {% block head %}{% endblock %}
    
</head>
<body>
    

{% block header %}

{% include "header.php" %}
{% endblock %}


<div class="container-fluid conteneur_body">

{% block body %}


{% endblock %}
</div>




{% block footer %}

{% include "footer.php" %}

{% endblock %}

</body>
</html> 
