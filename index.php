<?php
session_start();
require_once 'conexao.php';
$sql = "SELECT * FROM slides ORDER BY id DESC";
$stmt = $con->prepare($sql);
 
?> 




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>




<body style="background-color: #C6DBDA;">
    
	<header style="height: 8px;">
	  
	<?php
			if (isset($_SESSION['email']) && $_SESSION['email'] == "") {
				include "menu2/menu2.php";
			 } else {
				include "menu1/menu1.php";
			 }
               ?>
	  <br> 
	  <br>
	</header>
	
	
	<main>
	
	  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
		  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
		  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<img src="img/carrosel.svg" class="bd-placeholder-img" width="100%" height="100%"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>
	
			<div class="container">
			  <div class="carousel-caption text-start">
			   
			  </div>
			</div>
		  </div>
		  <div class="carousel-item">
			<img src="img/3.svg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
	
			<div class="container">
			  <div class="carousel-caption">
			
			  </div>
			</div>
		  </div>
		  <div class="carousel-item">
			<img src="img/4.svg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
	
			<div class="container">
			  <div class="carousel-caption text-end">
				
			  </div>
			</div>
		  </div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Next</span>
		</button>
	  </div>
	
	
	
	  <div class="row featurette" style="justify-content: center;">
		<div class="col-md-5">
		  <h2 class="featurette-heading fw-normal lh-1">Já Passou por uma experiência de fazer uma apresentação e o slide não ser tão legal? </h2>
		  <p class="lead">O Design Start mudará essa situação. No nosso site você terá milhares de modelos gratuitos para deixar sua apresentação muito mais interesante!</p>
		</div>
		<div class="col-md-5">
		  <img src="img/undraw_pitching_re_fpgk.svg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="650" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
	
		</div>
	  </div>
	
	  <hr class="featurette-divider" >
	
	  <div class="row featurette"  style= "justify-content:center;">
		<div class="col-md-5 order-md-2">
		  <h2 class="featurette-heading fw-normal lh-1">Cadastre-se <span class="text-muted">E publique seus própios slides!</span></h2>
		  <p class="lead">Clique em Cadastre-se,  responda todos os espaços requeridos e pronto! Poderá colocar seus slides ao ar! </p>
		</div>
		<div class="col-md-5 order-md-1">
		  <img src="img/post.svg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="650" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
	
		</div>
	  </div>
	
	  <hr class="featurette-divider">
	
	  <div class="row featurette" style=" justify-content: center;">
		<div class="col-md-5">
		  <h2 class="featurette-heading fw-normal lh-1">Não sabe como publicar seus slides? <span class="text-muted">Nós vamos ensinar!</span></h2>
		  <p class="lead">Primeiro se você não é cadastrado, clique em "Cadastre-se" e responda todos os espaços. Depois clique em "Postar", escolha seu slide, a foto que vai ficar visível, uma descrição e um título e clique em "Postar". Pronto!</p>
		</div>
		<div class="col-md-5">
		  <img src="img/undraw_posting_photo_re_plk8.svg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="650" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
	
		</div>
	  </div>
	
	
	
	
	
	
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>   
	
	
	<div class="container marketing">
	  <div class="row">
		<div class="col-lg-4">
		 <?php
		 while($rw = $stmt->fetch(\PDO::FETCH_ASSOC)){
            
		print  "<img src= '.{$rw[foto]}' class='bd-placeholder-img' width='250' height='140'  role='img' aria-label='Placeholder:140x140' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#777'/><text x='50%' y='50%' fill='#777' dy='.3em'></text></img>";
		print  "<h2 class='fw-normal'>".$rw['titulo']."</h2>";
		print  "<p>".$rw['descricao']."</p>";
		print  "<p><a class='btn btn-secondary' href='.{$rw[arquivopdf]}'>Visualizar &raquo;</a></p>";
		print  "<p><a class='btn btn-secondary' href='.{$rw[arquivo]}'>Baixar &raquo;</a></p>";
	}	
		   ?>
	</div>
	   </div>
		</div>

	
	<!--
		<div class="col-lg-4">
		  <img src="img/5.png" class="bd-placeholder-img " width="250" height="140"  role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
	
		  <h2 class="fw-normal">Minimalista</h2>
		  <p> Está cansado de slides extravagantes? Opte por modelos minimalista. Eles além de simples deixam sua apresentação mais profissional!</p>
		  <p><a class="btn btn-secondary" href="#">Visualizar &raquo;</a></p>
		  <p><a class="btn btn-secondary" href="#">Baixar &raquo;</a></p>
		</div>
		<div class="col-lg-4">
		  <img src="img/6.png" class="bd-placeholder-img" width="250" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
	
		  <h2 class="fw-normal">Marketing</h2>
		  <p>Para avançar o Marketing da sua empresa você precisa também dá um show em sua apresentação para os funcionários, experimente nosso slide!</p>
		  <p><a class="btn btn-secondary" href="#">Visualizar &raquo;</a></p>
		  <p><a class="btn btn-secondary" href="#">Baixar &raquo;</a></p>
		</div>-->
	  <!-- /.row -->
	
	  <hr class="featurette-divider">
	  <!-- /END THE FEATURETTES -->
	
	</div><!-- /.container -->
	
	

	<!-- FOOTER -->
	<footer class="container">
	  <p class="float-end"><a href="#">Ir Para o topo</a></p>
	  
	</footer>
	</main>
	
	
	
	
	
	
	
	  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
	
		
	</body>
	</html>