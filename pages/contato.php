<!DOCTYPE html>
<?php 
@session_start();
      $nome = $_SESSION['nome'];
            $usuario = $_SESSION['usuario'];
                    

    if (!isset($_SESSION['nome']) && !isset($_SESSION['usuario'])) {
      header("location: index.php");
      exit();
    }
 ?>
<html>
<head>
    <title>cantato</title>
</head>

    <link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">>
    <link href="../libs/bootstrap/css/font-awesome.min.css" rel="stylesheet" /> 
    <link rel="stylesheet" type="text/css" href="../libs/css/perfil.css">
<body>
    <style type="text/css">
        .container{
            margin-bottom: 3em;
        }
    </style>
<div class="my-5"></div>

<section class="container">

    <!--Contact heading-->
    <h2 class="h1 m-0">Contata-nos</h2>
    <!--Contact description-->
    <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-lg-5 mb-4">

            <!--Form with header-->
            <div class="card border-primary rounded-0">

                <div class="card-header p-0">
                    <div class="bg-primary text-white text-center py-2">
                        <h3><i class="fa fa-envelope"></i> Escreve para nos:</h3>
                    </div>
                </div>
                <div class="card-body p-3">

                    <!--Body-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon bg-light"><i class="fa fa-user text-primary"></i></div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-light"><i class="fa fa-envelope text-primary"></i></div>
                            <input type="email" class="form-control" id="inlineFormInputGroupUsername" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-light"><i class="fa fa-tag prefix text-primary"></i></div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-light"><i class="fa fa-pencil text-primary"></i></div>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary btn-block rounded-0 py-2">enviar</button>
                    </div>

                </div>

            </div>

        </div>
        <div class="col-lg-7">

            <!--Google map-->
            <div class="mb-4">
                <p>
                    Mapa
                </p>
               
            </div>

            <div class="row text-center">
                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
                    <p>Conego Manuel Das Neves 233,Luanda,<br> Angola</p>
                    
                </div>

                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
                    <p>+244 222 440 075, <br> Seg - Sab, 7:30-15:00</p>
                </div>

                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
                    <p>info@gmail.com <br> sale@gmail.com</p>
                </div>
            </div>

        </div>

    </div>

</section>


   <?php include '../inc/footer.php'; ?>
    

</body>
</html>