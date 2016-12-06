<?php
// GET est une méthode HTTP qui permet de transmettre des informations entre deux pages web via l'URL de la page ciblée.

// www.monsite.fr/boutique.php?CLE=VALEUR&CLE=VALEUR&CLE=VALEUR

var_dump($_GET);

// $_GET est une supervariable. Elle est toujours présente et définie. Cependant, elle peut être vide.
// Toujours vérifier l'existance d'un index.
if(isset($_GET['action']))
{
	echo $_GET['action'];
}


