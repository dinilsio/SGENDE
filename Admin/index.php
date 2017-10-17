<?php 
@session_start();
    include_once '../settings/settings.php';
         
  


 ?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin</title>
  
    <link href="css/bootstrap.min.css" rel="stylesheet">
   
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    

  
    <link href="css/style.css" rel="stylesheet">

	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  
  </head>

  <body>
  <section id="container" class="">
     
        <?php include 'cabecalho-admin.php'; ?>
    
     
      <section id="main-content">
          <section class="wrapper">            
          
			  <div class="row">
			     	<div class="col-lg-12">
					     <h3 class="page-header"><i class="fa fa-laptop"></i> Admin</h3>
					       <ol class="breadcrumb">
						      <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-laptop"></i>Dashboard</li>						  	
					</ol>
				</div>
			</div>
              
            <div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box blue-bg">
						<i class="fa fa-users"></i>
						<div class="count">4</div>
						<div class="title">Usuarios</div>						
					</div>

				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box facebook-bg">
						<i class="fa fa-facebook"></i>
						<div class="count">0</div>
						<div class="title">Likes</div>						
					</div>		
				</div>>	
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box dark-bg">
						<i class="fa fa-thumbs-o-up"></i>
						<div class="count">4.362</div>
						<div class="title">Order</div>						
					</div>			
				</div>

				
			</div>
		
			
           <div class="row">



		  
   <?php include 'script.php'; ?>
  </body>
</html>
