<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>dash</title>
</head>
<body>
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

</body>
</html>