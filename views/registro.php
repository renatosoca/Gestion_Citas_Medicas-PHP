<?php

require_once "../controllers/Registrar.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta
          name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <!--====== Title ======-->
        <title>San Jose Hospital Callao</title>
        <!--====== Favicon Icon ======-->
        <link
          rel="shortcut icon"
          href="assets/images/favicon.ico"
          type="image/png"
        />
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <!--====== Fontawesome pro css ======-->
        <link rel="stylesheet" href="assets/css/all.css" />
        <!--====== Magnific Popup css ======-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css" />
        <!--====== animate css ======-->
        <link rel="stylesheet" href="assets/css/animate.css" />
        <!--====== Slick css ======-->
        <link rel="stylesheet" href="assets/css/slick.css" />
        <!--====== Slick css ======-->
        <link rel="stylesheet" href="assets/css/slick-menu.css" />
        <!--====== Default css ======-->
        <link rel="stylesheet" href="assets/css/default.css" />
        <!--====== Style css ======-->
        <link rel="stylesheet" href="assets/css/style.css" />
        <!--====== Style css ======-->
        <link rel="stylesheet" href="assets/css/responsive.css" />
      </head>
      <body>
        <!--======  PRELOADER PART START ======-->
        <div id="loading">
          <div id="loading-center">
            <div id="loading-center-absolute">
              <div class="object" id="object_one"></div>
              <div class="object" id="object_two"></div>
              <div class="object" id="object_three"></div>
              <div class="object" id="object_four"></div>
            </div>
          </div>
        </div>
        <!--======  OVERLAY PART START ======-->
        <div class="overlay-search">
          <form action="#">
            <input type="text" placeholder="search here" /><i
              class="fas fa-search-location"
            ></i>
          </form>
          <span class="cross-search"><i class="fas fa-times"></i></span>
        </div>
        <!--======  HEADER PART START ======-->
        <header>
          <section class="top-header-area">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <span><i class="fas fa-phone"></i> +(01) 3197830</span
                  ><span
                    ><i class="fas fa-envelope-open-text"></i>email
                    <a
                      href="/cdn-cgi/l/email-protection"
                      class="__cf_email__"
                      data-cfemail="cca5a2aaa38ca9b4ada1bca0a9e2afa3a1"
                      >[email&#160;protected]</a
                    ></span
                  >
                </div>
                <div class="col-lg-6 text-right">
                  <a href="#" class="top-header-btn btn">Cita Médica</a>
                </div>
              </div>
            </div>
          </section>
          <section class="bottom-header-area">
            <div class="container">
              <div class="row">
                <div class="col-lg-2">
                  <div class="logo">
                    <a href="index.html" style="font-weight:bold; font-size: 18px;"
                      ><img src="assets/images/Logo_hospital_San_José_del_Callao.svg.png" width="60px" alt=""
                      
                    />&nbsp; SAN JOSÉ</a>
                    
                  </div>
                </div>
                <div class="col-lg-10">
                  <div class="menu-area d-flex">
                    <div class="main-menu">
                      <nav>
                        <ul id="mobile-menu">
                          <li><a href="index.html">Inicio</a></li>
                          <li><a href="about.html">Nosotros</a></li>
                          <li><a href="service.html">Servicios</a></li>
                          <li><a href="team.html">Médicos</a></li>
                          <li><a href="contact.html">Contacto</a></li>
                        </ul>
                      </nav>
                    </div>
                    <div id="mobile-menu-wrapp" class="f-right"></div>
                    <div class="header-search">
                    </div>
                    <div class="countries">
                      <ul>
                        <li>
                          <a href="#"
                            ><img src="assets/images/uer.png"  width="60px" alt="" />LOGIN
                            <i class="fa fa-angle-down"></i
                          ></a>
                        </li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </header>
<body >
    <div id="fondoregist">
    <form action="#" class="formulario" method="post">

        <h1>Registrate</h1>
    
            <div  class="contenedor">
           
                <div class="usuario">
                    <input type="text" name="Nombre" id="" placeholder="Nombre" required> 
    
                </div>

                <div class="apellido">
                    <input type="text" name="apellido_Pat" id="" placeholder="Apellido Paterno" required> 
    
                </div>

                <div class="apellido">
                    <input type="text" name="apellido_Mat" id="" placeholder="Apellido Materno" required> 
    
                </div >

                 <div class="apellido">
                  <select class="form-select" aria-label="Default select example" name="Genero">
                    <option selected>Seleccionar Genero</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                  </select>
                </div>

                <div class="apellido">
                  <select class="form-select" aria-label="Default select example" name="TipoDoc">
                    <option selected>Tipo de Documento</option>
                    <option value="DNI">DNI</option>
                    <option value="PASAPORTE">PASAPORTE</option>
                  </select>
                </div>

                <div class="apellido">
                    <input type="text" name="num_doc" id="" placeholder="Numero de Documento" required> 
    
                </div >

                <div class="apellido">
                <input class="form-control" type="date" name="Fech_Naci">
                </div>

                <div class="apellido">
                    <input type="text" name="num_tel" id="" placeholder="Numero Telefonico" required> 
    
                </div >

                <div class="correo">
                    <input type="email" name="correo" id="" placeholder="Correo Electrónico" required>
                </div>
    
                <div class="contraseña">
                    <input type="password" name="contraseña" id="" placeholder="Contraseña" required> 
    
                </div>
    
                <div>
                    <input type="submit" value="Registrate" class="button" >
                    <p>¿Ya tienes una cuenta? <a class="link" href="./login.html"> Inicia Sesión </a> </p>
                   
                </div>
    
    
    
            </div>
    
        </form>
    </div>
    <style>
#fondoregist{
    background-color: cadetblue;
    padding: 30px;
}
        
