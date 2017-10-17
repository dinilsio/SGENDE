<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <title>Postar noticias</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />


    

    <style type='text/css'>

    body {
        margin-top: 40px;
        text-align: center;
        font-size: 14px;
        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        }

    #calendar {
        width: 100  %;
        margin: 0 auto;
        }

</style>
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
        <?php include 'cabecalho-admin.php'; 
        include 'conecta.php';
        ?>
      

      
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i> Noticias</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-bars"></i>Pages</li>
						<li><i class="fa fa-square-o"></i>Pages</li>
					</ol>
				</div>
			</div>
              <!-- page start-->
                <div class="row">
                 

                       <section class="panel col-md-6">
                          <div id="c-slide" class="carousel slide auto panel-body">
                              <ol class="carousel-indicators out">
                                  <li class="active" data-slide-to="0" data-target="#c-slide"></li>
                                  <li class="" data-slide-to="1" data-target="#c-slide"></li>
                                  <li class="" data-slide-to="2" data-target="#c-slide"></li>
                              </ol>
                              <div class="carousel-inner">
                                  <div class="item text-center active">
                                      <h3>Ultimas noticias</h3>
                                      <small class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</small>
                                  </div>
                                  <div class="item text-center">
                                      <h3>Massive UI Elements</h3>
                                      <small class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</small>
                                  </div>
                                  <div class="item text-center">
                                      <h3>Well Documentation</h3>
                                      <small class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</small>
                                  </div>
                              </div>
                              <a data-slide="prev" href="#c-slide" class="left carousel-control">
                                  <i class="arrow_carrot-left_alt2"></i>
                              </a>
                              <a data-slide="next" href="#c-slide" class="right carousel-control">
                                  <i class="arrow_carrot-right_alt2"></i>
                              </a>
                          </div>
                          <section class="col-md-12">
                            <div>
                            <div class="alert alert-warning fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                          </div>
                                                </div>
                      </section>
                       <section class="col-md-12">
                            <div>
                            <div class="alert alert-danger fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                          </div>
                                                </div>
                      </section>
                       <section class="col-md-12">
                            <div>
                            <div class="alert alert-success fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                          </div>
                                                </div>
                      </section>
                      </section>

                     

            
                 <div class="col-lg-6 portlets">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Postar Noticias</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">
                    
                      <div class="form quick-post">
                                      

                                      <form class="form-horizontal" action="adiciona-noticia.php" name="inserir">
                                          <!-- Titulo -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="titulo">Titulo</label>
                                            <div class="col-lg-10"> 
                                              <input type="text" class="form-control" id="titulo" name="titulo"> 
                                            </div>
                                          </div>   
                                         
                                          <!-- texto -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="texto">texto</label>
                                            <div class="col-lg-10">
                                              <textarea class="form-control" id="texto" name="texto"></textarea>
                                            </div>
                                          </div>                           
                                          <!-- Categoria -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2">Categoria</label>
                                            <div class="col-lg-10">                               
                                                <select class="form-control">
                                                  <option value="">- Escolhe a categoria-</option>
                                                  <option value="1">Geral</option>
                                                  <option value="2">Noticias</option>
                                                  <option value="3">Media</option>
                                                  <option value="4">dicas</option>
                                                </select>  
                                            </div>
                                          </div>   
                                          <div class="form-group">
                                            <label class="control-label col-lg-2">Data</label>
                                            <div  class="col-md-10">
                                              <input type="date" name="data" class="col-md-12">
                                            </div>
                                            

                                          </div>

                                          <!-- img -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="img">imagem</label>
                                            <div class="col-lg-10">
                                              <input type="file" name="imgs">
                                            </div>
                                          </div>
                                          
                                          <!-- Publicar -->
                                          <div class="form-group">
                                             <!-- Buttons -->
                                             <div class="col-lg-offset-2 col-lg-9">
                                                <button type="submit" class="btn btn-primary" value="publicar">Publicar</button>
                                                <button type="reset" class="btn btn-default">Reset</button>
                                             </div>
                                          </div>
                                      </form>
                                    </div>
                  

                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                 
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <div class="text-right">
            <div class="credits">
          
            </div>
        </div>
  </section>
  <!-- container section end -->
    <!-- javascripts -->
   <?php include 'script.php'; ?>
   <script type="text/javascript" src="js/postar.js"></script>


  </body>
</html>
