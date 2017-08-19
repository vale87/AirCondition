<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>J.R.H. General Services, Corp</title>
	
	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css"> 
     <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/carousel.css">

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0XjBdO-_XAL87OVmC4evqxsu0rCkL6xE&callback=initMap"
    async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        var map;
        function initMap() {
            var work = {lat: 33.989883, lng: -118.435518};
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
        <div class="content row between-xs middle-xs">            
    
            <div class="logo col-xs-3">
                <h1><a href="index.html">J.R.H.</a></h1>
            </div><!-- logo -->

          

            <nav  class="navigation col-xs-7" id="navigation">
                <ul id="nav">
                    <li class="selected">
                        <a href=<?php echo base_url(); ?>>Home</a>
                    </li>
                    <li>
                        <a href=<?php echo base_url(); ?>#about>About</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/welcome/services">Services</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/welcome/contact">Contact</a>
                    </li>
                </ul>
            </nav>

            <div class="contact col-xs-2">
                1-800-000-0000           
            </div>
        </div>
    </div>

    <div id="body">