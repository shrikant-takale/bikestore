<?php include("includes/header.php");
include("includes/menu1.php");?>
<html>
<head>

<title>Home
</title>
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
</head>
<body>
<div id="content">
<br><center><h2>Welcome to Shree Yamaha</h2>
</center>
<div class="wrapper">
                <ul id="sb-slider" class="sb-slider">
                    <li>
						<a href="" target="_blank"><img src="includes/03.jpg" alt="image1"/></a>
					</li>					
                    <li>
						<a href="" target="_blank"><img src="includes/01.jpg" alt="image1"/></a>
					</li>
                    <li>
						<a href="" target="_blank"><img src="includes/06.jpg" alt="image1"/></a>
					</li>
                    <li>
						<a href="" target="_blank"><img src="includes/limited_edition.jpg" alt="image1"/></a>
					</li>                   					
				</ul>

				<div id="shadow" class="shadow"></div>

				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>

			</div><!-- /wrapper -->
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.slicebox.js"></script>
		<script type="text/javascript">
			$(function() {
				
				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$shadow.show();

							},
							orientation : 'r',
							cuboidsRandom : true,
							disperseFactor : 30
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

						};

						return { init : init };

				})();

				Page.init();
