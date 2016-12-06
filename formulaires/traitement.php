<?php
echo '<pre>'; var_dump($_POST); echo '</pre>';
// $_GET est une superglobale. Elle est toujours définie et permet de récupérer les informations passées par la méthode HTTP GET.
?>
Vous vous appelez <?= $_POST['prenom'] ?>.

<script>console.log("HAHA");</script>