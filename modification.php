<?php
    session_start();
    $id= $_REQUEST['id'];
    $profil=$id= $_REQUEST['profil'];
    $_SESSION["ID"]=$id;

    if($_SESSION["ID"] != " "){
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cv.css">
    <!-- <link rel="stylesheet" type="text/css" href="style1.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="include/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="include/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="include/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="container" style="margin-top:8%;background-color:#C5F1FB;">
        <ul class="nav nav-tabs" style="font-size:15px;" align="center">
            <li class="active"><a class="" href="#profil">Profile</a></li>
            <li><a class="" href="#expe">Expérience</a></li>
            <li><a class="" href="#point">Point D'interet</a></li>
            <li><a class="" href="#lang">Langue</a></li>
            <li><a class="" href="#curs">Cursus</a></li>
            <li><a class="" href="#comp">Compétence</a></li>
        </ul>
        <div class="tab-content" style="">
            <div id="profil" class="tab-pane active">
                <?php require 'modif/profile.php'; ?>
            </div>
            <div id="expe" class="tab-pane">
                <?php require 'modif/experience1.php'; ?>
            </div>
            <div id="point" class="tab-pane">
                <h3>Menu1</h3>
                <p>Bienvenue point d'interet</p>
            </div>
            <div id="lang" class="tab-pane">
                <h3>Menu1</h3>
                <p>Bienvenue langue</p>
            </div>
            <div id="curs" class="tab-pane">
                <?php require 'modif/cursus.php'; ?>
            </div>
            <div id="comp" class="tab-pane">
                <?php require 'modif/competence.php'; ?>
            </div>
        </div>
    </nav>




    <script src="include/js/jquery.js"></script>
    <script src="include/js/jquery.min.js"></script>
    <script src="include/js/bootstrap.min.js"></script>
    <script>
    $('a').click(function(e) {
        e.preventDefault()
        $(this).tab('show')
    }).on('shown.bs.tab', function(e) {
        $('#actif').text($(e.target).text())
        $('#precedent').text($(e.relatedTarget).text())
    });
    </script>
</body>

</html>
<?php
    }else{
        echo "session null";
    }
?>