<div id="services" <?php if ($selected=="services"):?> class='servicesreset wow bounceInLeft' <?php else:?> class='services wow bounceInLeft' <?php  endif?>>
    <div class="content wow bounceInLeft"> 
      <h2>SERVICIOS</h2><br>
        <div class="row betweem-xs center-xs">

          <div class="col-xs">
            <h3>Instalacion</h3>
            <a href="<?php echo base_url(); ?>index.php/welcome/installation"><div id="divimg"><img src="<?php echo base_url(); ?>/assets/images/hairstyle1.jpg" alt=""></div></a>
            <p></p>
          </div>

          <div class="col-xs">
            <h3>Reparacion</h3>
            <a href="<?php echo base_url(); ?>index.php/welcome/repair"><div id="divimg"><img src="<?php echo base_url(); ?>/assets/images/hairstyle3.jpg" alt=""></div></a>
            <p></p>
          </div>

          <div class="col-xs">
            <h3>Limpieza</h3>
            <a href="<?php echo base_url(); ?>index.php/welcome/clean"><div id="divimg"><img src="<?php echo base_url(); ?>/assets/images/hairstyle2.jpg" alt=""></div></a>
            <p></p>
          </div>
      </div> 
    </div>
</div>
 