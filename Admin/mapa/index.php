<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Google Maps </title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <!-- Bootstrap CSS -->    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap tema -->
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    </head>
    
    <body>


    	<div id="mapa" style="height: 100px; width: 300px">
        </div>
		
		<script src="js/jquery.min.js"></script>
 
        <!-- Maps API Javascript -->
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        
        <!-- Caixa de informação -->
        <script src="js/infobox.js"></script>
		
        <!-- Agrupamento dos marcadores -->
		<script src="js/markerclusterer.js"></script>
 
        <!-- Arquivo de inicialização do mapa -->
		<script src="js/mapa.js"></script>
    </body>
</html>