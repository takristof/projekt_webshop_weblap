<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>Kreatív Ötletcentrum | Kapcsolat</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <link rel="icon" href="photos/favicon.ico" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/kapcsolat_style.css">
  


</head>

<body>
  <!--Menü kezdete-->
  <nav>
    <div class="menu-icon">
      <span class="fas fa-bars"></span>
    </div>


    <div class="nav-items">
      <li><a href="index.php">Főoldal</a></li>
      <li><a href="termekek.php">Termékek</a></li>
      <li><a href="rolunk.php">Rólunk</a></li>
      <li><a href="kapcsolat.php">Kapcsolat</a></li>
    </div>
    

    <div class="search-icon">
      <span class="fas fa-search"></span>
    </div>

    <div class="cancel-icon">
      <span class="fas fa-times"></span>
    </div>

    <form action="#" id="kereso_mezo">
      <input type="search" class="search-data" placeholder="Keresés" required>
      <button type="submit" class="fas fa-search"></button>
    </form>

    <div class="bag-icon">
      <a href="chart.php"><button type="button" class="btn btn"><span class="bi bi-bag"></span></button></a>
    </div>


  </nav>

  <script type="text/javascript" src="main.js"></script>
  <!--Menü vége-->

  <!-- Contact-->
  <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h3 class="text-uppercase">Kérdésed van? Írj nekünk!</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Név *" required="required" data-validation-required-message="Kérem adja meg a nevét." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="E-mail *" required="required" data-validation-required-message="Kérem adja meg az e-mail címét." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Telefon *" required="required" data-validation-required-message="Kérem adja meg a telefonszámát." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Üzenet *" required="required" data-validation-required-message="Kérem írja be üzenetét."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Küldés</button>
                    </div>
                </form>
            </div>
        </section>
  
  <!--Footer eleje-->
  <footer class="footer py-4">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="col-lg-3 my-2 my-lg-0" id="footer-col">
  	 			<h4>Információk</h4>
  	 			<ul>
  	 				<li><a href="kapcsolat.php">Kapcsolat</a></li>
  	 				<li><a href="#">Adatvédelem</a></li>
  	 				<li><a href="#">Általános Szerződési Feltételek (ÁSZF)</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="col-lg-3 my-2 my-lg-0" id="footer-col">
  	 			<h4>Segítség</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">Szállítás</a></li>
  	 				<li><a href="#">Garancia</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="col-lg-3 my-2 my-lg-0" id="footer-col">
  	 			<h4>termékek</h4>
  	 			<ul>
  	 				<li><a href="#">Kész termékek</a></li>
  	 				<li><a href="#">Alapanyagok</a></li>
  	 				<li><a href="#">Dobozok</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="col-lg-3 my-2 my-lg-0" id="footer-col">
  	 			<h4>kövess minket</h4>
  	 			<div class="social-links">
  	 				<a href="https://www.facebook.com/kreativotletcentrum" target="_blank"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
 <!--Footer vége-->
</body>


</html>