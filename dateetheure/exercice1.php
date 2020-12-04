<meta charset="utf-8" />
<?php 
setlocale(LC_TIME,'fr');
// ucfirst = premiere lettre en majuscule .
$var =ucfirst(strftime ('%A %d %B %Y'));
var_dump($var);

// $date = new datetime();
// $date = $date1;
// var_dump($date) ;
// echo $date1 ->format (D -j -F -Y );

// echo (new \DateTime())->format("l  j F Y");



setLocale(LC_TIME, 'fr_FR.utf8','fra');
$maintenant = new DateTime();
echo $maintenant->format('l j F Y ');











