<?php
//   desativado - por hora // session_start(); 
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
  <meta charset="UTF-8">
  <title>Seu titulo AQUI</title>
   <link href="css/base.css" rel="stylesheet" >
   <link href="css/perfil.css" rel="stylesheet"> 
   <link href="css/buttons.css" rel="stylesheet" >
       <script src="js/ajustar.js" type="text/javascript"></script>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">

 </head>
  <body>
<div id="pagewrap">
  <?php // desativado por hora // if ($_SESSION['FBID']): ?>      <!--  After user login  -->
<div class="container">
	<?php include "titulo.php";
	//Titulo, mais facil um arquivo externo em todas as páginas , pois assim para modificar é melhor//
	?>
	<div id="content">
		<div class="span4" align="left">
	<ul class="nav nav-list">
<li class="nav-header">Facebook ID</li>
<li>Sua Id<?php //desativado por hora // echo  $_SESSION['FBID']; ?></li>
<li class="nav-header">Facebook Username</li>
<li>Seu E-mail<?php //desativado por hora// echo $_SESSION['EMAIL']; ?></li>
<li class="nav-header">Facebook fullname</li>
<li>Seu Nome<?php //desativado por hora// echo $_SESSION['FULLNAME']; ?></li>
	<div><a href="#" class="bot bot-border-rosa">Logout</a>
    </div>
	</ul>
    	</div>
	</div>

<div id="middle" align="center">
<h2>Planilhas</h2>
	<br />
    	<img src="img/ex.png">
</div>
<div id="sidebar" align="center">
<h2>Qr Code</h2>
	<br />
    	<img src="img/qr.png">
</div>
<div id="sidebar" align="center">
<h2>Boleto</h2>
	<br />
    	<img src="img/cod2.png">
</div>
<div id="middle" align="center" class="bot-rounded bot-border-verde">
	<a href="calculos.php">
		<h2   class="bot bot-verde">Cálculos/Taxas </h2>
    		<br />
        		<img src="img/calc.png" >
	</a>
</div>
<div id="middle" align="center">
<h2>Bit-Consulta</h2>
	<br />
    	<img src="img/cons.png">
</div>
<?php include "rodape.php" ?>
	</div>
    	</div>
        	</div>
            	
                	
    <?php //desativado por hora //else: ?>     <!-- antes do login --> 

    <?php //desativado por hora// endif ?></html>