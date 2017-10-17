<!DOCTYPE html>
<?php 
    @session_start();
    include_once 'settings/settings.php';
         
            $nome = $_SESSION['nome'];
            $email;
            $usuario = $_SESSION['usuario'];
                    

    if (!isset($_SESSION['nome']) && !isset($_SESSION['usuario'])) {
      header("location: index.php");
      exit();
    }
 ?>
 
<html>
  <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <meta name="description" content="Empresa Nacional de Distribuição de eletricidade ">
    <meta name="author" content="ENDE">
   

    <title>bem-vindo <?= $nome;?></title>
  
      </head>

  <body>

  <?php include 'inc/cabecalho.php'; ?>

   

   
  </div>
  







    
    <div class="row">
    
  <div class="parent2">
  <div class="test1"><a href="#"><i class="fa fa-user fa-2x"></i></a></div>
  <div class="test2"><i class="fa fa-graduation-cap fa-2x"></i></div>
  <div class="test3"><i class="fa fa-code fa-2x"></i></div>
  <div class="test4"><i class="fa fa-envelope-o fa-2x"></i></div>
  <div class="mask2"><i class="fa fa-home fa-3x"></i></div>
  </div>
   

   
    </div>
        <p><h1 style="text-align: center; margin-top: 3em;"><strong class="lite">ENDE</strong></h1>
          <h4  style="text-align: center;">Empresa nacional de distribuicao de eletricidade</h4> </p>
      
      </div>
    </div>

        
         
      </div>
      
    </div>
      
    
    


    <div class="container marketing">
         

     
      <div class="row">

         <div class="col-lg-12">
        <div class="col-md-8" >
          <img class="img-rounded" src="libs/img/img2.jpg" style="width: 75em; height: 40%; margin-bottom: 6em;" alt="">
        </div>

        
        <div class="row">
        <div class="col-md-2">
          <h2 class="lite"><strong>Ende</strong> </h2>
          <p>This is a template that is great for small businesses.!</p>
          <a class="btn btn-primary btn-lg" href="#">Qualquer coisa</a>
        </div>
      </div>
        </div>

        </div>

          <div class="row">

      <div class="col-lg-12">
        <div class="col-md-4">
          <img class="img-circle img-responsive center-block" src="libs/img/ende.jpg">
          <h2>ENDE</h2>
          <p>O Programa de Transformação do sector Eléctrico, foi criado em 12 de Outubro, com objectivo de impulsionar a melhoria operacional de toda a cadeia de valor, por forma a obter a melhoria progressiva da eficiência de cada uma das novas empresa e a desenvolver/­fortalecer as competências necessárias dos trabalhadores do sector eléctrico angolano.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalhes &raquo;</a></p>
        </div>

        <div class="col-lg-4">
          <img class="img-circle img-responsive center-block" src="libs/img/2.jpg" width="140" height="140">
          <h2>OBJECTO SOCIAL</h2>
          <p>A Empresa Nacional de Distribuição de Electricidade tem por objecto principal a distribuição e comercialização de energia eléctrica a nível nacional, no âmbito do Sistema Eléctrico Público (SEP), através da exploração das infra-estruturas das redes de distribuição (AT, MT, BT) em Alta, Média e Baixa Tensão, em regime de serviços públicos nos termos da Lei Geral de Electricidade e seus Regulamentos.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalhes &raquo;</a></p>
        </div>

        <div class="col-lg-4">
          <img class="img-circle img-responsive center-block" src="libs/img/3.jpg"  width="140" height="140">
          <h2>DADOS ESTATÍSTICOS</h2>
          <p>A ENDE resulta da fusão dos activos da extinta EDEL e da Unidade de Negócio de Distribuição da extinta ENE, desenvolvendo sua actividade em todo território nacional..<br>

            Número de Subestações: + de 68<br>

            Número de Clientes : + de 1.600.000<br>

            Número de Trabalhadores :4.064<br>.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalhes &raquo;</a></p>
        </div>
      </div>
      

<div class="container">

  <div class="page-header">
    <h2>ENDE <small class="lite">Inonvando</small></h2>
  </div>

  <div id="slide-ende" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#slide-ende" data-slide-to="0" class="active"></li>
      <li data-target="#slide-ende" data-slide-to="1" class=""></li>
      <li data-target="#slide-ende" data-slide-to="2" class=""></li>
      <li data-target="#slide-ende" data-slide-to="2" class=""></li>
    </ol>
    <style type="text/css">
      .carousel-inner img{
        margin-left: 9em;
      }
    </style>
    <div class="carousel-inner">
      <div class="item active">
        <img alt="Primeiro slide" src="libs/img/ERA-Header-Home-01.jpg" style="width: 70%; height: 30em;">
      </div>
      <div class="item">
        <img alt="Segundo slide" src="libs/img/images-cms-image-000002078.jpg" style="width: 70%; height: 30em;">
      </div>
      <div class="item">
        <img alt="Terceiro slide" src="libs/img/luanda-noite.jpg" style="width: 70%; height: 30em;">
      </div>
      <div class="item">
        <img alt="Terceiro slide" src="libs/img/slide4.jpg" style="width: 70%; height: 30em;">
      </div>
    </div>
    <a class="left carousel-control" href="#slide-ende" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#slide-ende" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>

</div>

      

      <hr class="divider">

      <div class="row ">
        <div class="col-md-7">
          <h2 class="featurette-heading">Obejectivos. <span class="text-muted">bla bla bla bla    .</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block thumbnail" src="libs/img/slide2.jpg" alt="img">
        </div>

      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">exemplos. <span class="text-muted">bla bla bla.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block thumbnail" src="libs/img/slide3.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">exemplos bla bla bla. <span class="text-muted">yh yh yh.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block thumbnail" src="libs/img/slide1.jpg" alt="Generic placeholder image">
        </div>
      </div>

     <?php include 'inc/footer.php'; ?>
    


  </body>
</html>