.formulario{
    
    background: white;
    padding: 10px;
    margin-top: 50px;
    width: 100%;
    border-radius: 7px;
    
}
img{
    border-radius: 10px;

}

.contenedor{
    width: 100%;
    padding: 20px;
}

h1{
    text-align: center;
    font-size: 40px;
    margin-bottom: 2px;
}

input{
    font-size: 20px;
    border: none;
    width: 85%;
    padding: 10px;

}

.usuario,.contraseña,.correo, .apellido{
    margin-bottom: 10px;
    border:1px solid #aaa ;

}

.button{
    border: none;
    width: 100%;
    font-size: 20px;
    background: royalblue;
    color: white;
    padding: 12px 20px;
    border-radius: 5px;
    cursor: pointer;   
}


@media(min-width:740px)
{
    .formulario{
        margin: auto;
        width: 500px;
        margin-top: 50px;
        border-radius: 7px;
    }
}

p{
    text-align: center;
}

.link{
    text-decoration: none;
}
    </style>    
   <!--======  FOOTER PART START ======-->
   <footer class="footer-bg">
    <section class="top-footer-area pt-120 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-wedget">
              <div class="footer-logo">
                  <a href="index.html" style="font-weight:bold; font-size: 18px;"
                  ><img src="assets/images/Logo_hospital_San_José_del_Callao.svg.png" width="60px" alt=""
                  
                />&nbsp; SAN JOSÉ</a>
              </div>
              <p>
                  Somos un Hospital del Sector Salud que brinda atenciones preventivas, promocionales, 
                  recuperativas y de rehabilitación a las personas, la familia y la población en un
                   ambiente saludable, contribuyendo al desarrollo sostenido del país.
              </p>
              <ul class="footer-social-links">
                <li>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="footer-wedget">
              <h4>Departamentos</h4>
              <ul class="footer-links">
                <li><a href="#">Pediatria</a></li>
                <li><a href="#">Cardiología</a></li>
                <li><a href="#">Neurología</a></li>
                <li><a href="#">Dentista</a></li>
                <li><a href="#">Urología</a></li>
                <li><a href="#">Ginecología</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="footer-wedget">
              <h4>Nuevas Noticias</h4>
              <div class="footer-news">
                <img src="assets/images/footer/1.png" alt="" />
                <p class="footer-news-content">
                  Nuevas medicinas para controlar la gripe. <span>17 Nov 2022</span>
                </p>
              </div>
              <div class="footer-news">
                <img src="assets/images/footer/2.png" alt="" />
                <p class="footer-news-content">
                  Aumento en la satisfacción de los pacientes. <br> <span>18 Nov 2022</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="footer-wedget">
              <h4>Información Contacto</h4>
              <p class="mb-20">
                <span class="footer-icon"><i class="fas fa-phone"></i></span
                ><span
                  >+(01) 3197830 <br />
                  +51 987463522</span
                >
              </p>
              <p class="mb-20">
                <span class="footer-icon"
                  ><i class="fas fa-envelope-open-text"></i></span
                ><span
                  ><a
                    href="/cdn-cgi/l/email-protection"
                    class="__cf_email__"
                    data-cfemail="60090e060f20190f15120d01090c4e030f0d"
                    >[email&#160;protected]</a
                  ><br /><a
                    href="/cdn-cgi/l/email-protection"
                    class="__cf_email__"
                    data-cfemail="96f5f9f8e2f7f5e2d6f1fbf7fffab8f5f9fb"
                    >[email&#160;protected]</a
                  ></span
                >
                
              </p>
              <p>
                <span class="footer-icon"
                  ><i class="fas fa-map-marked-alt"></i></span
                ><span
                  > Magnolias 475, Carmen <br />
                  de La Legua - Reynoso 15103, <br>
                  Callao, Lima</span
                >
               
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bootom-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <p>
              &copy; 2022 Todos los Derechos Reservados, Grupo 3
            </p>
          </div>
          <div class="col-lg-6 text-right col-md-6">
            <ul class="bottom-footer-links">
              <li><a href="#">Terminos & Condiciones</a></li>
              <li><a href="#">Politicas de Privacidad</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </footer>
  <!--======  BACK-TO-TOP PART START ======--><a id="button"
    ><i class="fa fa-arrow-up"></i></a
  ><!--====== jquery js ======-->
  <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
  <!--====== Bootstrap js ======-->
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <!--====== Slick js ======-->
  <script src="assets/js/slick.min.js"></script>
  <!--====== Slick js ======-->
  <script src="assets/js/slick-menu.min.js"></script>
  <!--====== counterup js ======-->
  <script src="assets/js/jquery.counterup.min.js"></script>
  <!--====== Magnific Popup js ======-->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!--====== onepage-nav Popup js ======--><!--====== Main js ======-->
  <script src="assets/js/main.js"></script>
</body>

</html>