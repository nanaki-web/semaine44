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
<!-- Tableau -->
            <div class="row">
                <div class="col-12 col-md-12">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                    <thead>
                    <tr class="table-secondary">
                        <th>Photo</th>
                        <th>ID</th>
                        <th>Catégorie</th>
                        <th>Libellé</th>
                        <th>Prix</th>
                        <th>Couleur</th>
                    </tr>   
                    </thead>
                    <tbody>         
                    <tr class="bg-warning">
                        <td><img src="img/7.jpg" class="img-fluid" alt="Image responsive"></td>
                        <td>7</td>
                        <td>Barbecues</td>
                        <td>Aramis</td>
                        <td>110.00€</td>
                        <td>Brun</td>
                    </tr>
                    <tr>
                        <td><img src="img/8.jpg" class="img-fluid" alt="Image responsive"></td>
                        <td>8</td>
                        <td>Barbecues</td>
                        <td>Athos</td>
                        <td>249.99€</td>
                        <td>Noir</td>
                    </tr>
                    <tr class="bg-warning">
                        <td><img src="img/11.jpg" class="img-fluid" alt="Image responsive"></td>
                        <td>11</td>
                        <td>Barbecues</td>
                        <td>Clatronic</td>
                        <td>135.90€</td>
                        <td>Chrome</td>
                     <tr>
                        <td><img src="img/12.jpg" class="img-fluid" alt="Image responsive"></td>
                        <td>12</td>
                        <td>Barbecues</td>
                        <td>Camping</td>
                        <td>88.00</td>
                        <td>Noir</td>
                     </tr>
                     <tr class="bg-warning">
                        <td><img src="img/13.jpg" class="img-fluid" alt="Image responsive"></td>
                        <td>13</td>
                        <td>Brouette</td>
                        <td>Green</td>
                        <td>49.00€</td>
                        <td>Verte</td>
                     </tr>   
                    </tbody>        
                    </table>
                  </div>
                </div>            
            </div>

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
    
                  
                  

           

            
              










    