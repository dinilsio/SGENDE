<?php 
    include 'conecta.php';
    include 'inc/lightbox-login.php';
    include 'inc/lightbox-cadastrar.php';
    
 ?>
 
<html>
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <meta name="description" content="Empresa Nacional de Distribuição de eletricidade ">
    <meta name="author" content="ENDE">


   

    <title>ENDE</title>
  
      </head>

  <body>

  <?php include 'inc/cabecalho.php'; ?>

    <div class="row">
      <div class="page-header">
       <div class="menu-adicional">
      
     		 <div class="menu1"><i class=" fa fa-user fa-2x"> </i></div> 

     		 <div class="menu2"><i class=" fa fa-graduation-cap fa-2x"></i></div>
      
     		 <div class="menu3"><i class=" fa fa-code fa-2x"></i></div>
      
    		  <div class="menu4"><i class=" fa fa-envelope-o fa-2x"></i></div>
      
    		  <div class="menu"><i  class=" fa fa-home fa-3x"></i></div>

    </div>
      <div class="jumbotron">
      <div class="container">
        
        <p><h2 style="text-align: center;"><strong>Servicos</strong></h2>
          <h4  style="text-align: center;">Empresa nacional de distribuicao de eletricidade</h4> </p>
      
      </div>
    </div>

        
         
      </div>
      
    </div>
    	


					<div id ="about" class="about-area page-scroll area-padding">
			<div class="container">
				<div class="row">
				
				</div>
				<div class="row second-row">
				    <div class="col-md-3 col-sm-4">
				        <div class="about-details text-center">
				            <div class="single-about">
				                <a class="about-icon" href="#"><i class="fa fa-plus-square fa-4x"></i></a>
				                <h4>Desenvolvimento</h4>
				                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam accusamus reiciendis asperiores debitis similique assumenda animi non id pariatur.</p>
				            </div>
				        </div>
				       
				    </div>
				    
				    <div class="col-md-3 col-sm-4">
				        <div class="about-details text-center">
				            <div class="single-about">
				                <a class="about-icon" href="#"><i class="fa fa-code fa-4x"></i></a>
				                <h4>HTML-CSS Development</h4>
				                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam accusamus reiciendis asperiores debitis similique assumenda animi non id pariatur.</p>
				            </div>
				        </div>
				     
				    </div>
				    <div class="col-md-3 col-sm-4">
				        <div class="about-details text-center">
				            <div class="single-about">
				                <a class="about-icon" href="#"><i class="fa fa-laptop fa-4x"></i></a>
				                <h4>E-Commerce Development</h4>
				                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam accusamus reiciendis asperiores debitis similique assumenda animi non id pariatur.</p>
				            </div>
				        </div>
				      
				    </div>
				    
				    <div class="col-md-3 hidden-sm">
				        <div class="about-details text-center">
				            <div class="single-about">
				                <a class="about-icon" href="#"><i class="fa fa-desktop fa-4x"></i></a>
				                <h4>CMS-Development</h4>
				                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam accusamus reiciendis asperiores debitis similique assumenda animi non id pariatur.</p>
				            </div>
				        </div>
				       
				    </div>
				    
				</div>
				<div class="row fix">
				    <div class="col-md-6 col-sm-6">
				        <div class="self-img">
				            <a href="#"><img src="libs/img/Luanda2.png" class="thumbnail" alt="Luanda2" width="100%;"></a>
				        </div>
				    </div>
				    <div class="col-md-6 col-sm-6">
                       
				        <div class="about-self">
				            <div class="self-head">
				                <h4 class="intro-head">Introduction</h4>
				                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				                proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
				            </div>
				           
				             <p class="">
                                 Distribucao nacional
                              </p>
                              <div class="col-sm-3">
		                                
				<script src="libs/js/Chart.js"></script>
					<canvas id="canvas" height="200" width="500"></canvas>


					<script>

						var barChartData = {
							labels : ["Janeiro","Fevereiro","Marco","Abril","Maio","Junho","Julho"],
								datasets : [
						{
							fillColor : "rgba(220,220,220,0.5)",
							strokeColor : "rgba(220,220,220,1)",
							data : [65,59,90,81,56,55,40]
						},
						{
							fillColor : "rgba(151,187,205,0.5)",
							strokeColor : "rgba(151,187,205,1)",
							data : [28,48,40,19,96,27,100]
						}
					]
			
		}

				var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Bar(barChartData);
	
	</script>
                                  </div>
                              </div>
				            
				        </div>
				       
				    </div>
				</div>
			</div>

		</div>
			</div>
    </div>
    <footer>
    	<div class="footer">
    		
    	</div>
    </footer>


      
      <script src="libs/js/jquery.js"></script>
      
      <script src="libs/Bootstrap/js/bootstrap.min.js"></script>
   
</body>
</html>