<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>espace administrateur</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="boot3/css/bootstrap.css">
        <link rel="stylesheet" href="boot3/css/mycss.css">
    </head>
    <body>
        <div id="bloc_page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <?php include "header.php" ?>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12" id="formauth">
                        <form action="authentifaut.php" method="POST" class="form">
                            <fieldset>
                                <legend style="color:white">Authentification Auteur</legend>
                                <div class="form-group">
                                    <label for="login" class="control-label">Login</label>
                                    <input type="text" name="login" class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="passw" class="control-label">Mot de passe</label>
                                    <input type="password" name="passw" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="btncon" class="btn btn- btn-block btn-sm" value="Connection Admin">
                                </div>
                               <!--  </div> -->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <!-- bienvenu dans le monde js -->
    <script src="boot3/js/jquery.js"></script>
    <script src="boot3/js/bootstrap.js"></script>
    <script src="boot3/js/monjs.js"></script>
    </body>
</html>