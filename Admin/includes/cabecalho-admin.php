<?php include '../inc/lightbox-mensagem.php';



 ?>


 <header class="header facebook-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

           
            <a href="index.php" class="logo">Admin<span class="lite">-ENDE</span></a>
           

            <div class="nav search-row" id="top_menu">
             
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Procurar" type="text">
                        </form>
                    </li>                    
                </ul>
                               
            </div>

            <div class="top-nav notification-row"> 
                <ul class="nav pull-right top-menu">
                    
                    <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-users"></i>
                            <span class="badge bg-important">34 </span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">Novos Usuarios</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div>
                                                                <?php 
                                       function notificaAdminUsuarios($conexao)
                                    {   
                                        $usuarios = array();
                                      $resultado = mysqli_query($conexao, "select * from usuarios ");
                                      while ($usuario = mysqli_fetch_assoc($resultado)) {
                                             array_push($usuarios, $usuario);
                                         }  
                                         return $usuarios; 
                                    } ?>
                                     <td>
                                        <?php if (isset($usuario)) { ?>
                                          <p class="text-succes"><?= $usuarios?></p>
                                        <?php } else{?>
                                        <p class="text-danger fa fa-users fa-2x"> Nenhum usuario</p>
                                        <?php   }  ?>


                                     </td>
                                       </div>
                                    </div>
                                   
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">Ver tudo</a>
                            </li>
                        </ul>
                    </li>
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope"></i>
                            <span class="badge bg-important">4</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">Tu tens 4 mensagens</p>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal">
                                    <span class="photo"><img alt="avatar" src="img/1.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Nilson dias</span>
                                    <span class="time">11 min</span>
                                    </span>
                                    <span class="message">
                                       Realmente gosto disto.
                                </a>


                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="img/.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ti betao</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     bom dia, Nenhuma ideia?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Lunkenny Gaspar</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        Tens que adquir mais experiencia.
                                    </span>
                                </a>
                            </li>
                          
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox notificatoin end -->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="fa fa-bell"></i>
                            <span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 4 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span> 
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>  
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span> 
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span> 
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>                            
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="img-circle">
                                <img alt="" src="img/1.jpg" style="width: 25px;">
                            </span>
                            <span class="username">Nilson dias</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="perfil.php"><i class="icon_profile"></i> Meu perfil</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> Meu email</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>
                            <li>
                                <a href="../index.php"><i class="icon_key_alt"></i> sair</a>
                            </li>
                            
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header> 
            <aside>
          <div id="sidebar"  class="nav-collapse navbar-default ">
              
              <ul class="sidebar-menu">                
                 <li>
                      <a class="sub-menu" href="index.php">
                          <i class="fa fa-home"></i>
                          <span>Casa</span>
                      </a>
                  </li>
                     
                   <li>
                      <a class="sub-menu" href="usuarios.php">
                          <i class="fa fa-group"></i>
                          <span>Usuarios</span>
                      </a>
                  </li>
                  <li>
                      <a class="sub-menu" href="mapa/index.php">
                          <i class="fa fa-map-marker"></i>
                          <span>Mapa</span>
                      </a>
                  </li>
                    <li>
                      <a class="sub-menu" href="widgets.html">
                          <i class="fa fa-info"></i>
                          <span>configurar</span>
                      </a>
                  </li>  
                  <li>                     
                      <a class="sub-menu" href="estatistica.php">
                          <i class="icon_piechart"></i>
                          <span>Estisticas</span>
                          
                      </a>
                                         
                  </li>
                  <li>                     
                      <a class="sub-menu" href="noticias.php">
                          <i class="icon_piechart"></i>
                          <span>Noticias</span>
                          
                      </a>
                                         
                  </li>
                             
                  <li class="">
                      <a href="postar.php" class="">
                          <i class="fa fa-hacker-news"></i>
                          <span>Postar noticias</span>
                          <span class="menu-arrow arrow_carrot-right"></span>

                      </a>
                      
                     
                  
                 
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>

