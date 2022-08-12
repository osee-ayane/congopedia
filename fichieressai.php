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
        <div class="container-fluid" id="allhead">
                 <div class="row" id="navbar">
                    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
                        <?php include "header_read.php";?>
                    </nav>
                </div><br><br><br><br><br><br><br><br>
            <hr>
            <aside>
                <div class="row" id="contenu">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="result_ad">
                       <h2 style="color: rgb(92, 209, 254);">Résultat de votre recherche</h2><br>
                        <div class="row">
                                    <!-- Affichage livre automatiquement -->
                                    <?php
                                    session_start();
                                    // include('classes/Connection.class.php');
                                    // $con = new Connection();
                                    // $cn = $con->connectionb();
                                    if(isset($_POST['btnlivre'])){
                                        $trech = htmlspecialchars($_POST['livre']);
                                        $rech = $cn->prepare('SELECT * FROM (ouvrage o INNER JOIN t_auteur t ON t.uid = o.id_aut) INNER JOIN domaine d ON d.did = o.id_dom WHERE o.titre_ouvrage like ? OR t.nomat like ? OR d.nom_domaine like ? OR o.nbpage like ? OR o.annee_edition like ? OR o.msedit like ?');
                                        $rech->execute(array('%'.$trech.'%', '%'.$trech.'%', '%'.$trech.'%', '%'.$trech.'%', '%'.$trech.'%', '%'.$trech.'%'));
                                        while($data = $rech->fetch()){
                                                echo '<div class="card col-sm-3 col-xs-4" style="color:rgb(51, 122, 183); font-size:10px; font-family: Bell-MT;">';
                                                                    echo '<a href="'.$data['cheminlv'].'" id="pop" data-toggle="popover" data-content="'.$data['resume'].'" title="'.$data['titre_ouvrage'].'" class="thumbnail">';
                                                                    echo '<img src="'.$data['limage'].'" alt="livrepdf" class="img-rounded"><form action="lecturelivre.php" method="POST"><input type="button" name="lirebtn" class="btn btn-default" style="color:rgb(92, 209, 254);" value="Lecture"></form>';
                                                                    echo '<a href="#" class="card-title">'.$data['titre_ouvrage'].'</a><br>';
                                                                    echo '<a href="#" class="card-body">
                                                                        Auteur : '.$data['nomat'].' '.$data['prenomat'].'
                                                                        ...Année Pub : '.$data['annee_edition'].'<br>
                                                                        M_Edition : '.$data['msedit'].'
                                                                        Langue : Fr.
                                                                        Page : '.$data['nbpage'].'
                                                                        </a>
                                                                        <div style="background-color:rgba(0, 0, 0, 0.2);border: 1px dashed blue;" id="comment">
                                                                            <a href="#" class="glyphicon glyphicon-ok-sign">J\'aime</a>
                                                                            ... <a href="#" class="glyphicon glyphicon-comment"></a>
                                                                            <form method="POST" class="form" id="formulaire">
                                                                            <input type="text" id="commentaire" class="form-control"><input type="submit" class="btn btn-primary btn-xs" id="comementer" value="Commentez"><button type="button" class="btn btn-info btn-xs" id="more_cmt">Plus+++</button>
                                                                            </form>
                                                                        </div>';
                                                                echo '</a></div>';
                                                            }
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
<!--     <script src="boot3/js/jquery.js"></script>
    <script src="boot3/js/bootstrap.js"></script> -->
    <script src="boot3/js/monjs.js"></script>
</body>
</html>