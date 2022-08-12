<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>BibliothèqueCongo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="boot3/css/bootstrap.css">
        <link rel="stylesheet" href="boot3/css/mycss.css">
    </head>
    <body>
        <div id="bloc_page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <?php include "header_index.php"; ?>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12" id="formauth">
                        <form action="cibleauteur.php" method="POST" enctype="multipart/form-data" class="form">
                            <fieldset>
                                <legend style="color:white">Création de compte Auteur</legend>
                               <div class="form-group">
                                    <label for="fname" class="control-label">Nom(login)</label>
                                    <input type="text" name="fnom" class="champ form-control" placeholder="your first name" required>
                                </div>
                                <div class="form-group">
                                    <label for="sname" class="control-label">Prenom</label>
                                    <input type="text" name="snom" class="form-control" placeholder="your second name" required>
                                </div>
                                <div class="form-group">
                                    <label for="sname" class="control-label">Pays d'origine</label>
                                    <input type="text" name="pays" class="form-control" placeholder="your second name" required>
                                </div>
                                <div class="form-group">
                                    <label for="sname" class="control-label">Ville d'origine</label>
                                    <input type="text" name="ville" class="form-control" placeholder="your second name" required>
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
                                    <input type="tel" name="phone" title="Attention!...Ce numéro doit correspondre à celui du compte lecteur et doit contenir 10 chiffres!" class="form-control" placeholder="0976761610" id="phone" required>
                                </div>
                                 <div class="form-group">
                                    <label for="passw" class="control-label">Nouveau mot de passe</label>
                                    <input type="password" name="passw" id="passw" class="form-control" title="Attention!...le mot de passe doit être différent de celui de votre compte lecteur!" required>
                                </div>
                                <div class="form-group">
                                    <label for="passc" class="control-label">Confirmer votre mot de passe</label>
                                    <input type="password" name="passc" id="passc" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="iprofil" class="control-label">Image de profil</label>
                                    <input type="file" name="iprofil" id="iprofil" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="btnsv" id="btnsv" class="btn btn-black btn-block btn-sm" value="Suivant">
                                    <a href="creation_auteur.php"><h6 class="glyphicon glyphicon-book">Création_Compte_Auteur</h6></a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Message d'erreur -->
        <div id="erreur">
            <p class="glyphicon glyphicon-warning">Tous les champs doivent être remplis svp!</p>
        </div>
        <!-- ---------- -->
        <script src="boot3/js/jquery.js"></script>
        <script src="boot3/js/jquery.color.js"></script>
        <script src="boot3/js/bootstrap.js"></script>
        <script src="boot3/js/monjs.js"></script>
    </body>
</html>