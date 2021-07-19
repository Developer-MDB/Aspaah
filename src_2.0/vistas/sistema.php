<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:Sistema | ASPAAH:.</title>
    <!-- Fonts Google -->
    <!-- MY Styeles - Sistema -->
    <link rel="stylesheet" href="../css/sistema/sistema.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="fas fa-building icon"></i>
            <div class="ms-2 logo_name">ASPAAH</div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list navbar-nav">
            <li>
                <a class="tab-s active" href="#">
                    <i class="fas fa-home"></i>
                    <span class="links_name">Inicio</span>
                </a>
                <span class="tooltip">Inicio</span>
            </li>
            <li>
                <a class="tab-s" href="#">
                    <i class="fas fa-chart-pie"></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a class="tab-s" href="#">
                    <i class="fas fa-user"></i>
                    <span class="links_name">Socios</span>
                </a>
                <span class="tooltip">Socios</span>
            </li>
            <li>
                <a class="tab-s" href="#">
                    <i class="fas fa-user-plus"></i>
                    <span class="links_name">Solicitudes</span>
                </a>
                <span class="tooltip">Solicitudes</span>
            </li>
            <li>
                <a class="tab-s" href="#">
                    <i class="fas fa-tractor"></i>
                    <span class="links_name">Maquinarias</span>
                </a>
                <span class="tooltip">Maquinarias</span>
            </li>
            <li>
                <a class="tab-s" href="#">
                    <i class="fas fa-calendar-alt"></i>
                    <span class="links_name">Caledario</span>
                </a>
                <span class="tooltip">Calendario</span>
            </li>
            <li>
                <a class="tab-s" href="#">
                    <i class="fas fa-cogs"></i>
                    <span class="links_name">Configuración</span>
                </a>
                <span class="tooltip">Configuración</span>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div id="page-princ">
            <div class="m-4 conatiner_inicio">
                <div class="d-flex justify-content-end align-items-center bg-info p-3 text-white content-user mb-2">
                    <div class="text-end">
                        <h5 class="m-0">Name - Admin</h5>
                        <p class="m-0">Cargo - Tipo</p>
                    </div>
                    <i class="mx-3 fas fa-user-circle"></i>
                    <a class="ms-3 text-white exit" href="#" title="Salir"><i class="fas fa-sign-out-alt"></i></a>
                </div>
                <div class="d-flex justify-content-between my-4">
                    <h2>UX/UI Socios</h2>
                    <div>
                        <a class="py-2 mx-2 btn rounded-pill btn-outline-primary" href="">+ Registrar nuevo socio</a>
                        <a class="py-2 mx-2 btn rounded-pill btn-primary" href="">+ Registrar nuevo socio</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 my-2">
                        <div class="indicators bg-info text-white d-flex align-items-center p-3">
                            <i class="fs-1 fas fa-user-circle"></i>
                            <div class="ms-3">
                                <h3>251</h3>
                                <p class="m-0">Socios</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-2">
                        <div class="indicators bg-info text-white d-flex align-items-center p-3">
                            <i class="fs-1 fas fa-user-circle"></i>
                            <div class="ms-3">
                                <h3>251</h3>
                                <p class="m-0">Socios</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-2">
                        <div class="indicators bg-info text-white d-flex align-items-center p-3">
                            <i class="fs-1 fas fa-user-circle"></i>
                            <div class="ms-3">
                                <h3>251</h3>
                                <p class="m-0">Socios</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-2">
                        <div class="indicators bg-info text-white d-flex align-items-center p-3">
                            <i class="fs-1 fas fa-user-circle"></i>
                            <div class="ms-3">
                                <h3>251</h3>
                                <p class="m-0">Socios</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Scripts -->
    <script src="../js/sistema.js"></script>
</body>
</html>