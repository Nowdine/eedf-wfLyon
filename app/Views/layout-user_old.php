<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>EEDF Annonay</title>
	<meta name="Content-Type" content="UTF-8">
    <meta name="Content-Langage" content="fr">

	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/style-user.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/bootstrap.css') ?>" />
	<link rel="shortcut icon" href="img/logo2.png">
	<!-- Latest compiled and minified CSS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<body>
	<header>
		<!-- NAVBAR-->
		<div id="nav">
			<div class="col-md-12">
				<nav class="navbar navbar-default navbar-right nav-responsive" id="nav">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-responsive" id="bs-example-navbar-collapse-1">

							<ul class="nav navbar-nav">
								<li>
									<a href="<?= $this->url('default_accueil') ?>" id="logo">
										<img src="<?= $this->assetUrl('img/logo.png') ?>" alt="logo EEDF">
									</a>
								</li>
								<li class="<?php echo ($this->url('default_accueil') == $_SERVER['REQUEST_URI']) ? 'active' : ''; ?>">
									<a href="<?= $this->url('default_accueil') ?>">Accueil <span class="sr-only">(current)</span></a>
								</li>
								<li class="<?php echo ($this->url('events_events') == $_SERVER['REQUEST_URI']) ? 'active' : ''; ?>">
									<a href="<?= $this->url('events_events') ?>" id="evenement">Evénements</a>
								</li>
									<?php if($w_user !== null){?>
										<li class="<?php echo ($this->url('photo_users_photos') == $_SERVER['REQUEST_URI']) ? 'active' : ''; ?>">
											<a href="<?= $this->url('photo_users_photos') ?>">Photos</a>
										</li>
									<?php
									}
									?>
								<li class="<?php echo ($this->url('default_documents') == $_SERVER['REQUEST_URI']) ? 'active' : ''; ?>">
									<a href="<?= $this->url('default_documents') ?>">Documents</a>
								</li>
								<li class="<?php echo ($this->url('default_quisommesnous') == $_SERVER['REQUEST_URI']) ? 'active' : ''; ?>">
									<a href="<?= $this->url('default_quisommesnous') ?>">L'Association</a>
								</li>
								<li class="<?php echo ($this->url('default_contact') == $_SERVER['REQUEST_URI']) ? 'active' : ''; ?>">
									<a href="<?= $this->url('default_contact') ?>" id="contactnav">Contact</a>
								</li>
							</ul>
							<?= $this->section('login') ?>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	</header>
	<section id="entetepage">
		<div class="container">
			<div class="col-md-12 text-center">
				<h1 class="vignets">Bienvenue</h1>
				<h2 class="vignets2">Sur le site des Éclaireuses et Éclaireurs d'Annonay</h2>
				<h3 class="vignets2"></h3>
		</div>
		</div>
		
	</section>

		
	
	<section>
		<?= $this->section('main_content') ?>
	</section>
 	<footer>
 		<div class="footer container text-center">
			<div class="row">
				<div class="col-sm-5">
					&copy; EEDF Annonay 2017
				</div>
				<div class="col-sm-2">
					<div id="retourhaut">
					 	<a href="#logohaut"><span class="glyphicon glyphicon-chevron-up"></span></a>
					</div>
				</div>
				<div class="col-sm-5">
					<a href="<?= $this->url('default_contact') ?>">Nous contacter</a>
				</div>

			</div>
		</div>
	</footer>

	<?= $this->section('script') ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="<?= $this->assetUrl('js/bootstrap.js') ?>"></script>
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<script>
		/* Rendre la navbar active */


		/* apparition titre progressive */
		$(function(){
		    $(".vignets").addClass("load");
		    $(".vignets2").addClass("load");
		});
	</script>

	<!-- apparition texte progressive -->
	<script type="text/javascript">
		window.sr = ScrollReveal({ duration: 3000 });
		sr.reveal('.foo', 2000);
		sr.reveal('.bar', 1500);
		sr.reveal('.apr', 600);
	</script>

</body>
</html>
