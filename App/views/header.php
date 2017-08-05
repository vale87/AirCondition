<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Air Condition</title>
	
	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../media/css/style.css">
	<link rel="stylesheet" href="../media/css/carousel.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script>
posicionarMenu();

$(window).scroll(function() {    
    posicionarMenu();
});

function posicionarMenu() {
    var altura_del_header = $('.logo').outerHeight(true);
    var altura_del_menu = $(".selected").outerHeight(true);
	console.log("ocultar: "+altura_del_header);
	console.log("mostar: "+altura_del_menu);
	console.log("altura: "+$(window).scrollTop())

    if ($(window).scrollTop() >= altura_del_header){
	$('.navigation').addClass('navfixed');
	$('#nav').css('padding-top', 0 + 'px');
	}
    else{
		$('.navigation').removeClass('navfixed');
		$('#nav').css('padding-top', 114 + 'px');
		
	}
}

$('#carouselFade').carousel();

</script>
</head>
<body>
	<div id="header">
		<div class="section">

			<nav  class="navigation" id="navigation">
				<ul id=nav>
					<li class="selected">
						<a href="index.html">home</a>
					</li>
					<li>
						<a href="about.html">about</a>
					</li>
					<li>
						<a href="services.html">services</a>
					</li>
					<li>
						<a href="contact.html">contact</a>
					</li>
				</ul>
			</nav>
			<div class="logo">
				<a href="index.html">Air Condition</a>
			</div>
		</div>   
        
</div>                  