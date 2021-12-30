

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cv.css">
    <!-- <link rel="stylesheet" type="text/css" href="style1.css"> -->
    <link rel="stylesheet" type="text/css" href="include/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="include/bootstrap.min.css">
    <link rel="stylesheet" href="btn.css">
    <link rel="stylesheet" type="text/css" href="include/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="share">
        <ol>
            <!--li><a href="#"><i class="fab fa-instagram fa-2x"></i></a></li-->
            <li><a id="mBtn"><i class="fa fa-edit"></i></a></li>
            <li><a id="myBtn"><i class="fa fa-paper-plane"></i></a></li>
            <li><a href="action/print.php"><i class="fa fa-print"></i></a></li>
        </ol>
        <div class="toggle"></div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color:#015f9f">
                    <button type="button" style="color:white" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color:white;text-align:center;font-size:25px;">Email du Destinataire
                    </h4>
                </div>
                <form method="post" action="action/mail_p.php">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="mail" class="form-control" name="email"
                                placeholder="Veuillez entrez l'adresse mail du Destinataire">
                        </div>
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-3"><button type="submit"
                                    class="form-control btn btn-success">Envoye</button></div>
                            <div class="col-sm-3"><button type="button" class="form-control btn btn-danger"
                                    data-dismiss="modal">Close</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="mModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color:#015f9f">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color:white;text-align:center;font-size:25px;">
                        <em><b>AUTHENTIFICATION</b></em></h4>
                </div>
                <div class="modal-body">
                    
                        <div class="col-sm-12">
                            <form method="POST" action="action/btnAction.php">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h4 style="color:black;"><b>Nom d'utilisateur :</b></h4>
                                    </div>
                                    <div class="col-sm-8"><input type="text" class="form-control" name="login"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h4 style="color:black;"><b>Mot De Passe :</b></h4>
                                    </div>
                                    <div class="col-sm-8"><input type="password" class="form-control" name="password"></div>
                                </div>
                                <div style="height:13px"></div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-3"><button type="submit" name="connexion" class="form-control btn btn-success">Se
                                            connecter</button></div>
                                    <div class="col-sm-3"><button type="button" class="form-control btn btn-danger"
                                            data-dismiss="modal">Close</button></div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12">
                            <hr>
                        </div>
                    <a id="miBtn">
                        <h4 style="text-align:center;font-size:20px">S'enregistrer</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="miModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color:#015f9f">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color:white;text-align:center;font-size:25px;">
                        <em><b>ENREGISTREMENT</b></em></h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="action/btnAction.php">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h4 style="color:black;"><b>Nom d'utilisateur :</b></h4>
                                </div>
                                <div class="col-sm-8"><input type="text" class="form-control" name="user1"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h4 style="color:black;"><b>Mot De Passe :</b></h4>
                                </div>
                                <div class="col-sm-8"><input type="password" class="form-control" name="pass1" id="pass1"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h4 style="color:black;"><b>Confirme :</b></h4>
                                </div>
                                <div class="col-sm-8"><input type="password" class="form-control" name="passc1" id="passc1"
                                        placeholder='Confirmer votre Mot De Passe'></div>
                            </div>
                            <div style="height:13px"></div>
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"><button type="submit" name="adduser" class="form-control btn btn-success">Enregistrer</button></div>
                                <div class="col-sm-3"><button type="button" class="form-control btn btn-danger"
                                        data-dismiss="modal">Close</button></div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <hr>
                        </div>
                    </form>
                    <a id="Btn">
                        <h4 style="text-align:center;font-size:20px">Se connecter</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/jquery.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="btn.js"></script>
    <script>
    $(document).ready(function() {
        $("#myBtn").click(function() {
            $("#myModal").modal();
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $("#mBtn").click(function() {
            $("#mModal").modal();
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $("#miBtn").click(function() {
            $("#mModal").modal('hide');
            $("#miModal").modal();
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $("#Btn").click(function() {
            $("#miModal").modal('hide');
            $("#mModal").modal();
        });
    });
    </script>
</body>

</html>


