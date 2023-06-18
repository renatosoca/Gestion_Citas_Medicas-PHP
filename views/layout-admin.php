<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hospital San José</title>

    <!-- Custom fonts for this template-->
    <script src="https://kit.fontawesome.com/b355a0cb3a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="/build/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/build/css/admin.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Barra de Izquierda -->
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="/build/images/Logo_hospital_San_José_del_Callao.svg.png" width="50px" alt="">
                </div>

                <div class="sidebar-brand-text mx-3">Hospital San José</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/admin/index">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Resumen</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interfaces
            </div>

            <!-- Nav Item - Pacientes -->
            <li class="nav-item">
                <a class="nav-link" href="/admin/pacientes">
                    <i class="fas fa-user-injured"></i>
                    <span>Pacientes</span>
                </a>
            </li>

            <!-- Nav Item - Doctores -->
            <li class="nav-item">
                <a class="nav-link" href="/admin/medicos">
                    <i class="fas fa-user-md"></i>
                    <span>Médicos</span>
                </a>
            </li>

            <!-- Nav Item - Citas -->
            <li class="nav-item">
                <a class="nav-link" href="/admin/citas">
                    <i class="fas fa-calendar-check"></i>
                    <span>Citas</span>
                </a>
            </li>

            <!-- Nav Item - Especialidades -->
            <li class="nav-item">
                <a class="nav-link" href="/admin/especialidades">
                    <i class="fas fa-calendar-check"></i>
                    <span>Especialidades</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <a href="/logout" class=" border-10" id="sidebarToggle"></a>
            </div>
        </ul>
        <!-- End of Sidebar -->
        <!-- Fin Barra de Izquierda -->

        <?php echo $contenido; ?>

    </div>
    <!-- End of Content Wrapper -->

    <!-- Custom scripts for all pages-->
    <script src="/build/js/sb-admin-2.min.js"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>