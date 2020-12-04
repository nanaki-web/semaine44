<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Atelier PHP N°4 - Affichage de la liste</title>
</head>
<body> 
<div class="container">
<div class="row shadow mt-3 mb-3 mx-0 p-3 rounded bg-dark">
<div class="col-md-2 text white-50 text-right"></div>
<div class="col-md-8 h2 text-white-50 text-center">Tableau</div>
</div>
</div>
<div class="row">
    <div class="col-12 col-md-12">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr class="table-secondary">
                        <th class="w-25">Photo</th>
                        <th>ID</th>
                        <th>Réference</th>
                        <th>Libellé</th>
                        <th>Prix</th>
                        <th>Stock</th>
                        <th>Couleur</th>
                        <th>Ajout</th>
                        <th>Modif</th>
                        <th>Bloqué</th>
                    </tr>
                </thead>
                <tbody>
            
        

    


<?php
require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
$db = connexionBase(); // Appel de la fonction de connexion
$requete = "SELECT * FROM produits";
$result = $db->query($requete);

if (!$result) 
{
    $tableauErreurs = $db->errorInfo();
    echo $tableauErreur[2]; 
    die("Erreur dans la requête");
}

if ($result->rowCount() == 0) 
{
// Pas d'enregistrement
    die("La table est vide");
}

while ($row = $result->fetch(PDO::FETCH_OBJ))
{
    echo '<tr class="bg-warning">';
    echo '<td><img src="img/'.$row->pro_id.'.jpg" class="img-fluid" alt="Image responsive"></td>';
    echo "<td>".$row->pro_id."</td>";
    echo "<td>".$row->pro_ref."</td>";
    echo '<td><a href="detail.php?id='.$row->pro_id.'" title='.$row->pro_libelle.'>'.$row->pro_libelle.'</a></td>';
    echo "<td>".$row->pro_prix."</td>";
    echo "<td>".$row->pro_stock."</td>";
    echo "<td>".$row->pro_couleur."</td>";
    echo "<td>".$row->pro_d_ajout."</td>";
    echo "<td>".$row->pro_d_modif."</td>";
    $bloque = "";

if(($row->pro_bloque)==1)
{
    $bloque="bloqué";
    echo '<td><p class="bg-danger text-white">'.$bloque."</p></td>";
}
else
{
    echo "<td>".$bloque."</td>";
}
        
    echo "</tr>";
}
?>
            </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
