<?php
require_once ('sources/dao/db.connexion.class.php');
require_once ('sources/controller/autoload.class.php');
require_once ('sources/controller/router.class.php');



// initiate database connexion
$db = new Database();
Autoloader::register(); 


function get_json( $url ) {
    $base      = "https://api.github.com/";
    $curl      = curl_init();
    $headers[] = "Accept: application/vnd.github.v3.+json'";
    curl_setopt( $curl, CURLOPT_URL, $base . $url );
    curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $curl, CURLOPT_HTTPHEADER, $headers );
    curl_setopt( $curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5' );
    $content = curl_exec( $curl );
    curl_close( $curl );
    return $content;
}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Gestion des dépôts</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="style/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="style/css/styles.css" rel="stylesheet">
	</head>
	<body>
<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-toggle"></span>
      </button>
      <a class="navbar-brand" href="index.php">Gestion des dépôts</a>
    </div>
  </div><!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container">
  
  <!-- upper section -->
  <div class="row">
	<div class="col-sm-3">
      <!-- left -->
      <?php require_once('sources/pages/menuEntreprise.php'); ?>
      <br />
      <?php require_once('sources/pages/menuEquipe.php'); ?>
  	</div><!-- /span-3 -->
    <div class="col-sm-9">
      <?php require_once('sources/pages/depots.php'); ?>	
      <!-- column 2 -->	
      
  	</div><!--/col-span-9-->
    
  </div><!--/row-->
  <!-- /upper section -->
  
  
	<!-- script references -->
		<script src="style/js/jquery.min.js"></script>
		<script src="style/js/bootstrap.min.js"></script>
	</body>
</html>


