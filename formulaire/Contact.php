<!-- <!doctype html> -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Jardintou accueil</title>
</head>
<body>


<!-- logo+tout jardin -->
<div class="row">
  <div class="col-12 col-md-6 "> 
    <img src="img/jarditou_logo.jpg" class="img-fluid" alt="Image responsive">
  </div>
  <div class="col-12 col-md-6"> 
    <h1 class="text-right mt-3"><strong>Tout le jardin</strong></h1>
  </div> 
</div>
<!-- navigation -->
   
 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Jarditou.com</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
    </button>   
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.html">Accueil </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tableau.html">Tableau</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.html">contact</a>
      </a> 
    </li>
  </ul>
<form class="form-inline my-2 my-lg-0">
  <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
</form>
 </div>
</nav>
  <!--banniere promotion  -->
<div class="row">
  <div class="col-12 col-md-12" >
    <img   src="img/promotion.jpg" class="img-fluid w-100 " alt="Image responsive">
  </div>
</div>
<div class="col-12 col-md-12" >
  <p>Ces zones sont obligatoires*</p>
    <h1>Coordonnée</h1>
<!-- formulaire -->
  <style>
    .message {
      color:red;
    }
  </style>
<form action ="formulaireScript.php" name="form" method="POST" onSubmit="return checkForm();">
  <div class="form-group">
  <!-- champ nom -->
    <label for="nom">Nom*</label>    
    <input type="text" class="form-control" id="nom" name ="nom" placeholder="Veuillez saisir votre nom" value ="<?php if (isset($_GET["erreur"]) && $_GET["erreur"] == "nom") { echo $_GET["valeur"];} ?>"> 
    <div classe ="message">
    <?php
   
    
    
    if ( isset($_GET["erreur"]) && $_GET["erreur"] == "nom")
    {
    echo"Le nom doit être renseigné."; 
    echo "Le nom ne doit contenir que des lettres et des espaces."; 
    } 
   
    ?>
    </div>
  </div>
<!-- id pour js -->
<div  id="idNom" ></div> 
  <div class="form-group">
  <!-- champ prenom -->
  <label for="prenom">Prénom*</label>
  <input type="text" class="form-control" id="prenom" name = "prenom" placeholder="Veuillez saisir votre prénom" value="<?php if (isset($_GET["erreur"]) && $_GET["erreur"] == "prenom") { echo $_GET["valeur"];} ?>">
  <?php
  if ( isset($_GET["erreur"]) && $_GET["erreur"] == "prenom") 
  {
  echo"Le prénom doit être renseigné."; 
  echo "Le nom ne doit contenir que des lettres et des espaces."; 
  }
  ?>
</div>
<!-- id pour le js -->
<div id="idPrenom"></div>
  <p>Sexe*</p>
  <fieldset class="form-group">
  <div class="form-check form-check-inline">
  <!-- bouton sexe -->
  <input class="form-check-input" type="radio" name="sexe" id="feminin" value="option1"<?php if (isset($_GET["erreur"]) && $_GET["erreur"] == "sexe") { echo $_GET["valeur"];} ?>">
  <label class="form-check-label" for="inlineRadio1">Féminin </label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="sexe" id="masculin" value="option2">
  <label class="form-check-label" for="inlineRadio2">Masculin</label>
  <?php
  if ( isset($_GET["erreur"]) && $_GET["erreur"] == "feminin") 
  {
  echo"Le sexe doit être coché.";  
  }
  ?>
</div> 
<!-- id pour le js sexe -->
<div id="idSexe"></div>
  <div class="form-group">
  <!-- date de naissance -->
  <label for="naissance">Date de naissance*</label>
  <input type="date" class="form-control" id="naissance" name ="naissance" placeholder="jj/mm/aaaa<?php if (isset($_GET["erreur"]) && $_GET["erreur"] == "naissance") { echo $_GET["valeur"];} ?>">
  <?php
  if ( isset($_GET["erreur"]) && $_GET["erreur"] == "naissance") 
  {
  echo"Le date de naissance doit être renseigné.";  
  }
  ?>
</div>
<!-- id pour js date de naissance-->
<div id="idNaissance"></div>
  <div class="form-group">
  <!--champ code postale -->
  <label for="code postale">Code postale</label>
  <input type="texte" class="form-control" name="postal" id="code postale" value ="<?php if (isset($_GET["erreur"]) && $_GET["erreur"] == "codePostale") { echo $_GET["valeur"];} ?>">
  <?php
  if ( isset($_GET["erreur"]) && $_GET["erreur"] == "codePostale") 
  {
    echo"Le code postale doit être renseigné.Il doit contenir que des chiffres ."; 
  }
  ?>
