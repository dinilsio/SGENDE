
<link rel="stylesheet" type="text/css" href=" libs/css/bootstrap.css">
<script type="text/javascript" src="libs/js/jquery.js"></script>
<script type="text/javascript" src="libs/js/bootstrap.js"></script>
    <link href="libs/bootstrap/css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="libs/css/login.css">
    <link href="libs/bootstrap/css/font-awesome.min.css" rel="stylesheet" />
<style type="text/css">
  
</style>
  
   <?php
  

  $conecta = mysqli_connect('localhost', 'root', '','sgende') or print(mysqli_error());



    session_start(); 
    

  ?>
  <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="login">
                      <img class="profile-img" src="libs/img/person-flat.png"
                    alt="">
                    <form class="form-signin" action="" method="POST">
                      <input type="text" class="form-control" name="usuario" placeholder="Nome de usuario" required autofocus>
                      <input type="password" class="form-control" name="senha" placeholder="Senha" required>

                      <input type="submit" class="btn btn-lg btn-default btn-block" name="entrar" />
                      <input type="hidden" name="entrar" value="login">
                    </form>
                    <div id="tabs" data-tabs="tabs">
                      <p class="text-center"><a href="#register" data-toggle="tab">Precisa de uma conta?</a></p>
                      </div>
            </div>
            <div class="tab-pane" id="register">
              <form class="form-signin" action="" method="POST">

                <input type="text" class="form-control" name="nome" placeholder="Nome completo ..." required autofocus>
                <input type="text" class="form-control" name="usuario1" placeholder="Nome de Usuario ..." required autofocus>
                <input type="email" class="form-control" name="email1" placeholder="Endereco de Email ..." required>
                <input type="password" class="form-control" name="senha1" placeholder="Senha de usuario..." required>
                <input type="hidden" name="registrar" value="cadastrar">
                <input type="submit" name="registrar" class="btn btn-lg btn-default btn-block" value="registrar" />
              </form>
              <div id="tabs" data-tabs="tabs">
                    <p class="text-center"><a href="#login" data-toggle="tab">ja tem uma conta?</a></p>
                    </div>
            </div>
           
          </div>
            </div>
        </div>
    </div>
</div>

<div class="termos"><ul>
  <li><a href="#">ajuda</a></li>
  <li><a href="#">Privacidade</a></li>
  <li><a href="#">Contato</a></li>
</ul>
</div>

<style type="text/css">
  .termos li {
    margin: 0 0 0 1em;
    display: inline;    
  }
  .termos ul{
    clear: left;
    margin-top: 3em;  
    margin-left: 39em;
  }

</style>

      <?php 

      
        if (isset($_POST['entrar']) && $_POST['entrar'] == 'login') {
          $usuario_admin = $_POST['usuario'];
          $senha_admin = $_POST['senha'];

          if (empty($usuario_admin) && empty($senha_admin)) {
            echo "preencha todos";
          }else
          {
            $query =" SELECT nome, senha FROM administrador WHERE nome = '$usuario_admin' AND senha = '$senha_admin'";

            $result = mysqli_query( $conecta,$query);
            
            $busca = mysqli_num_rows($result);

            $linha = mysqli_fetch_assoc($result);

            if ($busca > 0) {

              $_SESSION['nome'] = $linha['nome'];
              $_SESSION['usuario'] = $linha['usuario'];

              header("location:Admin/index.php");

               }else{
              echo "Usuario errado  "; 
            }

            

        }}
        
        if (isset($_POST['entrar']) && $_POST['entrar'] == 'login') {
          
          $usuario = $_POST['usuario'];
          $senha = $_POST['senha'];

          if (empty($usuario) && empty($senha)) {
            echo "preencha todos";
          }else
          {
            $query =" SELECT nome, usuario, senha FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
            

            $result = mysqli_query( $conecta,$query);
            
            $busca = mysqli_num_rows($result);

            $linha = mysqli_fetch_assoc($result);

            if ($busca > 0) {

              $_SESSION['nome'] = $linha['nome'];
              $_SESSION['usuario'] = $linha['usuario'];

              header("location:index1.php");

               }else{
              echo "Usuario errado  "; 
            }



          }
        }
       ?>

    