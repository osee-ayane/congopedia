<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
                        <h4>Tableau de bord/Lecteurs</h4> <br><br><br>
                        <ul class="list-group">
                            <a data-toggle="modal" href="#ouvragel" class="list-group-item">Ouvrages</a>
                            <!-- fenetre modale pour la section ouvrage -->
                            <div class="modal fade" id="ouvragel">
                                <div class="modal-dialog modal-lg"> 
                                    <div class="modal-content">                                   
                                        <div class="modal-body">
                                            <h4 class="modal-title" style="color:rgb(51, 122, 183);">Les ouvrages du domaine</h4><br>
                                            <form  action="fichieressai.php" method="post" class="form reche">
                                                <input type="text" name="livre" class="form-control sm" required>
                                                 <input type="submit" name="btnlivre" id="btn_univ" class="btn btn-primary btn-block btn-sm" value="Rechercher Informatique">
                                                </form><br>
                                            <div class="container">
                                                    <div class="row">
                                                        <div class="card col-sm-2 col-xs-2" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                                                <a href="biblio/AGRONOMIE/MICROBIOLOGIE DU SOL.pdf" class="thumbnail">
                                                                    <img src="image/im11.jpg" alt="livre1" class="card-img-top img-rounded">
                                                                    <a href="#" class="card-title">Voyage vers les Medcines</a>
                                                                    <a href="#" class="card-body">Auteur : Dr. Julien Fourchettes
                                                                    Année Pub : 2001
                                                                    Edition : Dunond
                                                                    Langue : Fr.
                                                                    Page :910
                                                                    </a>
                                                                </a>
                                                        </div>
                                                        <div class="card col-sm-2 col-xs-2" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                                                <a href="biblio/AGRONOMIE/Les_bases_de_l_agriculture-TdM.pdf" class="thumbnail">
                                                                    <img src="image/im12.jpg" alt="livre2" class="card-img-top img-rounded">
                                                                    <a href="#" class="card-title">Voyage vers les Medcines</a>
                                                                    <a href="#" class="card-body">Auteur : Dr. Julien Fourchettes
                                                                    Année Pub : 2001
                                                                    Edition : Dunond
                                                                    Langue : Fr.
                                                                    Page :910
                                                                    </a>
                                                                </a>
                                                        </div>
                                                        <div class="card col-sm-2 col-xs-2" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                                                <a href="biblio/AGRONOMIE/informationinterne sur l'agriculture.pdf" class="thumbnail">
                                                                    <img src="image/im8.jpg" alt="livre3" class="card-img-top img-rounded">
                                                                    <a href="#" class="card-title">Voyage vers les Medcines</a>
                                                                    <a href="#" class="card-body">Auteur : Dr. Julien Fourchettes
                                                                    Année Pub : 2001
                                                                    Edition : Dunond
                                                                    Langue : Fr.
                                                                    Page :910
                                                                    </a>
                                                                </a>
                                                        </div>
                                                        <div class="card col-sm-2" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                                                <a href="biblio/AGRONOMIE/FERTILITE DES SOLS.pdf" class="thumbnail">
                                                                    <img src="image/im9.jpg" alt="livre4" class="card-img-top img-rounded">
                                                                    <a href="#" class="card-title">Voyage vers les Medcines</a>
                                                                    <a href="#" class="card-body">Auteur : Dr. Julien Fourchettes
                                                                    Année Pub : 2001
                                                                    Edition : Dunond
                                                                    Langue : Fr.
                                                                    Page :910
                                                                    </a>
                                                                </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="modal-footer">
                                            <button type="button" data-dismiss="modal" class="btn btn-info btn-block">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- fin modale -->
                            <a data-toggle="modal" href="#revuel" class="list-group-item">Revues/Reviews</a>
                            <!-- fenetre modale pour la section ouvrage -->
                            <div class="modal fade" id="revuel">
                                <div class="modal-dialog modal-lg"> 
                                    <div class="modal-content">                                   
                                        <div class="modal-body">
                                            <h4 class="modal-title" style="color:rgb(51, 122, 183);">Les Revues du domaine</h4><br>
                                            <form  action="recherchelive.php" method="post" class="form reche">
                                                <input type="text" name="livre" class="form-control sm" required>
                                                 <input type="submit" name="btnlivre" id="btn_univ" class="btn btn-primary btn-block btn-sm" value="Rechercher Informatique">
                                                </form><br>
                                            <div class="container">
                                                    <div class="row">
                                                        <div class="card col-sm-2 col-xs-2" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                                                <a href="biblio/AGRONOMIE/MICROBIOLOGIE DU SOL.pdf" class="thumbnail">
                                                                    <img src="image/im11.jpg" alt="livre1" class="card-img-top img-rounded">
                                                                    <a href="#" class="card-title">Voyage vers les Medcines</a>
                                                                    <a href="#" class="card-body">Auteur : Dr. Julien Fourchettes
                                                                    Année Pub : 2001
                                                                    Edition : Dunond
                                                                    Langue : Fr.
                                                                    Page :910
                                                                    </a>
                                                                </a>
                                                        </div>
                                                        <div class="card col-sm-2 col-xs-2" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                                                <a href="biblio/AGRONOMIE/Les_bases_de_l_agriculture-TdM.pdf" class="thumbnail">
                                                                    <img src="image/im12.jpg" alt="livre2" class="card-img-top img-rounded">
                                                                    <a href="#" class="card-title">Voyage vers les Medcines</a>
                                                                    <a href="#" class="card-body">Auteur : Dr. Julien Fourchettes
                                                                    Année Pub : 2001
                                                                    Edition : Dunond
                                                                    Langue : Fr.
                                                                    Page :910
                                                                    </a>
                                                                </a>
                                                        </div>
                                                        <div class="card col-sm-2 col-xs-2" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                                                <a href="biblio/AGRONOMIE/informationinterne sur l'agriculture.pdf" class="thumbnail">
                                                                    <img src="image/im8.jpg" alt="livre3" class="card-img-top img-rounded">
                                                                    <a href="#" class="card-title">Voyage vers les Medcines</a>
                                                                    <a href="#" class="card-body">Auteur : Dr. Julien Fourchettes
                                                                    Année Pub : 2001
                                                                    Edition : Dunond
                                                                    Langue : Fr.
                                                                    Page :910
                                                                    </a>
                                                                </a>
                                                        </div>
                                                        <div class="card col-sm-2 col-xs-2" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                                                <a href="biblio/AGRONOMIE/FERTILITE DES SOLS.pdf" class="thumbnail">
                                                                    <img src="image/im9.jpg" alt="livre4" class="card-img-top img-rounded">
                                                                    <a href="#" class="card-title">Voyage vers les Medcines</a>
                                                                    <a href="#" class="card-body">Auteur : Dr. Julien Fourchettes
                                                                    Année Pub : 2001
                                                                    Edition : Dunond
                                                                    Langue : Fr.
                                                                    Page :910
                                                                    </a>
                                                                </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="modal-footer">
                                            <button type="button" data-dismiss="modal" class="btn btn-info btn-block">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- fin modale -->
                            <a data-toggle="modal" href="#revuel" class="list-group-item">Rapports</a>
                            <a data-toggle="modal" href="#revuel" class="list-group-item">Romans</a>
                            <a data-toggle="modal" href="#revuel" class="list-group-item">Articles</a>
                            <a data-toggle="modal" href="#revuel" class="list-group-item">Journals</a>
                            <a data-toggle="modal" href="#revuel" class="list-group-item">Edits</a>
                            <a data-toggle="modal" href="#revuel" class="list-group-item">Tfc/Memoires</a>
                            <a data-toggle="modal" href="#revuel" class="list-group-item">Discours</a>
                            <a data-toggle="modal" href="#revuel" class="list-group-item">Cours</a>
                            <a data-toggle="modal" href="#revuel" class="list-group-item">Dictionnaires</a>
                        </ul>
</body>
</html>