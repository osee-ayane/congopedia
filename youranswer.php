<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="bootstrap-4.0.0/dist/js/jquery-1.9.1.min.js"></script>
    <link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.css">
    <script src="bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="boot3/css/mycss.css">
</head>
<body>
    <div class="bloc_page">
        <div class="container" id="allhead">
             <div class="row" id="navbar">
                    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
                        <?php include "header_read.php";?>
                    </nav>
                </div><br><br><br><br><br><br><br><br>
            <hr>
            <aside>
                <div class="row" id="contenu">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="result_ad">
                       <h2 style="color: rgb(92, 209, 254);"></h2><br>
                        <div class="row">
                            <div class="col-xs-10 col-xs-11">
                                    <!-- Affichage livre automatiquement -->
                                            <?php
                                                        // recherche plaque
                                                            if(!empty($_SESSION['otitre'])){
                                                                    echo '<a href="'.$_SESSION['lien'].'" id="pop" data-toggle="popover" data-content="'.$_SESSION['resume'].'" title="'.$_SESSION['otitre'].'" class="thumbnail">';
                                                                    echo '<img src="'.$_SESSION['image'].'" alt="livrepdf" class="img-rounded"><form action="lecturelivre.php" method="POST"><input type="button" name="lirebtn" value="Lire"></form>';
                                                                    echo '<a href="#" class="card-title">'.$_SESSION['otitre'].'</a><br>';
                                                                    echo '<a href="#" class="card-body">
                                                                        Auteur : '.$_SESSION['auteur'].' '.$_SESSION['preaut'].'
                                                                        ...Année Pub : '.$_SESSION['anedit'].'<br>
                                                                        M_Edition : '.$_SESSION['edition'].'
                                                                        Langue : Fr.
                                                                        Page : '.$_SESSION['pagen'].'
                                                                        </a>';
                                                                echo '</a></div>';
                                                            }else{
                                                                echo "Aucun resultat";
                                                            }
                                                     ?>
                                    <!-- fin affichage -->
                                </div> 
                            </div>
                        </div>
                    </div>
            </aside>
        </div>
            <hr size="15" style="color:blue">
    </div>
    <!-- bienvenu dans le monde js -->
    <!-- <script src="boot3/js/jquery.js"></script>
    <script src="boot3/js/bootstrap.js"></script> -->
    <script src="boot3/js/monjs.js"></script>
</body>
</html>