
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

    <!--button id="collapse-in" class="btn btn-primary" style="border-radius:50px;font-size:20px">+</button-->
    <br><br>
    <div class="panel-group" id="accordions">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title" data-toggle="collapse" data-target="#colOne">Compétences Acquises<span style="margin-top:-10px;" class="btn pull-right" id="plu">+</span><span style="margin-top:-10px;" class="btn pull-right" id="croi">x</span> </h4>
            </div>
            <div id="colOne" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                    <form method="post" action="">
                        <div class='row'>
                            <div class="col-lg-3"><h4 style="font-size:15px;"><b>Nom de La Compétence :</b></h4></div>
                            <div class="col-lg-8"><input type="text" name="nomcomp" class="form-control"></div>
                        </div>
                        <div class='row'>
                            <div class="col-lg-3"><h4 style="font-size:15px;"><b>Niveau De compétence  :</b></h4></div>
                            <div class="col-lg-8"><input type="number" name="nveau" class="form-control" placeholder="Entrer un nombre comprise entre 0 et 100"></div>
                        </div>
                        <div class='row'>
                            <div class="col-lg-3"><h4 style="font-size:15px;"><b>Element de Compétence :</b></h4></div>
                            <div class="col-lg-8"><textarea class="form-control" name="elemtcomp" rows="3"></textarea></div>
                        </div>
                        <br><br>
                        <div class='row'>
                            <div class="col-lg-4"> </div>
                            <div class="col-lg-4"><input class="form-control btn-success" type="submit" name="addComp" value="Ajouter Une Nouvelle Compétence"></div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <!--div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title" data-toggle="collapse" data-target="#collapseTwo">Collapsible Group Item #2 </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    Salazar est partie au marche
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title" data-toggle="collapse" data-target="#collapseThree">Collapsible Group Item #3 </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    mood mode 
                </div>
            </div>
        </div-->
    </div>

    

        <script src="include/js/jquery.js"></script>
        <script src="include/js/jquery.min.js"></script>
        <script src="include/js/bootstrap.min.js"></script>
        <script>
            $(function(){
                var active=true;
                $('#collapse-in').click(function(){
                    if(active){
                        active=false;
                        $('.panel-collapse').collapse('show');
                        $('.panel-title').attr('data-toggle','');
                        $(this).text('Enabled');
                    }else{
                        active=true;
                        $('.panel-collapse').collapse('hide');
                        $('.panel-title').attr('data-toggle','collapse');
                        $(this).text('Disabled');
                    }
                });

                $('#accordions').on('show.bs.collapse',function(){
                    if(active) $('#accordions .in').collapse('hide');
                });
            });
        </script>
</body>

</html>