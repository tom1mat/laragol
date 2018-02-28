<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laragol - Torneos de fútbol</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">LaraGOL</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Partidos</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Goles</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Equipos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="masthead bg-primary text-white text-center" style="background-image: url('img/pasto_futbol_1920x1440.jpg'); width: 100%; !important;">
    <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
        <h1 class="text-uppercase mb-0">Lara<b>GOL</b></h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Los mejores torneos de fútbol</h2>
    </div>
</header>

<!-- Portfolio Grid Section -->
<section class="portfolio" id="portfolio">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Partidos</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <th>Local</th>
                <th>Goles Local</th>
                <th>Goles Visitante</th>
                <th>Visitante</th>
                <th>Fecha</th>
                </thead>
                <tbody>
        @foreach ($partidos as $each)
                  <tr>
                      <td><?php echo $each->local->equipo ?></td>
                      <td class="text-center"><?php echo $each->golesLocal ?></td>
                      <td class="text-center"><?php echo $each->golesVisitante ?></td>
                      <td><?php echo $each->visitante->equipo ?></td>
                      <td><?php echo $each->fecha ?></td>
                  </tr>
        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="bg-primary text-white mb-0" id="about">
    <div class="container">
        <h2 class="text-center text-uppercase text-white">Goles</h2>
        <hr class="star-light mb-5">
        <div class="row">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <th>Goles</th>
                <th>Jugador</th>
                <th>Equipo</th>
                </thead>
                <tbody>
                @foreach ($goleadores as $each)
                    <tr>
                        <td><?php echo $each->cantGoles ?></td>
                        <td><?php echo $each->jugador ?></td>
                        <td><?php echo $each->equipo->equipo ?></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Equipos</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <th>Posicion</th>
                    <th>Equipo</th>
                    <th>Ganados</th>
                    <th>Empatados</th>
                    <th>Perdidos</th>
                    <th>Puntos</th>
                </thead>
                <tbody>
                <?php $cont = 1; ?>
                @foreach($equipos as $each)
                    <tr>
                        <td><?php echo $cont++; ?></td>
                        <td><?php echo $each->equipo; ?></td>
                        <td><?php echo $each->ganados; ?></td>
                        <td><?php echo $each->empatados; ?></td>
                        <td><?php echo $each->perdidos; ?></td>
                        <td><?php echo $each->puntos; ?></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright &copy; Tomás Mateo 2018</small>
    </div>
</div>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>


<!-- Custom scripts for this template -->
<script src="js/freelancer.min.js"></script>

</body>

</html>
