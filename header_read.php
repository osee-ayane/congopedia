<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>...</title>
    </head>
    <body>
        <div id="bloc_page">
            <div class="container-fluid">
                <div class="row">
                     <nav class="navbar navbar-expand-md navbar-light bg-light">
                            <button class="navbar-toggler" data-toggle="collapse" data-target="#n_collapse"> 
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        <div class="collapse navbar-collapse" id="n_collapse"> 
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dtdown"><button class="btn btn-default btn-xs btn-block">R_DashBoard</button></a>
                                             <?php
                                             session_start();
                                                        // recherche plaque
                                                        include('classes/Connection.class.php');
                                                        $con = new Connection();
                                                        $cn = $con->connectionb();
                                                        $rech = $cn->query('SELECT * FROM domaine');
                                                            echo '<div class="dropdown-menu" aria-labelledby="dtdown">'."\n";
                                                            // echo '<li class="list-group-item">...</li>'."\n";
                                                            if(!$rech){
                                                                echo 'Lecture Impossible';
                                                            }else{
                                                                while($data = $rech->fetch()){
                                                                    $nom = $data['nom_domaine'];
                                                                    echo '<a class="dropdown-item"><form action="switchdomaine.php" method="POST"><input type="hidden" name="contenudom" value="'.$nom.'"><input type="submit" name="myswt" value="'.$nom.'" class="btn btn-light btn-block btn-xs"></form></a>'."\n";
                                                                }
                                                                echo '</div>';
                                                            }          
                                                     ?>
                                    </li>
                                </ul>
                            </div>
                            <!-- Administrateur stage -->
                            <!-- <a href="connexion_auteur.php" class="btn btn-default btn-lg" style="font-weight: bold;color:white;text-align:left;"><b class="badge"><span class="glyphicon glyphicon-book"></span></b> Espace Auteurs</a> -->
                        </nav>
                </div>
                <div class="row">
                    <div class="col-md-3 pull-left" style="color:rgba(0, 0, 0, 0.01);">
                            Votre bibliothèque numérique avec une collection des miliers d'ouvrages. Enjoy!
                    </div>
                    <div class="col-md-7 pull-right">
                        <div style="text-align: center;">
                            <h1 style="color:white; font-style: italic; font-family: 'bell MT';"><a href="readerpage.php"><b style="color:rgb(92, 209, 254);" class="glyphicon glyphicon-book">C</b>ongo<b style="color:rgb(92, 209, 254);">P</b>édia</a></h1>
                            <h6 style="color:rgb(92, 209, 254);">Votre bibliothèque numérique universelle</h6>
                        </div>
                            <form  action="fichieressai.php" method="post" class="form reche">
                                <div class="form-group">
                                    <input type="text" name="livre" placeholder="Entrez une info sur le livre...titre, nom auteur, edition, lieu...." class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="btnlivre" id="btn_univ" class="btn btn-light btn-block btn-sm" value="Search books">
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>