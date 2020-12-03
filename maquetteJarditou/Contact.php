<?php
// vérification de l'existance du fichier entete.php
if (file_exists("entete.php") ) 
{
    include("entete.php");
} 
else 
{
     // Erreur (afficher un message ou redirection)
     echo "oups , désolée !! ";
} 

?>


<div class="col-12 col-md-12" >
  <p>Ces zones sont obligatoires*</p>
    <h1>Coordonnée</h1>
<!-- formulaire -->
  
<form action ="formulaireScript.php" name="form" method="POST" onSubmit="return checkForm();">
  <div class="form-group">
  <!-- champ nom -->
    <label for="nom">Nom*</label>    
    <input type="text" class="form-control" id="nom" name ="nom" placeholder="Veuillez saisir votre nom" value ="<?php if (isset($_GET["erreur"]) && $_GET["erreur"] == "nom") { echo $_GET["valeur"];} ?>"> 
    <?php
    if ( isset($_GET["erreur"]) && $_GET["erreur"] == "nom")
    {
    echo '<p class = "mess">'. "Le nom doit être renseigné."."</p>"; 
    echo '<p class ="mess">'."Le nom ne doit contenir que des lettres et des espaces."."</p>"; 
    } 
    ?>
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
  echo '<p class ="mess">'."Le prénom doit être renseigné."."</p>"; 
  echo '<p class ="mess">'."Le nom ne doit contenir que des lettres et des espaces."."</p>"; 
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
  <br>
  <?php
  if ( isset($_GET["erreur"]) && $_GET["erreur"] == "sexe") 
  {
  echo '<p class="mess">'."Le sexe doit être coché."."</p>";  
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
  echo '<p class ="mess">'."Le date de naissance doit être renseigné."."</p>";  
  }
  ?>
</div>
<!-- id pour js date de naissance-->
<div id="idNaissance"></div>
  <div class="form-group">
  <!--champ code postale -->
  <label for="code postale">Code postale</label>
  <input type="texte" class="form-control" name="postal" id="code " value ="<?php if (isset($_GET["erreur"]) && $_GET["erreur"] == "postal") { echo $_GET["valeur"];} ?>">
  <?php
  if ( isset($_GET["erreur"]) && $_GET["erreur"] == "postal") 
  {
    echo '<p class = "mess">'."Le code postale doit être renseigné.Il doit contenir 5 chiffres ."."</p>"; 
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
    echo '<p class = "mess">'."L'adresse doit être renseigné."."</p>"; 
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
    echo '<p class = "mess">'."La ville doit être renseigné."."</p>"; 
     
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
    echo '<p class = "mess">'."L'email doit être renseigné avec le bon format."."</p>"; 
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
    echo '<p class ="mess">'."La question doit être renseigné."."</p>";  
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
    echo '<p class = "mess">'."Le cgu doit être coché."."</p>";  
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
<?php
    // vérification de l'existance du fichier pieddepage.php
    if (file_exists("pieddepage.php") ) 
    {
        include("pieddepage.php");
    } 
    else 
    {
         // Erreur (afficher un message ou redirection)
         echo "oups , désolée !! ";
    } 
    

?>