<?php
include('fichier2.php');
include_once('fichier2.php');

require('fichier2.php');
require_once('fichier2.php');
?>

_once --> on n'importe le fichier une seule fois.

include --> si le fichier n'est pas trouvé -> WARNING and go on

require --> si le fichier n'est pas trouvé -> FATAL ERROR and stop