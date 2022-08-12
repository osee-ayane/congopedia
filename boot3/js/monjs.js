$(function(){
  var para = $('#ldetail');
  var $para = $('#ldetai');
  var pop = $('#pop');
  var popa = $('#popa');
  var univers = $('#univers');
  var $univers = $('.univers');
  var $barrech = $('.reche');
  var barrech = $('#reche');
  var bouton = $('#btn_univ');
  var ouvrage = $('.ouvrages');
  var $dash = $('#dashe2');
  var liste = $('.listes');

//navbar
 $('#navbar').mouseleave(function(){
    $(this).fadeOut('slow');
  });
$('#contenu').click(function(){
  $('#navbar').fadeToggle('normal');
});
  /* variables du formulaire*/
  var nphone = $('#phone');
  var npass = $('#passw');
  var cpass = $('#passc');
  var bsuivant = $('#btnsv');
  /*personnalisation du formulaire*/
   //premier évènement : écoute du clavier
         nphone.keyup(function(){
            if($(this).val().length < 10){
              $(this).css({
                 borderColor: 'red',
                 color: 'red'              
              });
            }else{
               $(this).css({
                 borderColor: 'green',
                 color: 'green'  
               }); 
            }
         });
         //premier évènement : écoute du clavier
         npass.keyup(function(e){
            if($(this).val().length >= 11){
              $(this).css({
                 borderColor: 'red',
                 color: 'red'              
              });
              //$(this).append("Votre mot de passe ne doit pas depaaser 10 caractères");
            }else{
               $(this).css({
                 borderColor: 'green',
                 color: 'green'  
               }); 
            }
         });
          //deuxième évènement : confirmation de mot de passe
         cpass.keyup(function(){
           if($(this).val() != npass.val()){
             $(this).css({
                 borderColor: 'red',
                 color: 'red'  
              });
           }else{
             $(this).css({
                 borderColor: 'green',
                 color: 'green' 
             });
           }
         });
         //verification des champs vides
         $('#erreur').css('display', 'none');
        function verification(champ){
           if(champ.val() == ""){
              $('#erreur').css('display', 'block');
              champ.css({
                 borderColor : 'red',
                 color: 'red'
              });
           }
         }
        //écouter le click : verifier si un champ est vide
         bsuivant.click(function(e){
              //e.preventDefault();
              verification($('.form-control'));
         });

  $dash.css('display', 'none');
  $('#dashliv').click(function(){
    $('#listad').fadeToggle('slow');
    $('#dash2').fadeOut('slow');
  });
  
  barrech.css('display', 'none');
  univers.mouseover(function(){
    barrech.css('display', 'block');
    $(this).mouseleave(function(){
      barrech.css('display', 'none');
    });
  });
    //les options du domaine
    $univers.mouseover(function(){
    $barrech.css('display', 'block');
    $(this).mouseleave(function(){
      $barrech.css('display', 'none');
    });
  });
  //liste ajouter
    $('#typelivre').click(function(){
      $dash.fadeOut('slow');
    $('#listad').fadeIn('normal');
    });
  //popo over sur le nuero auteur
  $('#poptel').popover({placement:'right', trigger:'hover'});
//details sur le livre en hover
  para.css('display', 'none');
  pop.popover({placement:'right', trigger:'hover'});
  pop.mouseover(function(){
    para.css('display', 'block');
    $(this).mouseleave(function(){
      para.css('display', 'none');
    });
  });
  $para.css('display', 'none');
  popa.popover({placement:'right', trigger:'hover'});
   popa.mouseover(function(){
    $para.css('display', 'block');
    $(this).mouseleave(function(){
      $para.css('display', 'none');
    });
  });
// info-bull
$('input').tooltip();
//menu deroulant
// $('.dropdown').mouseover(function(){
//   $('.dropdown-menu').fadeIn('slow');
//   $(this).mouseleave(function(){
//     $('.dropdown-menu').fadeOut('slow');
//   });
// });
// Administration auteur
var ajpdf = $('#ajoutpdf');
var ajaudio = $('#ajoutaudio');
var ajvideo = $('#ajoutvideo');
var parametre = $('#parametres');
ajpdf.css('display', 'none');
ajaudio.css('display', 'none');
ajvideo.css('display', 'none');
parametre.css('display', 'none');
$('#pdfaj').click(function(){
  ajpdf.fadeToggle('slow');
});
$('#audioaj').click(function(){
  ajaudio.fadeToggle('slow');
});
$('#videoaj').click(function(){
  ajvideo.fadeToggle('slow');
});
$('#paraaj').click(function(){
  parametre.fadeToggle('slow');
});
//Gestion des autres domaines
$('#autredomaines').css('display', 'none');
$('#ouvertureautredom').dblclick(function(){
  $('#autredomaines').slideToggle('normal');
});
// utilisation d'ajax pour le commentaire sur les livres
var $comment = $('#comment a');
var $formul = $('#comment form');
var $boutonc = $('#comementer');
var $contenu = $('#commentaire').val();
$formul.css('display', 'none');
$comment.click(function(){
  $formul.slideToggle('normal');
});
//Affichage des domaines
$('#dispdomaines').css('display', 'none');
$('#lesdomaines').click(function(){
  $('#dispdomaines').slideToggle('slow');
});
//afficher auteur
$('#dispauteurs').css('display', 'none');
$('#lesauteurs').click(function(){
  $('#dispauteurs').slideToggle('slow');
});
//afficher lecteur
$('#dispadmin').css('display', 'none');
$('#lesadmins').click(function(){
  $('#dispadmin').slideToggle('slow');
});
//afficher administrateur
$('#displecteur').css('display', 'none');
$('#leslecteurs').click(function(){
  $('#displecteur').slideToggle('slow');
});
//formualire d'ajout domaine
$('#formadomaine').css('display', 'none');
$('#ajouterdom').click(function(){
  $('#formadomaine').slideToggle('slow');
});
//formualire d'ajout admin
$('#formadmin').css('display', 'none');
$('#ajouteradmin').click(function(){
  $('#formadmin').slideToggle('slow');
});
// les pages administarteur
$('#dispback').css('display', 'none');
$('#backoffice').click(function(){
  $('#dispback').slideToggle('slow');
  $('#result_admin').removeAttr('class', 'col-');
  $('#result_admin').attr('class', 'col-sm-9 col-xs-10');
});
//liste des options
$('#menu').on('shown.bs.collapse', function () {
$('#icone').removeClass('glyphicon-folder-close').addClass('glyphicon-folder-open');
})
$('#menu').on('hidden.bs.collapse', function () {
$('#icone').removeClass('glyphicon-folder-open').addClass('glyphicon-folder-close');
});
});
//La serialisation du formulaire
// $('#formulaire').submit(function(){
//   var donnees = $(this).serialize();
// });
  // $boutonc.click(function(){
  //   // Instatiation de l'objet XmlHttpRequest
  //   $.post(
  //       'send_mail.php',
  //       {
  //         contenu : $("#comementer").val();
  //       },
  //       function(data){
  //            if (data == "Success") {
  //             $('#comment').html("<p>comementaire envoyer avec succès</p>");
  //            }else{
  //             $('#comment').html("<p>Erreur lors de l\'envoie</p>");
  //            }
  //       },
  //       'text'
  //   );
  // });

//Fin de la fonction
// });





