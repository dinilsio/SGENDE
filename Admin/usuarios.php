<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="img/favicon.png">

    <title>Usuario</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link rel="stylesheet" type="text/css" href="css/estilo-usuarios.css">
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <script type="text/javascript" src="js/usuarios.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>

  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      
    <?php include 'cabecalho-admin.php'; 

            ?>

      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i> usuario</h3>
					
				</div>
			</div>




          <div class="row">
                
                <div class="row">
                    <div class="col-md-12">
                        <a class="btn btn-primary" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw -square -circle fa-plus-square"></i> Usuario nuevo</a>
                    </div>
                </div>
        
        
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover table-striped">
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#"><i class="-alt fa fa-2x fa-eye fa-fw"></i></a>
                                    </td>
                                    <td>
                                        <h4>
                                            <b>Adminstrador</b>
                                        </h4>
                                        <p>@Nilson_dias</p>
                                    </td>
                                    <td>
                                        <img src="img/person-flat.png" class="img-circle" width="60">
                                    </td>
                                    <td>
                                        <h4>
                                            <b>Nilson dias fernandes</b>
                                        </h4>
                                        <a href="mailto:ramonvillaw@gmail.com">Nilsondias08@gmail.com</a>
                                    </td>
                                    <td>2 anos</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-danger" value="left" type="button">
                                                <i class="fa fa-fw s  fa-remove"></i>Eliminar</button>
                                            <button class="btn btn-success" value="right" type="button">
                                                <i class="fa fa-fw fa-cog"></i>Configurar</button>
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="fade modal" id="usuario">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Nuevo Usuario</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">
                            <fieldset>
                                <!-- Form Name -->
                                <!-- Prepended text-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="prependedtext">Usuario</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">@</span>
                                            <input id="prependedtext" name="prependedtext" class="form-control" placeholder="Nombre de usuario" type="text" required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Prepended text-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="nombre">Nombre</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="nombre" name="nombre" class="form-control" placeholder="Nombre Completo" type="text" required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Appended Input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="email">e-mail</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <input id="email" name="email" class="form-control" placeholder="Correo Electrónico" type="email" required="">
                                            <span class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="departamento">Departamento</label>
                                    <div class="col-md-5">
                                        <select id="departamento" name="departamento" class="form-control">
                                            <option value="1">Sistemas</option>
                                            <option value="2">Ama de Llaves</option>
                                            <option value="3">Recursos Humanos</option>
                                            <option value="4">Contraloría</option>
                                            <option value="5">Gerencia</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- File Button -->
                                <!-- Password input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="password">Contraseña</label>
                                    <div class="col-md-5">
                                        <input id="password" name="password" type="password" placeholder="Contraseña" class="form-control input-md" required="">
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-fw fa-save"></i>Guardar</button>
                                </div>
                                <!-- Button -->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            
      
  </section>
 
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>
