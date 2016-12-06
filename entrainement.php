<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BONJOUR</title>
	<style>
	h2
	{
		margin:0; 
		font-size: 15px; 
		color:red;
	}
	table tr td
	{
		border: 1px solid black;
		border-collapse: collapse;
	}
	</style>
</head>
<body>
<h2>Ecriture et Affichage</h2>
<?php
// Voici un commentaire sur une ligne
/*
Commentaire sur plusieurs lignes
*/

/*
Instruction d'affichage :
echo / print
Font toutes les deux la même chose.
Elles 'rajoute' des chaines de caractères à la suite du fichier généré.
*/
echo 'J\'affiche quelque chose.';
echo '<br>';
echo 'COUCOU';
?>
<span class="prenom">
<?php 
echo 'Nicolas';
?>
</span> <br>
<span class="prenom"><?= 'Nicolas' ?></span>
<hr>
<h2>Variables - Types de données - Déclaration - affectation</h2>
<?php
// Déclarer une variable.
$i;
$i = 3;
echo 'La valeur de $i est : ' . $i;
// Types de données
// 4 : integer. Nombre entier
// 'chaine' : string --> chaine de charactère
// TRUE : bool --> booléen (boolean)
?>
<hr>
<h2>Constantes</h2>
<?php
// Constante : valeur retenue en mémoire qui ne changera jamais.
define('CAPITALE', 'Paris');
// define : fonction prédéfinie.
// 1er argument : nom de la constante. TOUJOURS EN MAJ
// 2eme argument : valeur de la constante.
echo CAPITALE;
echo '<br>';
echo __FILE__;
echo __LINE__;
// Constante magiques : UNDERSCORE UNDERSCORE NOMDELACONSTANTE UNDERSCORE UNDERSCORE
?>

<hr>
<h2>Structure conditionnelle (if/else)</h2>
<?php
$var1 = 'BONJOUR';
$var2 = 'SALUT';

// Affiche $var1
if(TRUE)
{
	echo $var1;
} else {
	echo $var2;
}

// Affiche $var2
if(FALSE)
{
	echo $var1;
} else {
	echo $var2;
}
echo '<br>';
// is_string(), is_int(), is_array()
if(is_string('CHAINE')) //Vérifie si c'est une chaine de caractère
{
	echo 'Ceci est une chaine de caractère';
}

echo '<br>';
echo 'empty() <br>';
// empty() vérifie si une valeur est vide
// Renvoie TRUE si vide. Renvoie FALSE si non vide.
if(empty(''))
{
	echo 'vide';
} else {
	echo 'non vide';
}
echo '<br>';
if(4 > 5)
{
	echo 'oui';
} else {
	echo 'non';
}
?>

<hr>
<h2>Ternaires</h2>
<?php

$age = 13;

//TERNAIRES
//	  CONDITION		   TRUE 		FALSE
echo ($age >= 13) ? 'Bienvenu' : 'Bouge de là';

echo '<br>';

// isset() vérifie si une variable est définie
echo (isset($qdfioqsdfho)) ? 'Defined' : 'Undefined';
?>
<hr>
<h2>Condition switch</h2>
<?php
$color = 'jaune';
switch ($color)
{
	case 'bleu':
		echo 'Vous aimez le bleu !';
	break;
	case 'rouge':
		echo 'Vous aimez le rouge !';
	break;
	case 'jaune':
		echo 'Vous aimez le jaune !';
	break;
	default:
		echo 'Vous n\'aimez rien :(';
	break;
}
?>
<hr>
<h2>Fonctions prédéfinies</h2>
<?php
echo 'Date : ';
echo date('d/m/Y');
echo '<br>';

echo empty('3');
echo FALSE;
var_dump(empty('3'));

echo '<hr>';

$email = 'coulange.n@evogue.fr';
// $pos = strpos($email, '@');
echo '<br>';
echo substr($email, 0, strpos($email, '@'));
echo '<br>';
// Longueur de la chaine de caractères
echo strlen('sdfsdf');
?>
<hr>
<h2>Fonctions utilisateur</h2>
<?php
// Une fonction est un morceau de code retenu en mémoire et que je peux appeler quand je veux.
function br()
{
	echo '<br>';
}
function brr()
{
	echo '<br><br><br>';
}
function hr()
{
	echo '<hr>';
}

function pair($int)
{
	return $int % 2 == 0;
}

var_dump(pair(3));

function bonjour($qui)
{
	return 'Bonjour ' . $qui . ' !';
}
br();
echo bonjour('Nicolas');


br();
function tva($prixHT, $taux = 20)
{
	return $prixHT * (1 + ($taux / 100));
}
echo tva(49);
br();
echo tva(49, -30);


// énoncé : Gérer le pluriel de 'degré'.
// 'degrés' si il y a plusieurs degrés.
// 'degré' s'il n'y en a qu'un.
br();
function meteo($saison, $temperature)
{
	$temperature = (abs($temperature) < 2) ? $temperature . ' degré.' : $temperature . ' degrés.';

	return 'Nous sommes en ' . $saison . ' et il fait ' . $temperature;
}
echo meteo('Hiver', -1.5);
br();

function facultatif() // fonction avec arguments facltatif.
{
	echo '<pre>'; print_r(func_get_args()); echo '</pre>';
}

facultatif('arg1', 'arg2', 'arg3');
facultatif('arg1', 3);

// PHP 7.0 UNIQUEMENT
function user(string $nom, int $age)
{
	echo 'Salut ' . $nom . '. Tu as ' . $age . ' ans.';
}

user('dj', 239329);
?>
<hr>
<h2>Boucles itératives</h2>
<?php
$i = 0;
while($i < 5)
{
	echo $i . '<br>';
	++$i;
}

for($i = 0; $i < 5; ++$i)
{
	echo $i . '<br>';
}
brr();

echo '<table>';
//Table de multiplication
for($i = 1; $i < 11; ++$i)
{
	echo '<tr>';
	for($j = 1; $j < 11; ++$j)
	{
		echo '<td>'.$j * $i.'</td>';
	}
	echo '</tr>';
}
echo '</table>';


// Trouver la somme des nombres multiples de 3 OU 5 entre 1 et 1000
// Projet Euler
?>
<hr>
<h2>LES ARRAYS</h2>
<?php
// Un array (ou tableau) est une liste de données.
$semaine = ['lundi', 'mardi', 'mercredi', 'jeudi', 'WEEK END', 7];
echo $semaine[0];
var_dump($semaine);
br();
echo '<pre>'; print_r($semaine); echo '</pre>';

foreach($semaine as $jour)
{
	echo $jour . '<br>';
}

$semaine = array('lundi', 'mardi', 'etc');
$hard = [
	'lundi' => 'dur', 
	'mardi' => 'bof', 
	'mercredi' => 'pouet'
	];

foreach($hard as $key => $value)
{
	echo $key . ' => ' . $value . '<br>';
}

$sum = 0;

for($i = 1; $i < 1001; ++$i)
{
	$sum += ($i % 3 == 0 || $i % 5 == 0) ? $i : 0;
}
brr();
echo $sum;
?>
<br><br><br><br><br><br><br>
</body>
</html>