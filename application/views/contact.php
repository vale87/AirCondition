	<div id="contact">
		<div class="content row wow zoomIn">
			<div class="col-sm">
				<h2>Contacto</h2>
				<ul>
					<li>
						<h3><span>Ventas :</span> <?=$contact->phone?></h3>
					</li>
					<li>
						<span>Direccion :</span> <?=$contact->addres?>
					</li>			
					<li>
						<span>Licencia:</span> <?=$contact->lic?>
					</li>
					<li style="font-size:0.4em">
						<span>Oficina :</span> <?=$contact->fax?>
					</li>
				</ul>
				<div id="map"></div>
			</div>
			<div class="form col-sm-12 col-md-6 hide">
				<section class="contact-wrap">
				  <form action="" class="contact-form">
					<div class="col-sm-6">
					  <div class="input-block">
						<label for="">First Name</label>
						<input type="text" class="form-control">
					  </div>
					</div>
					<div class="col-sm-6">
					  <div class="input-block">
						<label for="">Last Name</label>
						<input type="text" class="form-control">
					  </div>
					</div>
					<div class="col-sm-12">
					  <div class="input-block">
						<label for="">Email</label>
						<input type="text" class="form-control">
					  </div>
					</div>
					<div class="col-sm-12">
					  <div class="input-block">
						<label for="">Message Subject</label>
						<input type="text" class="form-control">
					  </div>
					</div>
					<div class="col-sm-12">
					  <div class="input-block textarea">
						<label for="">Drop your message here</label>
						<textarea rows="3" type="text" class="form-control"></textarea>
					  </div>
					</div>
					<div class="col-sm-12">
					  <button class="square-button">Send</button>
					</div>
				  </form>
				</section>
			</div>
		</div>
	</div>
