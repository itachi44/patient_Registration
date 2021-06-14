{% extends "baseTemplate.twig.php" %}

{% block head %}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Formulaire d'enregistrement Institut Pasteur Dakar</title>

    <!-- Icons font CSS-->
    <link href="templates/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="templates/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="templates/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="templates/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="templates/style.css" rel="stylesheet" media="all">
{% endblock %}

{% block body %}
<style>
.valid{
    background-color:green;
}
.invalid{
    background-color:red;
}
</style>

    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h1 class="title">Formulaire d'inscription</h1>
                    <form id="IdForm" method="POST" action="controller.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Prénom</label>
                                    <input id="prenom" class="input--style-4" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nom</label>
                                    <input id="nom" class="input--style-4" type="text" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Age (en année)</label>
                                    <div class="input-group-icon">
                                        <input id="age" class="input--style-4" type="text" name="Age">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Sexe</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Masculin
                                            <input type="radio" checked="checked" value="m" name="sexe">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Feminin
                                            <input type="radio" value="f" name="sexe">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--green" id="submit"  type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="templates/form.js"></script>
    <script src="templates/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="templates/vendor/select2/select2.min.js"></script>
    <script src="templates/vendor/datepicker/moment.min.js"></script>
    <script src="templates/vendor/datepicker/daterangepicker.js"></script>


<!-- end document-->

{% endblock %}


