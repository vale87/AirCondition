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

	<div id="body" class="body">

  <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">  
				<img src="https://snap-photos.s3.amazonaws.com/img-thumbs/960w/HZZKGVVJ6I.jpg" alt="buffalo-skyline" />
               
                <div class="carousel-caption">
                  <h3>First slide label</h3>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            <div class="item"> 
				<img src="https://snap-photos.s3.amazonaws.com/img-thumbs/960w/D2ROMCUEIV.jpg" alt="buffalo-skyline"  />
               
                <div class="carousel-caption">
                  <h3>Second slide label</h3>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            <div class="item"> 
				<img src="https://snap-photos.s3.amazonaws.com/img-thumbs/960w/PU9HHZB5QW.jpg" alt="buffalo-skyline" />
               
                <div class="carousel-caption">
                  <h3>Third slide label</h3>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carouselFade" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselFade" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

		<ul>
			<li>				
				<a href="hairstyle.html"><div id="divimg"><img src="../media/images/hairstyle1.jpg" alt=""></div></a>
				
				<b>Installation</b>
				<p>
					Resumen de nuestro sitio y de las coasa que hacemos
				</p>
			</li>
			<li>
				<a href="hairstyle.html"><div id="divimg"><img src="../media/images/hairstyle2.jpg" alt=""></div></a>
				<b>Cleaning</b>
				<p>
					Resumen de nuestro sitio y de las coasa que hacemos
				</p>
			</li>
			<li>
				<a href="hairstyle.html"><div id="divimg"><img src="../media/images/hairstyle3.jpg" alt=""></div></a>
				<b>Maintenance</b>
				<p>
					Resumen de nuestro sitio y de las coasa que hacemos
				</p>
			</li>
			<li>
				<a href="hairstyle.html"><div id="divimg"><img src="../media/images/hairstyle4.jpg" alt=""></div></a>
				<b>Repair</b>
				<p>
					Resumen de nuestro sitio y de las coasa que hacemos
				</p>
			</li>
		</ul>
		<div>
			<div class="featured">
				<h2>Resume</h2>
				<img src="../media/images/featured.jpg" alt="">
				<h3> I just meet you</h3>
				<p>
					Resumen de nuestro sitio y de las coasa que hacemos You can do a lot with them. You can modify them. You can use them to design websites for clients, so long as you agree with the Terms of Use.
				</p>
				<p>
					You can even remove all our links if you want to. Looking for more templates? Just browse through all our Free Website Templates and find what you’re looking for. But if you don’t find any website template you can use, you can try our Free Web Design service and tell us all about it. Maybe you’re looking for something different, something special.
				</p>
				<p>
					And we love the challenge of doing something different and something special. If you’re experiencing issues and concerns about this website template, join the discussion on our forum and meet other people in the community who share the same interests with you. Version 13.
				</p>
			</div>
			<div class="section">
				<div class="article">
					<h2>Frase de Marketing</h2>
					<p>
						This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
					</p>
					<a href="#">Mike M.</a>
				</div>
				<div class="newsletter">
					<img src="../media/images/skinhead.png" alt="">
					<p>
						Do you need help with your air condition? Let us help you in bringing back your confidence. <span>Call Us at 1800-0000-0000</span>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div id="footer">
		<div>
			<div class="connect">
				<a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a>
				<a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a>
				<a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">googleplus</a>
				<a href="http://pinterest.com/fwtemplates/" id="pinterest">pinterest</a>
			</div>
			<p>
				&copy; copyright 2023 | all rights reserved.
			</p>
		</div>
	</div>
</body>
</html>