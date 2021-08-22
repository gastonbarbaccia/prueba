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
        <div class="menu-content h-100" data-simplebar style="background-color: #101b30;">
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
                    <a href="datos_personales.php"><i data-feather="user" class="align-self-center menu-icon"></i><span>Datos personales</span></a>
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
                    <li class="creat-btn">
                        <div class="nav-link">
                            <a class=" btn btn-sm btn-soft-primary" href="agregar_gasto.php" role="button"><i class="fas fa-plus me-2"></i>Agregar gasto</a>
                        </div>
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
                                    <h4 class="page-title">Gastos varios</h4>
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

                    <!--end col-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Gastos de tarjeta</h4>
                                </div>
                                <!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>Detalle</th>
                                                    <th>Cuotas</th>
                                                    <th>Importe</th>
                                                    <th>Mes</th>
                                                    <th>Pagado</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr style="text-align: center;">
                                                    <td>Supermercado</td>
                                                    <td>2</td>
                                                    <td>$10000</td>
                                                    <td>Junio</td>
                                                    <td>Si</td>
                                                    <td>
                                                        <a href="editar_gasto.php"><i class="las la-pen text-secondary" style="font-size: 25px;"></i></a>
                                                        <a href="#" data-toggle="modal" data-target="#exampleModal" type="button"><i class="las la-trash-alt text-secondary" style="font-size: 25px;margin-left:5px"></i></a>
                                                    </td>
                                                </tr>
                                                <tr style="text-align: center;">
                                                    <td>Pedidos Ya</td>
                                                    <td></td>
                                                    <td>$1200</td>
                                                    <td>Junio</td>
                                                    <td>Si</td>
                                                    <td>
                                                        <a href="editar_gasto.php"><i class="las la-pen text-secondary" style="font-size: 25px;"></i></a>
                                                        <a href="#" data-toggle="modal" data-target="#exampleModal" type="button"><i class="las la-trash-alt text-secondary" style="font-size: 25px;margin-left:5px"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--end /table-->
                                        <div style="margin-top: 15px;">
                                            <br>TOTAL: $11200</br>
                                        </div>
                                    </div>
                                    <!--end /tableresponsive-->
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div> <!-- end col -->

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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar gasto</h5>
                </div>
                <div class="modal-body">
                    ¿Está seguro que desea eliminarlo?
                </div>
                <div class="modal-footer">
                    <a href="cuentas_a_pagar.php" type="button" class="btn btn-primary">Confirmar</a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>



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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>


</html>