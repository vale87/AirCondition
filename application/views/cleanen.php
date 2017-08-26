
<div id="detail_services">
    <div class="content">
        <h2 class="h2_services wow fadeInDown">Cleaning</h2>
            <div class="row wow fadeInDown">
                <div id="divimg" class="col-xs-3">
                    <img id="img_details" src="<?php echo base_url(); ?>/assets/images/hairstyle2.jpg" alt="">
                </div>    
                <div class="col-xs-9">
                    <p>
                    Although hidden, your ducts are an important part of your HVAC system. In the quality
                    of its indoor air, as well as in the cost of heating and cooling of your home. 
                    Our experienced technicians offer extensive repair off HVAC in Miami, including
                    cleaning air ducts, sealing ducts and duct repair, if not replacement for more 
                    heating and cooling efficient and healthy.
                      </p>
                </div>      
            </div>    
            <?php  foreach ($query as $row): ?>        
        <div id="item_services" class="float_left wow zoomIn">
            <div class="logo_mark">
                <p><span>Services: </span><?=$row->services?></p>
                <p><span id="price">$ <?=$row->price?> </span>+tax</p>
            </div>
        </div>
        <?php endforeach;?>
        
    </div>
</div>