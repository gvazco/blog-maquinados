<!--=====================================
FOOTER
======================================-->

<footer class="container-fluid py-5 d-none d-md-block">

	<div class="container">

		<div class="row">			

			<!--=====================================
			DATOS CONTACTO
			======================================-->

			<div class="col-sm-5 col-xs-12 text-left text-white infoContacto">
				
				<h5 class="text-white">CONTACTENOS EN:</h5>

				<br>
				
				<p>

					<i class="fa fa-phone-square" aria-hidden="true"></i> (55) 5555-5555

					<br><br>
					
					<i class="fab fa-whatsapp" aria-hidden="true"></i> (55) 5555-5555

					<br><br>

					<i class="fa fa-envelope" aria-hidden="true"></i> ventas@maquinadosindustrialesgonzales.com

					<br><br>

					<i class="fa fa-map-marker" aria-hidden="true"></i> Ricardo Flores Magón #

					<br><br>
					Izcalli Chamapa | Naucalpan, EdoMex.

				</p>

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.3418884011367!2d-99.28426568593876!3d19.440820986879718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d204091ccd34f7%3A0x4780021848091d3e!2sTechos%20y%20Mantenimientos%20Industriales%20%7C%20Mevasa%20Comercializadora!5e0!3m2!1ses-419!2smx!4v1569427486686!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" width="85%" height="250" frameborder="0"></iframe>

			</div>

			<!--=====================================
			CATEGORÍAS Y SUBCATEGORÍAS FOOTER
			======================================-->

			<div class="col-md-4">

				<h5 class="text-white">CONTENIDO:</h5>

				<br>

				<?php foreach ($categorias as $key => $value): ?>

					<li class="nav-item" style="list-style: none;">

						<a class="nav-link cat" href="<?php echo $blog["dominio"].$value["ruta_categoria"]; ?>"><?php echo $value["descripcion_categoria"] ?></a>

					</li>

				<?php endforeach ?>


			</div>

			<!--=====================================
			FORMULARIO CONTÁCTENOS
			======================================-->

			<div class="col-md-3 col-sm-6 col-xs-12 formContacto">
				
				<h5 class="text-white">RESUELVA SU INQUIETUD</h5>

				<br>

				<form role="form" method="post" onsubmit="">

					<input type="text" id="nombreContactenos" name="nombreContactenos" class="form-control" placeholder="Escriba su nombre" required=""> 

					<br>

					<input type="email" id="emailContactenos" name="emailContactenos" class="	form-control" placeholder="Escriba su correo electrónico" required="">  

					<br>

					<textarea id="mensajeContactenos" name="mensajeContactenos" class="form-control" placeholder="Escriba su mensaje" rows="5" required=""></textarea>

					<br>

					<input type="submit" value="Enviar" class="btn btn-default backColor pull-right" id="enviar" style="background: deepskyblue none repeat scroll 0% 0%; color: rgb(255, 255, 255);">         

				</form>

				<br>

				<hr>


				<div class="p-0 w-100 pt-2">

					<ul class="d-flex justify-content-left p-0">

						<?php 

						$redesSociales = json_decode($blog["redes_sociales"], true);

						foreach ($redesSociales as $key => $value) {

							echo '<li>
							<a href="'.$value["url"].'" target="_blank">
							<i class="'.$value["icono"].' lead text-white mr-3 mr-sm-4"></i>
							</a>
							</li>';
						}

						?>



					</ul>

				</div>

				
			</div>
			
		</div>

	</div>

</div>

</div>

<hr class="pb-2">

<center>	

<p style="color:white">© 2020 - Maquinados Industriales González. Todos los derechos reservados. Diseño y desarrollo por <a href="#" class="cat">Disturbio ilustrativo</a>.</p>

</center>

</footer>