<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>J.R.H. General Services, Corp</title>
	
	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css"> 
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" >
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/carousel.css">

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAp4lKN5U3c693-qeV_PqKJgGPH1imES4w&callback=initMap"
    async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    <script type="text/javascript">
        var map;
        function initMap() {
            var work = {lat: 25.522990, lng: -80.401690};
            map = new google.maps.Map(document.getElementById('map'), {
            center: work,
            zoom: 15
            });
            var marker = new google.maps.Marker({
          position: work,
          map: map
        });
      }
            $(document).ready(function() {
            $('.carousel').carousel({
            interval: 6000
            })
        });

$(document).ready(function(){

	//material contact form
	$('.contact-form').find('.form-control').each(function() {
	  var targetItem = $(this).parent();
	  if ($(this).val()) {
		$(targetItem).find('label').css({
		  'top': '10px',
		  'fontSize': '14px'
		});
	  }
	})
	$('.contact-form').find('.form-control').focus(function() {
	  $(this).parent('.input-block').addClass('focus');
	  $(this).parent().find('label').animate({
		'top': '10px',
		'fontSize': '14px'
	  }, 300);
	})
	$('.contact-form').find('.form-control').blur(function() {
	  if ($(this).val().length == 0) {
		$(this).parent('.input-block').removeClass('focus');
		$(this).parent().find('label').animate({
		  'top': '25px',
		  'fontSize': '18px'
		}, 300);
	  }
	})
	
});
    </script>
</head>
<body>
     
    <div id="header">
    <div id="langua" class=" float_right">
    <a href="<?php echo base_url(); ?>index.php/en"> <span class="glyphicon glyphicon-refresh"></span> Ingles</a>
        </div>
        <div class="contentheader row between-xs middle-xs">            

            <div class="logo col-xs-6">
               <h3> <a href="index.html"><span>J.R.H. </span>General Services, Corp</a></h3>
            </div><!-- logo -->

            <div class="contact col-xs-6">
                <h3>Ventas:<span><?=$contact->phone?></span> Adrian</h3>       
            </div>
        </div>
        <nav  class="navigation" id="navigation">
                <ul id="nav" class="nav">
                    <li <?php if ($selected=="home") echo "class='selected'";?>>
                        <a href=<?php echo base_url(); ?>>Inicio</a>
                    </li>
                    <li>
                        <a href=<?php echo base_url(); ?>#about>nosotros</a>
                    </li>
                    <li <?php if ($selected=="services") echo "class='selected'";?>>
                        <a href="<?php echo base_url(); ?>index.php/welcome/services">Servicios</a>
                    </li>
                    <li <?php if ($selected=="contact") echo "class='selected'";?>>
                        <a href="<?php echo base_url(); ?>index.php/welcome/contact">Contactos</a>
                    </li>
                </ul>
            </nav>
    </div>

    <div id="body">