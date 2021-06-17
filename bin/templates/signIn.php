{% extends "baseTemplate.php" %}

{% block head %}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Formulaire d'enregistrement Institut Pasteur de Dakar</title>

    <!-- Icons font CSS-->
    <link href="templates/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="templates/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <!-- <link href="templates/vendor/select2/select2.min.css" rel="stylesheet" media="all"> -->
    <!-- Main CSS-->
    <link href="templates/style.css" rel="stylesheet" media="all">


{% endblock %}

{% block body %}
<div style="background-image:url('templates/images/aida.png'); ">
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body" style="box-shadow: 14px 10px 30px rgba(0, 0, 0, 0.41);">
                    <h1 class="title">Formulaire d'inscription</h1>
                    <form method="POST" action="home.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Prénom</label>
                                    <input id="prenom" class="input--style-4 prenom" type="text"  name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nom</label>
                                    <input id="nom" class="input--style-4 nom" type="text" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Age (en année)</label>
                                    <div class="input-group-icon">
                                        <input id="age" class="input--style-4 age" type="number" min="1" name="Age">
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
                            <button class="btn btn--radius-2 btn--green" id="btn" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- JS-->
    <script src="templates/form.js"></script>



<!-- end document-->

{% endblock %}


