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
                       <h2 style="color:rgb(92, 209, 254);">Proposition de catalogue</h2><br><br>
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-8">
                                <h4 class="help-block" style="font-style:italic;color: rgb(51, 122, 183); font-size: 15px;"><u>+ Les livres du jour</u></h4>
                                 <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 card" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                        <a href="mespdf/laravel-fr.pdf" id="popa" data-toggle="popover" data-content="Livre des sciences finctions un peu romantique destines aux adolescents avec signatures derriere le dos" title="LARAVEL" class="thumbnail">
                                            <img src="image/im1.jpg" alt="livre1" class="card-img-top img-rounded">
                                            <a href="#" class="card-title">Tout savoir sur Laravel</a>
                                            <a href="#" class="card-body">Auteur : Mateo21
                                            Année Pub : 2017
                                            Edition : Ebooks 02
                                            Langue : Fr.
                                            Page :229
                                            </a>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 card" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                        <a href="mespdf/pdf1.pdf" id="pop" data-toggle="popover" data-content="Bibliotheque web" title="jQUERY" class="thumbnail">
                                            <img src="image/im2.jpg" alt="livre2" class="card-img-top img-rounded">
                                            <a href="#" class="card-title">jQuery, Ecrivez moins pour obtenir plus!</a>
                                            <a href="#" class="card-body">Auteur : Tit Toinou
                                            Année Pub : 2018
                                            Edition : OpenClassRoom
                                            Langue : Fr.
                                            Page :86
                                            </a>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 card" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                        <a href="mespdf/pdf2.pdf" id="pop" data-toggle="popover" data-content="Bonne pratique des droits" title="Droit public" class="thumbnail">
                                            <img src="image/im3.jpg" alt="livre3" class="card-img-top img-rounded">
                                            <a href="#" class="card-title">Droit public pour tous</a>
                                            <a href="#" class="card-body">Auteur : Jean de Dieu MALU
                                            Année Pub : 2007
                                            Edition : Harmattan
                                            Langue : Fr.
                                            Page :300
                                            </a>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 card" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                        <a href="mespdf/pdf3.pdf" id="pop" data-toggle="popover" data-content="Medecines modernes, defis des nations, archives historiquement approvés" title="Voyage vers les Medecines" class="thumbnail">
                                            <img src="image/im4.jpg" alt="livre4" class="card-img-top img-rounded">
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
                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-8 pull-right" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                <h4 class="help-block" style="font-style:italic;color: rgb(51, 122, 183); font-size: 15px;"><u>+ Les Revues</u></h4>
                                                                 <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 card" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                        <a href="mespdf/pdf4.pdf" class="thumbnail">
                                            <img src="image/im5.jpg" alt="livre1" class="card-img-top img-rounded">
                                            <a href="#" class="card-title">Géologie</a>
                                            <a href="#" class="card-body">Auteur : François Platraut
                                            Année Pub : 2020
                                            Edition : EdiLivre
                                            Langue : Fr.
                                            Page : 269
                                            </a>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 card" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                        <a href="#" class="thumbnail">
                                            <img src="image/im1.jpg" alt="livre2" class="card-img-top img-rounded">
                                            <a href="#" class="card-title">Economie monétaire</a>
                                            <a href="#" class="card-body">Auteur : Atelier 2010
                                            Année Pub : 2011
                                            Edition : Melbourg
                                            Langue : Fr.
                                            Page : 129
                                            </a>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 card" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                        <a href="mespdf/pdf4.pdf" class="thumbnail">
                                            <img src="image/im3.jpg" alt="livre3" class="card-img-top img-rounded">
                                            <a href="#" class="card-title">Histoire politiques</a>
                                            <a href="#" class="card-body">Auteur : Benoit Marrin
                                            Année Pub : 2013
                                            Edition : EdiLivres
                                            Langue : Fr.
                                            Page : 320
                                            </a>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 card" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                        <a href="mespdf/pdf5.pdf" class="thumbnail">
                                            <img src="image/im2.jpg" alt="livre4" class="crad-img-top img-rounded">
                                            <a href="#" class="card-title">Philodophie Africaine</a>
                                            <a href="#" class="card-body">Auteur : Tempels
                                            Année Pub : 1990
                                            Edition : Dunond
                                            Langue : Fr.
                                            Page : 300
                                            </a>
                                        </a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-8">
                                <h4 class="help-block" style="font-style:italic;color:rgb(51, 122, 183); font-size: 15px;"><u>+ Livres recemment ajoutés</u></h4>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 card" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                        <a href="mespdf/pdf6.pdf" class="thumbnail">
                                            <img src="image/im2.jpg" alt="livre1" class="card-img-top img-rounded">
                                            <a href="#" class="card-title">Fondement de la pensée sociale</a>
                                            <a href="#" class="card-body">Auteur : Gervain Musamba
                                            Année Pub : 2016
                                            Edition : Ebooks 02
                                            Langue : Fr.
                                            Page :102
                                            </a>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 card" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                        <a href="mespdf/pdf7.pdf" class="thumbnail">
                                            <img src="image/im4.jpg" alt="livre2" class="crad-img-top img-rounded">
                                            <a href="#" class="card-title">Fleur du mal</a>
                                            <a href="#" class="card-body">Auteur : Charles Beaudelaire
                                            Année Pub : 1814
                                            Edition : Ebooks 02
                                            Langue : Fr.
                                            Page :95
                                            </a>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 card" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                        <a href="mespdf/pdf8.pdf" class="thumbnail">
                                            <img src="image/im1.jpg" alt="livre3" class="crad-img-top img-rounded">
                                            <a href="#" class="card-title">Père Riche, Père pauvre</a>
                                            <a href="#" class="card-body">Auteur : Robert K.
                                            Année Pub : 2014
                                            Edition : Harmattant
                                            Langue : Fr.
                                            Page : 212
                                            </a>
                                        </a>
                                    </div>
                                    <!-- <div class="col-sm-6">
                                        <a href="#" class="thumbnail">
                                            <img src="image/im5.jpg" alt="livre4" class="img-rounded">
                                        </a>
                                    </div> -->
                                </div> 
                            </div>
                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-8 pull-right">
                                <h4 class="help-block" style="font-style:italic;color: rgb(51, 122, 183); font-size: 15px;"><u>+ Les Arcticles</u></h4>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 card" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                        <a href="mespdf/pdf9.pdf" >
                                            <img src="image/im3.jpg" alt="livre1" class="crad-img-top img-rounded">
                                            <a href="#" class="card-title">Business @speed...</a>
                                            <a href="#" class="card-body">Auteur : Bill Gates
                                            Année Pub : 2010
                                            Edition : ...
                                            Langue : en.
                                            Page : 229
                                            </a>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 card" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                        <a href="mespdf/pdfa.pdf" class="thumbnail">
                                            <img src="image/im4.jpg" alt="livre2" class="card-img-top img-rounded">
                                            <a href="#" class="card-title">Petit Prince</a>
                                            <a href="#" class="card-body">Auteur : Atoine de Saint-Exupery
                                            Année Pub : 2011
                                            Edition : MediasPaul
                                            Langue : Fr.
                                            Page :220
                                            </a>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 card" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                        <a href="mespdf/pdfb.pdf" class="thumbnail">
                                            <img src="image/im2.jpg" alt="livre3" class="card-img-top img-rounded">
                                            <a href="#" class="card-title">Agriculture notre passion</a>
                                            <a href="#" class="card-body">Auteur : Mateo21
                                            Année Pub : 2017
                                            Edition : Ebooks 02
                                            Langue : Fr.
                                            Page :229
                                            </a>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 card" style="color:rgb(51, 122, 183); font-size:10px; font-family: 'Bell MT">
                                        <a href="mespdf/pdfc.pdf" class="thumbnail">
                                            <img src="image/im1.jpg" alt="livre4" class="crad-img-top img-rounded">
                                            <a href="#" class="card-title">La Finance rdcienne, facteur du sciecle</a>
                                            <a href="#" class="card-body">Auteur : Mateo21
                                            Année Pub : 2017
                                            Edition : Ebooks 02
                                            Langue : Fr.
                                            Page :229
                                            </a>
                                        </a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
            <hr size="15" style="color:blue">
    </div>
    <!-- bienvenu dans le monde js -->
   <!--  <script src="boot3/js/jquery.js"></script> -->
    <script src="boot3/js/monjs.js"></script>
</body>
</html>