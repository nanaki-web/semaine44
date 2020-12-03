<?php
var_dump($_POST);
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
if (isset($_POST["sexe"])) 
{
   $sexe = $_POST["sexe"];
}
else 
{ // non coché => rien de posté
    $sexe = "";
}

$naissance = test_inputs($_POST['naissance']) ;
$ville = test_inputs($_POST['ville']) ;
$postal = test_inputs($_POST["postal"]);
$adresse = test_inputs($_POST["adresse"]);
$email = test_inputs($_POST['email']) ;
$sujet = test_inputs($_POST['sujet']) ;
$question = test_inputs($_POST['question']) ;
if(isset($_POST["cgu"]))
{
     $cgu = $_POST['cgu'] ;
}
else
{// non coché => rien de posté
    $cgu = "";
}
//anti injection
function test_inputs($entree)
    {
        $entree = trim($entree);
        $entree = stripslashes($entree);
        $entree = htmlspecialchars($entree);
        return $entree;
    }


// champ nom
if (empty($nom) || !preg_match("/^[a-zA-ZÀ-ÖØ-öø-ÿœŒ]*$/", $nom) || strlen($nom) > 12)
{       
    header("Location:Contact.php?erreur=nom&valeur=".$nom);  
    exit;  
} 
else
{
    echo "nom : ".$nom."<br>";
}
// champ prenom
if (empty($prenom) || !preg_match("/^[a-zA-ZÀ-ÖØ-öø-ÿœŒ]*$/", $prenom)|| strlen($nom) > 12) 
{
    header("Location:Contact.php?erreur=prenom&valeur=".$prenom);  
    exit; 
}
else
{
    echo "prenom: ".$prenom."<br>";
}
// bouton sexe
if (empty($sexe) )
{
    header("Location:Contact.php?erreur=sexe&valeur=".$sexe); 
    exit;  
}
else
{
    echo "sexe: ".$sexe."<br>";
}
// champ date de naissance
if (empty($naissance)) 
{
    header("Location:Contact.php?erreur=naissance&valeur=".$naissance); 
    exit;  
}
else
{
    echo "date de naissance : ".$naissance."<br>";
}
// champ codepostale
if (empty($postal)|| !preg_match("/^[0-9]{5}$/", $postal) )
{
    header("Location:Contact.php?erreur=postal&valeur=".$postal);  
    exit; 
}
else
{
    echo "code postale : ".$postal."<br>";
}
// champ adresse 
if (empty($adresse)|| !preg_match("/^[0-9\/\a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ\s-]{1,50}$/", $adresse))
{
    header("Location:Contact.php?erreur=adresse&valeur=".$adresse);   
    exit;
}
else
{
    echo "adresse : ". $adresse."<br>";
}
// champ ville
if (empty($ville)|| !preg_match("/^[a-zA-ZÀ-ÖØ-öø-ÿœŒ]*$/", $ville)) 
{
    header("Location:Contact.php?erreur=ville&valeur=".$ville); 
    exit;  
}
else
{
    echo "ville: ".$ville."<br>";
}
// champ email
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
    header("Location:Contact.php?erreur=email&valeur=".$email); 
    exit;  
}
else
{
    echo "email: ".$email."<br>";
}
// champ question
if (empty($question)) 
{
    header("Location:Contact.php?erreur=question&valeur=".$question);  
    exit;
}
else
{
    echo "question : ".$question."<br>";
}
// bouton cgu
if (empty($cgu)) 
{
    header("Location:Contact.php?erreur=cgu&valeur=".$cgu);
    exit;
        
}
else
{
    echo "cgu: ".$cgu."<br>";
        
}



// $nom = $_POST["nom"];
// $prenom = $_POST["prenom"];
// if (isset($_POST["sexe"])) 
// {
//    $sexe = $_POST["sexe"];
// }
// else 
// { // non coché => rien de posté
//     $sexe = "";
// }

// $naissance = $_POST['naissance'];
// $ville = $_POST['ville'];
// $email = $_POST['email'];
// $sujet = $_POST['sujet'];
// $question = $_POST['question'];
// if(isset($_POST["cgu"]))
// {
//     $cgu = $_POST['cgu'];
// }
// else
// {
//     $cgu = "";
// }

// $vide = [];
// $nonVide = [];
// //nom
// if (empty($nom))
// {  
//     array_push($vide,[$nom]);
    
// }
// else
// {
//     array_push($nonVide,[$nom]);
// }
// //prenom
// if (empty($prenom))
// {
//      array_push($vide,[$prenom]);
// }

// else
// {
//     array_push($nonVide,[$prenom]);

// }
// //sexe
// if (empty($sexe))
// {
//     array_push($vide,["$sexe"]);
// }
// else
// {
//     array_push($nonVide,["$sexe"]);
// }
// //naissance
// if (empty($naissance))
// {
//     array_push($vide,[$naissance]);
// }
// else
// {
//     array_push($nonVide,[$naissance]);
// }
// //ville
// if(empty($ville))
// {
//     array_push($vide,[$ville]);
// }
// else
// {
//     array_push($nonVide,[$ville]);
// }
// //email
// if(empty($email))
// {
//     array_push($vide,[$email]);
// }
// else
// {
//     array_push($nonVide,[$email]);
// }
// //sujet
// if ($sujet === "defaut")
// {
    
//     array_push($vide,[$sujet]);
// }
// else
// {
//     array_push($nonVide,[$sujet]);
// }
// //question
// if(empty($question))
// {
//     array_push($vide,[$question]);
// }
// else
// {
//     array_push($nonVide,[$question]);
// }
// //cgu
// if(empty($cgu))
// {
//     array_push($vide,[""]);
// }
// else
// {
//     array_push($nonVide,[$cgu]);
// }

// echo "champs vide :".count($vide);
// echo "champs non vide :".count($nonVide);

// var_dump($nom);
// var_dump($prenom);
// var_dump($sexe);
// var_dump($naissance);
// var_dump($ville);
// var_dump($email);
// var_dump($sujet);
// var_dump($question);
// var_dump($cgu);

// var_dump($_POST);
?>