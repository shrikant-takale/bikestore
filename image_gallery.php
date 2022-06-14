<?php include("includes/header.php");
include("includes/menu2.php");
include("menu.php");?>
<html>
<head>
<title>Image Gallery
</title>
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
<link rel="stylesheet" type="text/css" href="css/custom.css" />
<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
</head>
<body>
<div id="content">
<br>
<div class="wrapper">
<ul id="sb-slider" class="sb-slider">
<li><a href="" target="_blank">
<li><a href="" target="_blank">
<img src="image_gallery/gallery/yam10s.jpg" alt="image1"/></a>
</li>
<li>
<a href="" target="_blank">
<img src="image_gallery/gallery/yam12m.jpg" alt="image1"/></a>
</li>
<li>
<a href="" target="_blank">
<img src="image_gallery/gallery/yam15a.jpg" alt="image1"/></a>
</li>
<li>
<a href="" target="_blank">
<img src="image_gallery/gallery/yam17a.jpg" alt="image1"/></a>
</li>
<li>
<a href="" target="_blank">
<img src="image_gallery/gallery/yam18v.jpg" alt="image1"/></a>
</li>
<li>
<a href="" target="_blank">
<img src="image_gallery/gallery/yam19d.jpg" alt="image1"/></a>
</li>
<li>
<a href="" target="_blank">
<img src="image_gallery/gallery/yam3d.jpg" alt="image1"/></a>
</li>
<li>
<a href="" target="_blank">
<img src="image_gallery/gallery/yam4a.jpg" alt="image1"/></a>
</li>
</ul>
<div id="shadow" class="shadow"></div>
<div id="nav-arrows" class="nav-arrows">
<a href="#">Next</a>
<a href="#">Previous</a>
</div>
</div><!-- /wrapper -->
<?php include("includes/footer.php");?>
</div>
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
});
</script>

</body>
</html>