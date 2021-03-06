<!DOCTYPE html>
<!--
Template Name: Cooban
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<?php
  session_start();
  include 'session.php';
?>
<html>
<head>
<title>Cooban | Pages | Full Width</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <!-- ################################################################################################ -->
  <div class="row1">
    <header id="header" class="hoc clear">
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Cooban</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="index.php">Home</a></li>
          <li><a class="drop" href="#">Voorraden</a>
            <ul>
              <li><a href="voorraad.php">Voorraden</a></li>
              <li><a href="producten.php">Producten</a></li>
            </ul>
          </li>
          <li class="active"><a href="locaties.php">Locaties</a></li>
          <li><a href="gebruikers.php">Gebruikers</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="breadcrumb" class="hoc clear">
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
<?php
  if($_SESSION['role'] == 'Accountmanager' || $_SESSION['role'] == 'Manager'){
?>
    <div id='content' class="content">
      <!-- ################################################################################################ -->
      <h1>Locaties</h1>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Locatie</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Utrecht</td>
            </tr>
            <tr>
              <td>Nieuwegein</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- ################################################################################################ -->
    </div>
<?php
  }
  else{
    echo 'U heeft geen rechten om deze pagina te bekijken.';
  }
?>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>




<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>
