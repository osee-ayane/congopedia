<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boot3/css/bootstrap.css">
    <link rel="stylesheet" href="boot3/css/bootstrap-icons.css">
    <link rel="stylesheet" href="boot3/css/mycss.css">
</head>
<body>
    <div class="bloc_page">
        <div class="container" id="allhead">
            <header>
               <?php include "header.php";?>
            </header>
            <hr>
            <aside>
                <div class="row">
                    <div class="col-sm-2 col-xs-3">
                        <div class="panel panel-info" id="btnback">
                            <div class="panel-heading"> 
                             <h4 class="panel-title">
                                <!-- <span id="icone" class="glyphicon glyphicon-folder-open"></span> -->
                                    <a href="#menu" id="icone" data-toggle="collapse" class="btn btn-default glyphicon glyphicon-folder-open"> Cliquez ici</a>
                                </h4>
                        <ul id="menu" class="list-group collapse" style="text-align: left;" id="dashlist">
                            <a href="#" class="list-group-item glyphicon glyphicon-book" id="backoffice">Application BackOffice</a>
                            <a href="#" class="list-group-item glyphicon glyphicon-book" id="lesdomaines">Domaines disponibles</a>
                            <a href="#" class="list-group-item glyphicon glyphicon-pencil" id="lesauteurs">Les auteurs</a>
                            <a href="#" class="list-group-item glyphicon glyphicon-eye-open" id="leslecteurs">Les lecteurs</a>
                            <a href="#" class="list-group-item glyphicon glyphicon-user" id="lesadmins">Les administrateurs</a>
                            <a href="auteuradmin.php" title="Cliquez pour ajouter" class="list-group-item glyphicon glyphicon-book"> + Ouvrages</a>
                        </ul>
                        </div>
                    </div>
                </div>
