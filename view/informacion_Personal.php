<?php
define("BASE_URL", "PRACTICO/view");
require_once("../config/config.php");
if (isset($_SESSION["id"])) {
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inicio</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
    </head>

    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->


            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="../index.php" class="brand-link">

                    <span class="brand-text font-weight-light">PORTAFOLIO</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">

                        </div>
                        <div class="info">
                            <a href="#" class="d-block"><?php echo $_SESSION["nombre"]; ?></a>
                        </div>
                    </div>



                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->

                            <li class="nav-item">
                                <a href="../view/logout.php" class="nav-link">
                                    <i class="nav-icon fas fa-table "></i>
                                    <p>
                                        Inicio
                                        <span class="right badge badge-danger">New</span>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="../view/informacion_Personal.php" class="nav-link">
                                    <i class="nav-icon fas fa-ellipsis-h"></i>
                                    <p>Perfil</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="../view/social_media.php" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>Social Media</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="../view/Menu.php" class="nav-link">
                                    <i class="nav-icon fas fa-tree"></i>
                                    <p>Menu</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="../view/Estudios.php" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>Estudios</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="../view/Trabajos_Realizados.php" class="nav-link">
                                    <i class="nav-icon far fa-plus-square"></i>
                                    <p>Trabajos Realizados </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="../view/informacion_Personal.php" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Info Personal </p>
                                </a>
                            </li>


                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Blank Page</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Blank Page</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="container-fluid">
                        hola
                    </div>

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.1.0
                </div>
                <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="../public/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../public/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../public/dist/js/demo.js"></script>
    </body>

    </html>

<?php
} else {
    header("Location:" . Conectar::ruta() . "/view/error.php");
}

?>