<?php
    session_start();    
    //Unset the variables stored in session
    unset($_SESSION['SESS_MEMBER_ID']);
    unset($_SESSION['SESS_FIRST_NAME']);
    unset($_SESSION['SESS_LAST_NAME']);

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cv.css">
    <!-- <link rel="stylesheet" type="text/css" href="style1.css"> -->
    <link rel="stylesheet" type="text/css" href="include/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="include/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="include/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <title>CV DE FOTSO LIONEL</title>
</head>

<body>
    <div class="cv">
        <?php include('cvgauche_top.php'); ?>
        <?php include('cvgauche_bottom.php'); ?>

        <div class="cv_droit">
            <?php include('cvexperience.php'); ?>
            <?php include('cvdroit_milieux.php'); ?>
            <?php include('cursus_academique.php'); ?>
        </div>

    </div>

    <script src="include/js/jquery.js"></script>
    <script src="include/js/jquery.min.js"></script>
    <script src="include/js/bootstrap.min.js"></script>
    <script src="include/js/bootstrap.js"></script>
    <script src="btn.js"></script>
    
</body>

</html>