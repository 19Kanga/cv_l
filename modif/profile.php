<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" type="text/css" href="style1.css"> -->
        <link rel="stylesheet" type="text/css" href="include/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="include/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="include/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<body>
    <div class="col-lg-12">
        <br>
        <div class="row">
        <form method="post" action="action/btnAction.php" enctype="multipart/form-data">
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-10"><input class="form-control" name="idc" value="<?= $profil; ?>" type="hidden"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-4" style="font-size:13px;margin-top:10px"><label>Nom :</label></div>
                            <div class="col-lg-8"><input type="text" name="nom" class="form-control"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-4" style="font-size:13px;margin-top:10px"><label>Ville de residence :</label></div>
                            <div class="col-lg-8"><input type="text" name="ville" class="form-control"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-4" style="font-size:13px;margin-top:10px"><label>Prénom :</label></div>
                            <div class="col-lg-8"><input type="text" name="prenom" class="form-control"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-4" style="font-size:13px;margin-top:10px"><label>Pays de residence :</label></div>
                            <div class="col-lg-8"><input type="text" name="pays" class="form-control"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-4" style="font-size:13px;margin-top:10px"><label>Statut :</label></div>
                            <div class="col-lg-8"><input type="text" name="statut" class="form-control" placeholder="ex: etudiant"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-4" style="font-size:13px;margin-top:10px"><label>Téléphone :</label></div>
                            <div class="col-lg-8"><input type="tel" name="tel" class="form-control"></div>
                        </div>
                    </div>
                </div> 
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-4" style="font-size:13px;margin-top:10px"><label>Date de Naissance :</label></div>
                            <div class="col-lg-8"><input type="date" name="daten" class="form-control"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-4" style="font-size:13px;margin-top:10px"><label>Type Telephone:</label></div>
                            <div class="col-lg-8">
                                <select name="typetel" class="form-control" multiple="oui" style="height:35px">
                                    <option value="Mobile">Mobile</option>
                                    <option value="Whatsapp">Whatsapp</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Viber">Viber</option>
                                    <option value="Autre">Autres</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-4" style="font-size:13px;margin-top:10px"><label>Statut Matrimonial :</label></div>
                            <div class="col-lg-8">
                                <select name="stmt" class="form-control">
                                    <option value="Célibataire">Célibataire</option>
                                    <option value="Marié">Marié</option>
                                    <option value="Autre">Autres</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-4" style="font-size:13px;margin-top:10px"><label>Email :</label></div>
                            <div class="col-lg-8"><input type="mail" name="email" class="form-control"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-4" style="font-size:13px;margin-top:10px"><label>Residence :</label></div>
                            <div class="col-lg-8"><input type="text" name="residence" class="form-control"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-4" style="font-size:13px;margin-top:10px"><label>Type Mail :</label></div>
                            <div class="col-lg-8">
                                <select name="typemail" class="form-control" multiple="oui" style="height:35px">
                                    <option value="Google+">Google+</option>
                                    <option value="Gmail">Gmail</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Github">Github</option>
                                    <option value="Autre">Autres</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-2" style="font-size:13px;margin-top:10px"><label>Profile Image :</label> </div>
                            <div class="col-lg-10"><input class="form-control" name="imag" type="file"></div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class='row'>
                    <div class="col-lg-4"> </div>
                    <div class="col-lg-4"><input class="form-control btn-success" type="submit" name="addProfil" value="Enregistrer le Profile"></div>
                </div>
            </div>
        </form>
        </div>
    </div>
</body>
</html>