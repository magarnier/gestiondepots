<?php

Autoloader::autoload('equipe');

$equipe = new Model_equipe($db->getInstance());
$controllerEquipe = new Controller_equipe($equipe);
$viewEquipe = new View_equipe($controllerEquipe);

?>

<h3>Equipe</h3>
<hr>

<ul class="nav nav-stacked"><?php
	echo $viewEquipe->getEquipes();
?>
</ul>