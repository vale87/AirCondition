<div id="detail_services">
    <div class="content">
        <h2 class="h2_services">Instalacion</h2>
            <div class="row">
                <div id="divimg" class="col-xs-3">
                    <img id="img_details" src="<?php echo base_url(); ?>/assets/images/hairstyle1.jpg" alt="">
                </div>    
                <div class="col-xs-9">
                    <p>
                        Cuando el verano está sobre nosotros, y su preocupación principal es permanecer fresco, 
                        usted necesita elegir a una compañía con experiencia. Usted quiere una compañia
                        en la que pueda confiar para manejar su casa con cuidado. 
                        Nuestros técnicos toman todas las precauciones para instalar de forma segura y 
                        eficaz su unidad con la experiencia y saber cómo se espera. 
                        También nos esforzamos para que se instale el mismo día o al día siguiente, 
                        para que pueda superar ese calor de la Florida. Nos especializamos en RHEEM, GOODMAN Y MUCHOS MÁS!
                    </p>
                </div>      
            </div>    

            <div class="controles">
                
            </div>

        <?php  foreach ($query as $row): ?>
        
             <div id="item_services" class="float_left">
                <div class="logo_mark">
                    <img id="logo_mark" src="<?php echo base_url(); ?>/assets/images/<?=$row->image?>">
                    <p><span>Marca: </span><?=$row->nombre?></p>
                    <p><span>Capacidad: </span><?=$row->capacity?></p>
                    <p><span>Eficencia: </span><?=$row->efficency?></p>
                    <h2 id="price">$ <?=$row->price?><h/2>
                </div>
            </div>
            <?php endforeach;?>
    </div>
</div>