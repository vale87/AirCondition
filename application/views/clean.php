
<div id="detail_services">
    <div class="content">
        <h2 class="h2_services wow fadeInDown">Limpieza</h2>
            <div class="row wow fadeInDown">
                <div id="divimg" class="col-xs-3">
                    <img id="img_details" src="<?php echo base_url(); ?>/assets/images/hairstyle2.jpg" alt="">
                </div>    
                <div class="col-xs-9">
                    <p>
                    Aunque están ocultos, sus conductos son una parte importante de su sistema HVAC. 
                    Los conductos dañados, sucios o mal planificados pueden tener un impacto significativo 
                    en la calidad de su aire interior, así como en el costo de calefacción y enfriamiento 
                    de su hogar. Nuestros técnicos experimentados ofrecen una amplia reparación 
                    de HVAC en Miami, incluyendo limpieza de conductos de aire, sellado de conductos y 
                    reparación de conductos, si no reemplazo para una calefacción y refrigeración más 
                    eficientes y saludables.
                      </p>
                </div>      
            </div>    
            <?php  foreach ($query as $row): ?>        
        <div id="item_services" class="float_left wow zoomIn">
            <div class="logo_mark">
                <p><span>Servicio: </span><?=$row->servicio?></p>
                <p><span id="price">$ <?=$row->price?> </span>+taxes</p>
            </div>
        </div>
        <?php endforeach;?>
        
    </div>
</div>