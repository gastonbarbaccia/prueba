<?php

include 'conexiondb.php';

$id_servicio = $_GET['id'] ;

$conexion = conexion_db();

$registros = $conexion->query("SELECT * FROM servicios WHERE id = $id_servicio ");

$fila = $registros->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dastone - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="default/assets/images/favicon.ico">

    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

    <!-- App css -->
    <link href="default/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="default/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="default/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="default/assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="">
    <!-- Left Sidenav -->
    <div class="left-sidenav">
        <!-- LOGO -->
        <div class="brand">
            <a href="index.html" class="logo">
                <span>
                    <img src="default/assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="default/assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                    <img src="default/assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                </span>
            </a>
        </div>
        <!--end logo-->
        <div class="menu-content h-100" data-simplebar>
            <ul class="metismenu left-sidenav-menu">
                <li class="menu-label mt-0">Menues</li>
                <li>
                    <a href="dashboard.php"><i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="cuentas_a_pagar.php"><i data-feather="dollar-sign" class="align-self-center menu-icon"></i><span>Cuentas a pagar</span></a>
                </li>


                <hr class="hr-dashed hr-menu">
                <li>
                    <a href="#"><i data-feather="user" class="align-self-center menu-icon"></i><span>Datos personales</span></a>
                </li>

                <li>
                    <a href="index.php"><i data-feather="log-out" class="align-self-center menu-icon"></i><span>Cerrar sesión</span></a>
                </li>

            </ul>


        </div>
    </div>
    <!-- end left-sidenav-->


    <div class="page-wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- Navbar -->
            <nav class="navbar-custom">


                <ul class="list-unstyled topbar-nav mb-0">
                    <li>
                        <button class="nav-link button-menu-mobile">
                            <i data-feather="menu" class="align-self-center topbar-icon"></i>
                        </button>
                    </li>

                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row">
                                <div class="col">
                                    <h4 class="page-title">Editar servicio</h4>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <!-- end page title end breadcrumb -->
                <div class="row">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <!--end card-header-->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form action="actualizar_servicio.php" method="post">

                                            <input  id="id_servicio" name="id_servicio" type="text" value="<?php echo $fila['id'] ?>" hidden>

                                                <div class="mb-3 row">
                                                    <label for="example-text-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Servicio</label>
                                                    <div class="col-sm-10">
                                                        <input id="servicio" name="servicio" class="form-control" type="text" value="<?php echo $fila['servicio'] ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="example-email-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">1er Vto.</label>
                                                    <div class="col-sm-10">
                                                        <input id="ven_1" name="ven_1" class="form-control" type="text" value="<?php echo $fila['1er_vto'] ?>" >
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="example-tel-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">2do Vto.</label>
                                                    <div class="col-sm-10">
                                                        <input id="ven_2" name="ven_2" class="form-control" type="text" value="<?php echo $fila['2do_vto'] ?>" >
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="example-password-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Importe</label>
                                                    <div class="col-sm-10">
                                                        <input id="importe" name="importe" class="form-control" type="text" value="<?php echo $fila['importe'] ?>" >
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="example-number-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Pagado</label>
                                                    <div class="col-sm-10">
                                                        <input id="pagado" name="pagado" class="form-control" type="text" value="<?php echo $fila['pagado'] ?>" >
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                                <a href="dashboard.php" type="button" class="btn btn-danger">Cancelar</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>

                </div>
                <!--end row-->


            </div><!-- container -->

            <footer class="footer text-center text-sm-start">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script> Dastone <span class="text-muted d-none d-sm-inline-block float-end">Developed By Gaston Barbaccia</span>
            </footer>
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->




    <!-- jQuery  -->
    <script src="default/assets/js/jquery.min.js"></script>
    <script src="default/assets/js/bootstrap.bundle.min.js"></script>
    <script src="default/assets/js/metismenu.min.js"></script>
    <script src="default/assets/js/waves.js"></script>
    <script src="default/assets/js/feather.min.js"></script>
    <script src="default/assets/js/simplebar.min.js"></script>
    <script src="default/assets/js/moment.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>

    <script src="plugins/apex-charts/apexcharts.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="assets/pages/jquery.analytics_dashboard.init.js"></script>

    <!-- App js -->
    <script src="default/assets/js/app.js"></script>

</body>


</html>