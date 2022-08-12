<?php 
session_start();
?>
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
                <h6 style="color: rgb(92, 209, 254);text-align:left;">Gestion Auteur</h6>
            </header>
            <hr style="width:50%;">
            <aside>
                <div class="row">
                    <div class="col-sm-4 col-xs-5" id="dashat">
                        <h4 style="color:white;text-align: center;">Tableau de bord/Auteurs</h4> <br><br>
                        <div id="profil">
                            <?php
                            echo '<img src="'.$_SESSION['iprofil'].'" title="votre profil" alt="Profil" class="img-circle"><br>';
                            ?>
                            <a href="#" style="color:white;text-align:center;"><?php echo $_SESSION['nom'].' '.$_SESSION['prenom'];?> ......<b class="glyphicon glyphicon-pencil"></b></a><br><br>
                        </div>
                        <ul class="list-group">
                            <span id="pdfaj" class="list-group-item">Ajouter livres PDF<b class="badge"><?php  // recherche plaque
                                                        include('classes/Connection.class.php');
                                                        $con = new Connection();
                                                        $cn = $con->connectionb();
                                                        $rech = $cn->query('SELECT count(oid) as nbelmt FROM ouvrage');
                                                        while ($dt = $rech->fetch()) {
                                                            echo $dt['nbelmt'];
                                                        }
                                                        ?></b></span>
                            <span id="audioaj" class="list-group-item">Ajouter livres Audio<b class="glyphicon glyphicon-music pull-right"></b></span>
                            <span id="videoaj" class="list-group-item">Ajouter livres Video<b class="glyphicon glyphicon-film pull-right"></b></span>
                            <span id="paraaj" class="list-group-item">Parametres<b class="glyphicon glyphicon-tags pull-right"></b></span>
                        </ul>
                    </div>
                    <div class="col-sm-7 col-xs-8" id="result_aut">
                        <div class="row">
                           <div class="row"  id="ajoutpdf">
                            <div class="col-sm-5 col-xs-6">
                                <form enctype="multipart/form-data" action="recuperation_pdf.php" method="POST" class="form">
                                    <fieldset>
                                        <legend style="color:white">+Ajouter un livre en pdf<span class="glyphicon glyphicon-book"></span></legend>
                                        <div class="form-group">
                                            <label for="pdf" class="control-label">Fichier pdf à uploader</label>
                                            <input type="file" name="pdf" placeholder="votre fichier (.pdf)" required>
                                            <label for="image" class="control-label">Photo couverture (jpg ou png)</label>
                                            <input type="file" name="image" placeholder="votre fichier image" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nomaut" class="control-label">Nom de l'auteur</label>
                                             <?php
                                                        // // recherche plaque
                                                        // include('classes/Connection.class.php');
                                                        // $con = new Connection();
                                                        // $cn = $con->connectionb();
                                                        $rech = $cn->query('SELECT * FROM t_auteur');
                                                            echo '<select size=1 name="nomaut" class="form-control">'."\n";
                                                            echo '<option value="-1">Selectionner auteur</option>'."\n";
                                                            if(!$rech){
                                                                echo 'Lecture Impossible';
                                                            }else{
                                                                while($data = $rech->fetch()){
                                                                    $nom = $data['nomat'];
                                                                    echo '<option value="'.$nom.'">'.$nom.'</option>'."\n";
                                                                }
                                                                echo '</select>'."\n";
                                                            }          
                                                     ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="pdf" class="control-label">Domaine</label>
                                             <?php
                                                        // recherche domaine
                                                        $req = $cn->query('SELECT * FROM domaine');
                                                            echo '<select size=1 name="domaine" class="form-control">'."\n";
                                                            echo '<option value="-1">Choisir le domaine</option>'."\n";
                                                            if(!$req){
                                                                echo 'Lecture Impossible';
                                                            }else{
                                                                while($dat = $req->fetch()){
                                                                    $titre = $dat['nom_domaine'];
                                                                    echo '<option value="'.$titre.'">'.$titre.'</option>'."\n";
                                                                }
                                                                echo '</select>'."\n";
                                                            }          
                                                     ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="titre" class="control-label">Titre du livre</label>
                                            <input type="text" name="titre" class="form-control" placeholder="Petit Prince" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="lieuedit" class="control-label">Lieu d'Edition</label>
                                            <input type="text" name="lieuedit" class="form-control" placeholder="Paris/France" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="msedit" class="control-label">Maison d'Edition</label>
                                            <input type="text" name="msedit" class="form-control" placeholder="Dunond" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="anedit" class="control-label">Année d'Edition</label>
                                            <input type="text" name="anedit" class="form-control" placeholder="juillet 2020" required>
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="npage" class="control-label">Nombre de page</label>
                                            <input type="text" name="npage" class="form-control" placeholder="393" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="contenu" class="control-label">Contenu/resumé</label>
                                            <input type="text" name="contenu" class="form-control" placeholder="Hstoire d'un peti prince d'une planete inhabitée" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="btnenreg" class="btn btn- btn-block btn-sm" value="Enregistrer">
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="col-sm-5 col-xs-6">
                                <form action="recuperation_pdf.php" method="POST" class="form">
                            <fieldset>
                                <legend style="color:white">+ Ajouter Auteur en premier<span class="glyphicon glyphicon-pencil"></span></legend>
                               <div class="form-group">
                                    <label for="fname" class="control-label">Nom</label>
                                    <input type="text" name="fnom" class="champ form-control" placeholder="Antoine" required>
                                </div>
                                <div class="form-group">
                                    <label for="sname" class="control-label">Prenom</label>
                                    <input type="text" name="snom" class="form-control" placeholder="Michelin" required>
                                </div>
                                <div class="form-group">
                                    <label for="sname" class="control-label">Pays d'origine</label>
                                    <input type="text" name="pays" class="form-control" placeholder="France" required>
                                </div>
                                <div class="form-group">
                                    <label for="sname" class="control-label">Ville d'origine</label>
                                    <input type="text" name="ville" class="form-control" placeholder="Marsailles" required>
                                </div>
                                <div class="form-group">
                                    <label for="sname" class="control-label">Date de naissance</label>
                                    <input type="date" name="dnaisse"  class="form-control" placeholder="1978-12-01" required>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label">Adresse mail</label>
                                    <input type="email" name="l_email" class="form-control" placeholder="example@book.com">
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="control-label">Téléphone</label>
                                    <input type="tel" name="phone" title="Vérifier ce numéro" class="form-control" value="<?php if(isset($_SESSION['phonel'])){echo $_SESSION['phonel'];}else{echo '0976761712';} ?>" id="phone">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label">Mot de passe(facultatif)</label>
                                    <input type="text" name="m_passe" class="form-control" placeholder="Necessaire pour l'enregistrement">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="btnsv" id="btnsv" class="btn btn-black btn-block btn-sm" value="Suivant">
                                </div>
                            </fieldset>
                        </form>
                            </div>
                        </div>
                        <div id="ajoutaudio">
                                <form enctype="multipart/form-data" action="recuperation_pdf.php" method="POST" class="form">
                                    <fieldset>
                                        <legend style="color:white">+Ajouter l'audio du livre<span class="glyphicon glyphicon-music"></span></legend>
                                        <div class="form-group">
                                            <label for="titrel" class="control-label">Titre du livre</label>
                                             <?php
                                                        $sql = $cn->query('SELECT * FROM ouvrage');
                                                            echo '<select size=1 name="titrel" class="form-control">'."\n";
                                                            echo '<option value="-1">Selectionner titre pour l\'audio</option>'."\n";
                                                            if(!$sql){
                                                                echo 'Lecture Impossible';
                                                            }else{
                                                                while($dt = $sql->fetch()){
                                                                    $titreo = $dt['titre_ouvrage'];
                                                                    echo '<option value="'.$titreo.'">'.$titreo.'</option>'."\n";
                                                                }
                                                                echo '</select>'."\n";
                                                            }          
                                                     ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="f_audio" class="control-label">Fichier à uploader</label>
                                            <input type="file" name="f_audio" placeholder="votre fichier audio" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="contenu" class="control-label">Commentaire sur l'audio</label>
                                            <input type="text" name="commentaire" class="form-control" placeholder="L'audio est bien plus claire à entendre et facile à comprendre..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="btnenaud" class="btn btn- btn-block btn-sm" value="EnregistrerAudio">
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            <div id="ajoutvideo">
                                <form enctype="multipart/form-data" action="recuperation_pdf.php" method="POST" class="form">
                                    <fieldset>
                                        <legend style="color:white">+ Ajouter la video du livre<span class="glyphicon glyphicon-film"></span></legend>
                                        <div class="form-group">
                                            <label for="titrel" class="control-label">Titre du livre</label>
                                             <?php
                                                        $sql = $cn->query('SELECT * FROM ouvrage');
                                                            echo '<select size=1 name="titrel" class="form-control">'."\n";
                                                            echo '<option value="-1">Selectionner titre pour la video</option>'."\n";
                                                            if(!$sql){
                                                                echo 'Lecture Impossible';
                                                            }else{
                                                                while($dt = $sql->fetch()){
                                                                    $titreo = $dt['titre_ouvrage'];
                                                                    echo '<option value="'.$titreo.'">'.$titreo.'</option>'."\n";
                                                                }
                                                                echo '</select>'."\n";
                                                            }          
                                                     ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="f_audio" class="control-label">Fichier à uploader</label>
                                            <input type="file" name="f_audio" placeholder="votre fichier audio" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="contenu" class="control-label">Commentaire sur la video</label>
                                            <input type="text" name="commentaire" class="form-control" placeholder="L'audio est bien plus claire à entendre et facile à comprendre..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="btnenaud" class="btn btn- btn-block btn-sm" value="EnregistrerAudio">
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            <div id="parametres">
                             <p>Hey parametres</p>
                            </div>
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