<!--                      <div class="col-sm-3 col-xs-4" id="dash1">
                        <h4>Tableau de bord/Administrateur</h4> <br><br><br>
                        <ul class="list-group" style="text-align: left;">
                            <a href="#" class="list-group-item glyphicon glyphicon-book" id="dashlist">Application BackOffice</a>
                            <a href="#" class="list-group-item glyphicon glyphicon-pencil">Les auteurs</a>
                            <a href="#" class="list-group-item glyphicon glyphicon-eye-open">Les lecteurs</a>
                            <a href="#" class="list-group-item glyphicon glyphicon-cart">Les administrateurs</a>
                        </ul>
                     </div> -->
                    <div class="col-sm-8 col-xs-9" id="result_admin">
                        <div class="row">
                            <div id="dispback">
                        <?php
                                include('classes/Connection.class.php');
                                $con = new Connection();
                                $cn = $con->connectionb();
                                    $sql = $cn->query('SELECT * FROM (ouvrage o INNER JOIN t_auteur t ON t.uid = o.id_aut) INNER JOIN domaine d ON d.did = o.id_dom');
                                        echo '<table class="table table-bordered table-striped table-condense" style="border-radius:5px;">';
                                        echo "<tr>
                                                <th>N°</th>
                                                <th>Nom auteur</th>
                                                <th>Prenom aut.</th>
                                                <th>Domiane Lv.</th>
                                                <th>Titre Livre</th>
                                                <th>Maison d'Edit</th>
                                                <th>Lieu d'Edit.</th>
                                                <th>Année Edit.</th>
                                                <th>Resumé Lv.</th>
                                                <th>Nb. page</th>
                                                <th>Date envoie</th>
                                                <th>Opérations</th>
                                            </tr>";
                                        while($dn = $sql->fetch()){
                                            echo '<tr>';
                                                echo '<td>'.$dn['oid'].'</td>';
                                                echo '<td style="color:rgb(92, 209, 254)">'.$dn['nomat'].'</td>';
                                                echo '<td>'.$dn['prenomat'].'</td>';
                                                echo '<td>'.$dn['nom_domaine'].'</td>';
                                                echo '<td style="color:rgb(92, 209, 254)"><a href="'.$dn['cheminlv'].'">'.$dn['titre_ouvrage'].'</a></td>';
                                                echo '<td>'.$dn['msedit'].'</td>';
                                                echo '<td>'.$dn['lieued'].'</td>';
                                                echo '<td>'.$dn['annee_edition'].'</td>';
                                                echo '<td>'.$dn['resume'].'</td>';
                                                echo '<td>'.$dn['nbpage'].'</td>';
                                                echo '<td>'.$dn['dateer'].'</td>';
                                                echo '<td>
                                                    <form action="lesrecherches.php" method="post" class="form">
                                                        <fieldset>
                                                                    <input type="submit" name="supvy" id="supvy" value="Modifier" class="btn btn-info btn-xs btn-block">
                                                                    <input type="submit" name="supvy" id="supvy" value="Publier" class="btn btn-success btn-xs btn-block">
                                                                    <input type="submit" name="supvy" id="supvy" value="Annuler" class="btn btn-danger btn-xs btn-block">
                                                        </fieldset>
                                                    </form>
                                                </td>';
                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                ?>
                        </div>
                        <div id="dispdomaines">
                            <?php
                                    $sl = $cn->query('SELECT * FROM domaine');
                                        echo '<table class="table table-bordered table-striped table-condense" style="border-radius:5px;">';
                                        echo '<tr>
                                                <th>N°</th>
                                                <th>Description du domaine</th>
                                                <th>Opérations<span class="btn btn-default btn-xs pull-right" id="ajouterdom"> + Ajouter domaine</span>
                                                <div class="col-sm-4" id="formadomaine">
                                                    <form action="ajouterdom.php" method="POST" class="form">
                                                        <input type="text" name="domaine" class="form-control" placeholder="nom du nouveau domaine">
                                                        <input type="submit" name="validerdom" value="Ajouter" class="btn btn-primary btn-xs btn-block">
                                                    </form>
                                                </div>
                                                </th>
                                            </tr>';
                                        while($d = $sl->fetch()){
                                            echo '<tr>';
                                                echo '<td>'.$d['did'].'</td>';
                                                echo '<td style="color:rgb(92, 209, 254)"><a href="#">'.$d['nom_domaine'].'</a></td>';
                                                echo '<td>
                                                    <form action="lesrecherches.php" method="post" class="form">
                                                        <fieldset>
                                                                    <input type="submit" name="supvy" id="" value="Modifier" class="btn btn-info btn-xs btn-block">
                                                                    <input type="submit" name="supvy" id="" value="Supprimer" class="btn btn-danger btn-xs btn-block">
                                                        </fieldset>
                                                    </form>
                                                </td>';
                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                ?>
                        </div>
                        <div id="dispauteurs">
                        <?php
                                    $aut = $cn->query('SELECT * FROM t_auteur');
                                        echo '<table class="table table-bordered table-striped table-condense" style="border-radius:5px;">';
                                        echo "<tr>
                                                <th>N°</th>
                                                <th>Nom auteur</th>
                                                <th>Prenom aut.</th>
                                                <th>Pays</th>
                                                <th>Ville</th>
                                                <th>Date naissance</th>
                                                <th>E-mail</th>
                                                <th>Téléphone</th>
                                                <th>Mot de passe</th>
                                                <th>Profil</th>
                                                <th>Opérations</th>
                                            </tr>";
                                        while($dne = $aut->fetch()){
                                            echo '<tr>';
                                                echo '<td>'.$dne['uid'].'</td>';
                                                echo '<td style="color:rgb(92, 209, 254)">'.$dne['nomat'].'</td>';
                                                echo '<td>'.$dne['prenomat'].'</td>';
                                                echo '<td>'.$dne['paysat'].'</td>';
                                                echo '<td>'.$dne['villeat'].'</td>';
                                                echo '<td>'.$dne['datenat'].'</td>';
                                                echo '<td>'.$dne['mailat'].'</td>';
                                                echo '<td>'.$dne['phoneat'].'</td>';
                                                echo '<td>'.$dne['mpat'].'</td>';
                                                echo '<td><img src="'.$dne['iprofil'].'" alt="photoprofil"></td>';
                                                echo '<td>
                                                    <form action="lesrecherches.php" method="post" class="form">
                                                        <fieldset>
                                                                    <input type="submit" name="supvy" id="supvy" value="Autoriser" class="btn btn-success btn-xs btn-block">
                                                                    <input type="submit" name="supvy" id="supvy" value="Annuler" class="btn btn-danger btn-xs btn-block">
                                                        </fieldset>
                                                    </form>
                                                </td>';
                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                ?>
                        </div>
                        <div id="displecteur">
                        <?php
                                    $aut = $cn->query('SELECT * FROM lecteur');
                                        echo '<table class="table table-bordered table-striped table-condense" style="border-radius:5px;">';
                                        echo '<tr>
                                                <th><span class="btn btn-info btn-xs btn-block">N°</span></th>
                                                <th><span class="btn btn-info btn-xs btn-block">Nom</span></th>
                                                <th><span class="btn btn-info btn-xs btn-block">Prenom</span></th>
                                                <th><span class="btn btn-info btn-xs btn-block">e_mail</span></th>
                                                <th><span class="btn btn-info btn-xs btn-block">Téléphone</span></th>
                                                <th><span class="btn btn-info btn-xs btn-block">Mot de passe</span></th>
                                                <th><span class="btn btn-info btn-xs btn-block">Etat actuel</span></th>
                                                <th><span class="btn btn-info btn-xs btn-block" id="formrech">Nombre connecté</span>
                                                </th>
                                            </tr>';
                                        while($dnne = $aut->fetch()){
                                            echo '<tr>';
                                                echo '<td>'.$dnne['lid'].'</td>';
                                                echo '<td style="color:rgb(92, 209, 254)">'.$dnne['nom'].'</td>';
                                                echo '<td>'.$dnne['prenom'].'</td>';
                                                echo '<td>'.$dnne['ad_mail'].'</td>';
                                                echo '<td>'.$dnne['phone'].'</td>';
                                                echo '<td>'.$dnne['mpasse'].'</td>';
                                                //definition de l'etat de la connexion
                                                $lect = $cn->query('SELECT * FROM lecteur l INNER JOIN lecture_con lc ON lc.lid = l.lid WHERE lc.datecon = NOW()');
                                                $dexist = $lect->rowCount();
                                                if ($dexist == 1) {
                                                    echo '<td><button type="button" class="btn btn-success btn-xs btn-block">Connecter</button></td>';
                                                }else{
                                                    echo '<td><button type="button" class="btn btn-default btn-xs btn-block">Non connecté</button></td>';
                                                }
                                                $lecon = $cn->query('SELECT count(id) as idcon FROM lecture_con WHERE HOUR(datecon) = NOW()');
                                                    while($res = $lecon->fetch()){
                                                        echo '<td><b class="badge">'.$res['idcon'].'</b></td>';
                                                    }
                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                ?>
                        </div>
                        <div id="dispadmin">
                        <?php
                                    $admin = $cn->query('SELECT * FROM adminitrateur');
                                        echo '<table class="table table-bordered table-striped table-condense" style="border-radius:5px;">';
                                        echo '<tr>
                                                <th>N°</th>
                                                <th>Login</th>
                                                <th>Mot de passe</th>
                                                <th>Fonction</th>
                                                <th>Opérations <span class="btn btn-default btn-xs pull-right" id="ajouteradmin"> + Ajouter admin</span>
                                                <div class="col-sm-4" id="formadmin">
                                                    <form action="ajouterdom.php" method="POST" class="form">
                                                        <input type="text" name="login" class="form-control" placeholder="login admin">
                                                        <input type="text" name="mpasse" class="form-control" placeholder="mot de passe">
                                                        <input type="text" name="fonction" class="form-control" placeholder="nouvelle fonction">
                                                        <input type="submit" name="valideradmin" value="Ajouter" class="btn btn-primary btn-xs btn-block">
                                                    </form>
                                                </div></th>
                                            </tr>';
                                        while($resu = $admin->fetch()){
                                            echo '<tr>';
                                                echo '<td>'.$resu['id'].'</td>';
                                                echo '<td style="color:rgb(92, 209, 254)">'.$resu['login'].'</td>';
                                                echo '<td>'.$resu['mpasse'].'</td>';
                                                echo '<td>'.$resu['fonction'].'</td>';
                                                echo '<td>
                                                    <form action="lesrecherches.php" method="post" class="form">
                                                        <fieldset>
                                                                    <input type="submit" name="supvy" id="supvy" value="Supprimer" class="btn btn-danger btn-xs btn-block">
                                                        </fieldset>
                                                    </form>
                                                </td>';
                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                ?>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
            <hr size="15" style="color:blue">
    </div>
    <!-- bienvenu dans le monde js -->
    <script src="boot3/js/jquery.js"></script>
    <script src="boot3/js/bootstrap.js"></script>
    <script src="boot3/js/monjs.js"></script>
</body>
</html>