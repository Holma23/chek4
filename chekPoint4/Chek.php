<?php
//mavar, $mavar, $var5, $_ mavar, $_5var, $__élément1, $hotel4*
//les noms valides sont : $mavar, $var5, $_ mavar, $__élément1
$x="PostgreSQL";//affiche PostgreSQL
$y="MySQL";//affiche MySQL
$z=&$x;//$z=$PostgreSQL Affiche PostgreSQL
echo $z."<br>";
$x="PHP 5";//affiche php 5
$y=&$x;//$y=$ php5 affiche php5 $z==$x affiche php5
echo $x."<br>".$y."<br>".$z."<br>";
echo "<br>".$GLOBALS['x']."<br>".$GLOBALS['y']."<br>".$GLOBALS['z']."<br>";
?>
<?php
$x="7 personnes";//affichage 7 personnes
$y=(integer) $x;// affiche 7
$x="9E3";// reinitialisation affichage 9000 il ecrase 7 personnes et $y affiche 9000
$z=(double) $x; //affichage nbre flttant9000
echo "<br>".$x."<br>".$y."<br>".$z."<br>";// 9000 9000 9000
?>
