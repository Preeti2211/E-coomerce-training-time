<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="css/dasho.css" rel="stylesheet">
<link href="css/hover.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!--Fontes personalizadas para este modelo -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!--Estilos personalizados para este modelo -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"><!--Usei para trocar a foto do usuário-->
    <meta name='viewport' content='width=device-width, initial-scale=1'> <!--Usei para trocar a foto do usuário-->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!--Links=permitem que os usuários cliquem para ir de uma página para outra.
        Href=O atributo href especifica o URL da página para a qual o link vai.-->
    <!--Script=é usada para incorporar um script do lado do cliente,elemento contém instruções de script ou aponta para um arquivo de script externo por meio do atributo src-->

</head>

<body id="page-top">
<div id="wrapper">

    <!-- Sidebar com tag <u> que define uma lista não ordenada (com marcadores). Utilizado para fazer o Inicio da barra lateral-->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background:rgba(0,0,0,0.8)">

        <!-- Sidebar - Marca-->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink" style="color:cyan"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin</div>

        </a>
        <hr class="sidebar-divider my-0">

      <center>  <img src="images/preet2.jfif" width="50" height="50" alt="nice" class="rounded-circle mr-3" style="background-size: cover">
        <a href="#" class="text-white font-weight-bold" style="font-family: 'Monotype Corsiva';font-size: 35px;">Loveshree </a>
      </center>

        <!-- Divisor -->
        <hr class="sidebar-divider my-0">

        <!--Aqui está o item de navegação do painel -->
        <li class="nav-item active">
            <a class="nav-link" href="/da">
                <i class="fa fa-home text-light fa-lg mr-3" aria-hidden="true"></i>
                <span style="font-size: 20px" class="hvr-float-shadow">Dashboard</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/enquri">
                <i  class="fa fa-search-plus" aria-hidden="true"></i>
                <span style="font-size: 20px" class="hvr-float-shadow">Enquiry Managment</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/chPass">
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                <span style="font-size: 20px" class="hvr-float-shadow">Change Password</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/AddPro">
                <i class="fa fa-product-hunt" aria-hidden="true"></i>
                <span style="font-size: 20px" class="hvr-float-shadow">Add Product</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/review">
                <i class="fa fa-star"  aria-hidden="true"></i>
                <span style="font-size: 20px" class="hvr-float-shadow">Review </span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/cart">
                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                <span style="font-size: 20px" class="hvr-float-shadow">Cart</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/loginAd">
                <i class="fa fa-info-circle" aria-hidden="true"></i>
                <span style="font-size: 20px" class="hvr-float-shadow">Login Info</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/product">
                <i class="fa fa-cart" aria-hidden="true"></i>
                <span style="font-size: 20px" class="hvr-float-shadow">Product Management</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="notify">
                <i class="fa fa-commenting" aria-hidden="true"></i>
                <span style="font-size: 20px" class="hvr-float-shadow">Notification</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/Feedback">
                <i class="fa fa-comment" aria-hidden="true"></i>
                <span style="font-size: 20px" class="hvr-float-shadow">Feedback</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/">
                <i class="fa fa-sign-out"aria-hidden="true"></i>
                <span style="font-size: 20px" class="hvr-float-shadow ">Log Out</span></a>
        </li>
        <!-- Divider -->




        <!--Item de navegação - Menu de recolhimento de utilitários-->


        <!-- Item de navegação - gráficos -->


        <!--Tabela comentada porque não iremos utilizar até o momento presente, caso necessitar só tirar dos comentários
        Item de Navegação - Tabelas
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tabelas</span></a>
        </li>
      -->
        <!-- Divisor -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler /Alternador de barra lateral  -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!--Fim da barra lateral  -->

    <!-- Conteúdo -->
    <div id="content-wrapper" class="d-flex flex-column" style="background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('images/admin.jpg');background-repeat: no-repeat;background-size: cover">

        <!-- Conteúdo principal -->
        <div id="content">

            <!-- Aqui tenho uma barra superior -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" >

                <!-- Sidebar Toggle /Alternar barra lateral  -->
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control"id="search-input" placeholder="Search here">
                        <button type="button" class="btn btn-light"id="search-button"><i class="fa fa-search text-danger"></i></button>
                    </div>
                </form>
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>




                <!-- Início da minha barra de navegação -->
                <ul class="navbar-nav ml-auto" style="background: rgba(0,0,0,0.1)">


                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Caixa de Mensagens -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Itens de Alertas -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Contador - Alertas -->
                            <span class="badge badge-danger badge-counter">0</span>
                        </a>
                        <!-- Aqui está o Alerta -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alertas
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500"></div>
                                    <span class="font-weight-bold"></span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500"></div>

                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500"></div>

                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Mostrar todos os alertas</a>
                        </div>
                    </li>

                    <!-- Item de navegação - mensagens -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Contador de Mensagens: calcula o tanto de menssagens que está na caixa sem ser lida.  -->
                            <span class="badge badge-danger badge-counter">0</span>
                        </a>
                        <!-- Aonde mostra as mensagens  -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">

                            <h6 class="dropdown-header">
                                Mensagens
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <i class='fas fa-user-alt' style='font-size:25px;color:black'></i>
                                    <!-- <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">-->
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate"></div>
                                    <div class="small text-gray-500"></div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <!-- <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">-->
                                    <i class='fas fa-user-alt' style='font-size:25px;color:blue'></i>
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate"></div>
                                    <div class="small text-gray-500"></div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <i class='fas fa-user-alt' style='font-size:25px;color:red'></i>
                                    <!--  <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">-->
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate"></div>
                                    <div class="small text-gray-500"></div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <i class='fas fa-user-alt' style='font-size:25px;color:green'></i>
                                    <!-- <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">-->
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate"></div>
                                    <div class="small text-gray-500"></div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Leia mais mensagens </a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Item de navegação - Informações do usuário -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <!--Nome do Usuário logado --></span>
                            <i class='fas fa-user-alt' style='font-size:36px;color:black'></i>
                        </a>
                        <!-- Lista suspensa - informações do usuário -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Perfil
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Configurações
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Registro de Atividade
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Sair
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- Fim da barra superior de navegação-->

            <!-- Conteúdo da página inicial -->
            <div class="container-fluid">
                <!-- Título da página -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0" style="color: white;font-weight: bold" >Dashboard</h1>

                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Gerar Relatório</a>
                </div>

<div class="row">

@yield('content')

</div>

                <!--Fim do conteúdo principal -->

                <!-- Início do rodapé -->
                <footer class="sticky-footer" style="background: darkslategray">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto text-white">
                            <span>Copyright ©<span style="font-family: 'Monotype Corsiva';font-weight: bolder;font-size: 25px">Loveshree </span> 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- Fim do rodapé -->

            </div>
        </div>


        </div>


        <!-- Botão para rolar para o inicio da página-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!--
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
              </div>
            </div>
          </div>
        </div>
        Logout Modal-->

        <!-- Bootstrap básico JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- JavaScript do plugin principal-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Scripts personalizados para todas as páginas-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Plugins de nível de página -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Scripts personalizados de nível de página -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>

