<html>
   <head>
      <title>StreamVid</title>
      <meta charset="utf-8">
	  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Ubuntu+Condensed" rel="stylesheet">
	  <link rel="stylesheet" href="/web/css/global.css">
	  <link rel="stylesheet" type="text/css" href="./slick/slick.css">
	  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
	</head>
	<style>
    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }
	</style>
   <body>
		<header>
			<div id="contener">
				<div id="droit">
					<div class="logo">StreamVid</div>
					<div class="menu">
						<div class="tabs">AFFICHE</div>		
						<div class="tabs">PARCOURIR</div>
						<div class="tabs">FACEBOOK</div>
					</div>
				</div>
				<div id="gauche">
					<div class="recherche">    
						<input type="text" placeholder="Recherche un film" id="film" name="recherches" />
					</div>
				</div>
			</div>
		</header>
		<div id="contener">
		<div class="pleinscontener">
			<div class="box">
			<div class="titre">
					Les plus regarder
				</div>
			<section class="regular slider">
			<div>
			<div class="affiche">
					<img src="http://images.fan-de-cinema.com/affiches/large/8a/45496.jpg" />
					<div class="bouton">Regarder</div>
				</div>
			</div>
			<div>
			<div class="affiche">
					<img src="http://images.fan-de-cinema.com/affiches/large/8a/45496.jpg" />
					<div class="bouton">Regarder</div>
			</div>
			</div>
			<div>
			<div class="affiche">
					<img src="http://images.fan-de-cinema.com/affiches/large/8a/45496.jpg" />
					<div class="bouton">Regarder</div>
			</div>	
			</div>
						<div>
			<div class="affiche">
					<img src="http://images.fan-de-cinema.com/affiches/large/8a/45496.jpg" />
					<div class="bouton">Regarder</div>
			</div>	
			</div>
						<div>
			<div class="affiche">
					<img src="http://images.fan-de-cinema.com/affiches/large/8a/45496.jpg" />
					<div class="bouton">Regarder</div>
			</div>	
			</div>
						<div>
			<div class="affiche">
					<img src="http://images.fan-de-cinema.com/affiches/large/8a/45496.jpg" />
					<div class="bouton">Regarder</div>
			</div>	
			</div>
						<div>
			<div class="affiche">
					<img src="http://images.fan-de-cinema.com/affiches/large/8a/45496.jpg" />
					<div class="bouton">Regarder</div>
			</div>	
			</div>
			
			</section>
			</DIV>
			<div class="box">
			<div class="titre">
					Les plus regarder
				</div>
			<div class="affiche">
					<img src="http://images.fan-de-cinema.com/affiches/large/8a/45496.jpg" />
					<div class="bouton">Regarder</div>
				</div>
			<div class="affiche">
					<img src="http://images.fan-de-cinema.com/affiches/large/8a/45496.jpg" />
					<div class="bouton">Regarder</div>
				</div>
			<div class="affiche">
					<img src="http://images.fan-de-cinema.com/affiches/large/8a/45496.jpg" />
					<div class="bouton">Regarder</div>
				</div>
			<div class="affiche">
					<img src="http://images.fan-de-cinema.com/affiches/large/8a/45496.jpg" />
					<div class="bouton">Regarder</div>
				</div>
			<div class="affiche">
					<img src="http://images.fan-de-cinema.com/affiches/large/8a/45496.jpg" />
					<div class="bouton">Regarder</div>
				</div>	
			</DIV>
		</div>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });
    });
  </script>

   </body>
</html>