</div>
<div class="form-group">
<!-- champ adresse -->
  <label for="adresse">adresse</label>
  <input type="text" class="form-control"name="adresse" id=adresse" value ="<?php if (isset($_GET["erreur"]) && $_GET["erreur"] == "adresse") { echo $_GET["valeur"];} ?>">
  <?php
  if ( isset($_GET["erreur"]) && $_GET["erreur"] == "adresse") 
  {
    echo"L'adresse' doit être renseigné."; 
  }
  ?>
</div>
<div class="form-group">
<!-- champ ville -->
  <label for="ville">Ville*</label>  
  <input type="text" class="form-control" name="ville" id="ville" value="<?php if (isset($_GET["erreur"]) && $_GET["erreur"] == "ville") { echo $_GET["valeur"];} ?>">
  <?php

  if ( isset($_GET["erreur"]) && $_GET["erreur"] == "ville") 
  {
    echo"La ville doit être renseigné."; 
     
  }
  ?>
</div>
<!-- id pour le js ville -->
<div id="idVille"></div>
  <div class="form-group">
  <!-- champ email -->
  <label type for="email">Email*</label>
  <input type="text" class="form-control" id="email" name="email" placeholder="dave.loper@afpa.fr" value="<?php if (isset($_GET["erreur"]) && $_GET["erreur"] == "email") { echo $_GET["valeur"];} ?>"> 
  <?php
  if (isset($_GET["erreur"]) && $_GET["erreur"] == "email") 
  {
    echo"L'email' doit être renseigné."; 
    echo "Format d'email invalide."; 
  }
  ?>
</div>
<!-- id pour le js email -->
<div id="idEmail"></div>
  <h1>Votre demande</h1>
  <div class="form-group">
  <!-- selecteur de sujet -->
  <label for="sujet">Sujet</label>
  <select class="form-control" id="sujet" name="sujet" >
  <option value = "defaut"> Veuillez séléctionner un sujet</option>
  <option value = "questionProduit">Question sur un produit</option>
  <option value = "reclamation">Réclamation</option>
  <option>Autres</option>
  </select>
  </div>
  <div class="form-group"></div>
  <!-- champ question -->
  <label for="question">Votre question*:</label>
  <textarea class="form-control" name="question" id="question rows="3" value="<?php if (isset($_GET["erreur"]) && $_GET["erreur"] == "question") { echo $_GET["valeur"];} ?>"></textarea>
  <?php
  if ( isset($_GET["erreur"]) && $_GET["erreur"] == "question") 
  {
    echo"La question doit être renseigné.";  
  }
  ?>
</div>
<!-- id pour js question -->
<div id="question"></div>
</div> 
</div>  
</div>
<br>
<!-- checkbox -->
<div class="form-check">
<!-- bouton cgu -->
  <input class="form-check-input" name="cgu" type="checkbox"  id="cgu" value="cocher"<?php if (isset($_GET["erreur"]) && $_GET["erreur"] == "cgu") { echo $_GET["valeur"];} ?>">
  
  
  <label class="form-check-label" for="cgu">J'accepte le traitement informatique de ce formulaire</label>
  <?php
  if ( isset($_GET["erreur"]) && $_GET["erreur"] == "cgu") 
  {
    echo"Le cgu doit être coché.";  
  }
  ?>
</div>  
<!-- id pour js cgu -->
<div id="idCgu"></div>

<br>
<!-- bouton envoyer/annuler -->
<button type="submit" class="btn btn-dark">Envoyer</button>
<button type="button" class="btn btn-dark">Annuler</button> 
</form>  
</div>
<br>
<!-- navigation fin de page -->
<div class="row mt-3">
<div class="col-12 col-md-12">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<!-- !-- Toggler/collapsibe Button --> 
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>   
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav">
 <li class="nav-item">
<a class="nav-link" href="#">Mentions légales</a>
 </li>
 <li class="nav-item">
<a class="nav-link" href="#">Horaires</a>
 </li>
 <li class="nav-item">
<a class="nav-link" href="#">Plan du site</a>
 </li>
  </ul>
    </div> 
</div>
 </nav>

 

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    

<!-- <script src="exercice5.js"></script> -->

</body>
</html>