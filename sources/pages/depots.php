<?php

Autoloader::autoload('employe');

if (isset($_SERVER['QUERY_STRING'])) {
	$router = new Router($_SERVER['QUERY_STRING']); 
} else {
	$router = new Router("/"); 
}



?>

 <h3>Dépots</h3>  
            
<hr>

<div class="row" id='content'>
    <!-- center left-->	
 	<div class="col-md-7">
	  <div class="well"><?php

	  try {
	  	
		$router->get('/', function() { 
			echo "Choisir une entreprise ou une équipe pour voir les dépôts disponbles."; 
		}); 
		$router->get('/entreprise/:id', function($id) { 
			$db = new Database();
			$employe = new Model_employe($db->getInstance());
			$controlleremp = new Controller_employe($employe);
			$viewemp = new View_employe($controlleremp);
			echo $viewemp->getEmployeByEntreprise($id);
		 }); 
		$router->get('/equipe/:id', function($id) { 
			$db = new Database();
			$employe = new Model_employe($db->getInstance());
			$controlleremp = new Controller_employe($employe);
			$viewemp = new View_employe($controlleremp);
			echo $viewemp->getEmployeByEquipe($id);
		}); 
		$router->get('/refreshEntreprise/:id', function($id) { 
			$db = new Database();
			$employe = new Model_employe($db->getInstance());
			$controlleremp = new Controller_employe($employe);
			$viewemp = new View_employe($controlleremp);
			echo $viewemp->updateEmployeByEntreprise($id);
			echo $viewemp->getEmployeByEntreprise($id);
		}); 
		$router->get('/refreshEquipe/:id', function($id) { 
			$db = new Database();
			$employe = new Model_employe($db->getInstance());
			$controlleremp = new Controller_employe($employe);
			$viewemp = new View_employe($controlleremp);
			echo $viewemp->updateEmployeByEquipe($id);
			echo $viewemp->getEmployeByEquipe($id);
		}); 
		
		$router->run(); 
	} catch (Exception $e) {
	    echo 'Exception reçue : ',  $e->getMessage(), "\n";
	}
		
	?></div>
      
      
  	</div><!--/col-->
 

</div><!--/row-->