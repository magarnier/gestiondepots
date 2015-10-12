<?php


Autoloader::autoload('entreprise');

$entreprise = new Model_entreprise($db->getInstance());
$controller = new Controller_entreprise($entreprise);
$view = new View_entreprise($controller);

?>


<h3>Entreprise</h3>
<hr>

<ul class="nav nav-stacked"><?php
	echo $view->getEntreprises();
?>
</ul>