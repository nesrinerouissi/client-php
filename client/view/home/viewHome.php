<?php


/* __DIR__ est une constante "magique" de PHP qui contient le
chemin du dossier courant */
/* DS contient '/' sur Linux et '\' sur Windows*/

include($ROOT.$DS."view".$DS."header.php"); 
include($ROOT.$DS."view".$DS."slide.php");
include($ROOT.$DS."view".$DS."newCollection.php");
include($ROOT.$DS."view".$DS."footer.php");
?>