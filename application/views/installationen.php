<div id="detail_services">
    <div class="content">
        <h2 class="h2_services wow fadeInDown">Installation</h2>
        <div class="row wow fadeInDown">
            <div id="divimg" class="col-xs-3">
                <img id="img_details" src="<?php echo base_url(); ?>/assets/images/hairstyle3.jpg" alt="">
            </div>    
            <div class="col-xs-9">
                <p>
                When summer is upon us, and your main concern is to stay cool, you need to choose 
                an experienced company. You want a company which you can rely on to manage your home with care. 
                Our technicians take every precaution to install safely and effective your drive with experience
                 and know how you expect it. We also strive to install it the same day or the next day, so 
                 you can overcome that Florida heat. All our equipament have
                <Span> 10 Year Warranty </span>, we specialize in RHEEM, GOODMAN AND MANY MORE!
                </p>
            </div>      
        </div>    
    <?php  foreach ($query as $row): ?>        
        <div id="item_services" class="float_left wow zoomIn">
            <div class="logo_mark">
                <img src="<?php echo base_url(); ?>/assets/images/<?=$row->image?>">
                <p><span>Capacity: </span><?=$row->capacity?> tons</p>
                <p><span>Efficiency: </span><?=$row->efficency?></p>
                <p><span id="price">$ <?=$row->price?> </span>+tax</p>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>