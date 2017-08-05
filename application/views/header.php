<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>Air Condition</title>
	
	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">    
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/carousel.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.carousel').carousel({
            interval: 6000
            })
        });
          jQuery(function($) {
                var open = false;

                function resizeMenu() {
                    if ($(this).width() < 768) {
                        if (!open) {
                            $("#navigation").hide();
                        }
                        $("#menu-button").show();
                    }
                    else if ($(this).width() >= 768) {
                        if (!open) {
                            $("#navigation").show();
                        }
                        $("#menu-button").hide();
                    }
                }

                function setupMenuButton() {
                    $("#menu-button").click(function(e) {
                        e.preventDefault();

                        if (open) {
                            $("#navigation").fadeOut();
                            $("#menu-button").toggleClass("selected");
                        }
                        else {
                            $("#navigation").fadeIn();
                            $("#menu-button").toggleClass("selected");
                        }
                        open = !open;
                    });
                }


                $(window).resize(resizeMenu);

                resizeMenu();
                setupMenuButton();
            });
    </script>
</head>
<body>
     
    <div id="header">
        <div class="content row between-xs middle-xs">            
    
            <div class="logo col-xs-4">
                <h1><a href="index.html">Air Condition</a></h1>
            </div><!-- logo -->

          

            <nav  class="navigation col-xs-6" id="navigation">
                <ul id="nav">
                    <li class="selected">
                        <a href=<?php echo base_url(); ?>>Home</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index/about">Services</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index/services">Products</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index/contact">Contact</a>
                    </li>
                </ul>
            </nav>

            <div class="contact col-xs-2 ">
                1-800-000-0000           
            </div>
        </div>
    </div>

    <div id="body">