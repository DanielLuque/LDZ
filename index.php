<?php require_once("php/header.php");?>
<?php include_once("php/nav.php");?>

<style>
  #draggable { width: auto; height: auto; padding: 0em; }
</style>
<script>
  $(function() {
    $( "#draggable" ).draggable();
  });
</script>

	<div class='container'>
			<div class='col-sm-12'>
				<div class='col-xs-offset-0 ui-widget-content' id="draggable">
		        <h1>Las Lecciones del Doctor Zoroastro<br />
		           <small>o cómo mantener el ritmo sin metrónomo.</small>
		        </h1>
				</div>
				<div id='btn-toHome'>
	        <i> A Reina Jael. </i><br /><br />
	        <a href='../index.php'>Inicio</a>
					<div class='lead' style='font-family: serif; font-size: 2em;'>
							INDEX.
					</div>
				</div>
        <p class="bg-primary">
            Corre en cualquier sistema con un mínimo de 128KB de memoria.  				<br/>
            En todo caso, un desfibrilador funcional en buenas condiciones.  			<br/>
            Para los robots entre ustedes, los pointers y direcciones las pueden encontrar  <br/>
            en la pendiente de la recta tangente para el punto medio de una curva.  <br/>
        </p>
			</div>
			<!-- PORTADA -->
		<div class="col-xs-10  col-lg-offset-2 portada-boca">
			<img src="images/mouth.png" class="responsive col-xs-8"/>
		</div>
	</div>
  <!-- GRID! -->
	<div class="container col-lg-offset-2">
			<div class="row ">
			  <div class="col-xs-12 col-sm-3">
				  <div id='thumb-ldz' class="thumbnail">
						<div class="caption">
							<h6>LAS LECCIONES DEL DOCTOR ZOROASTRO <br><small>O CÓMO MANTENER EL RITMO SIN METRONOMO</small> </h6>
								<a href="php/ldz.php">
									<img src="images/mouth.png" class="img-responsive">
								</a>
					</div>
				</div>
			</div>
      <!--
			  <div class="col-xs-12 col-sm-3">
			    <div class="thumbnail">
						<div class="caption">
							<h6>LA RISA DE VISHNÙ EL DESTRUCTOR <br><small>O QUEDARSE DORMIDO EN MEDIO DE UNA CONVERSACIÓN.</small></h6>
							<a href="php/ldz.php">
								<img src="images/bubble.jpg" class="img-responsive">
							</a>
						</div>
			    </div>
			  </div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-3">
					<div class="thumbnail">
						<div class="caption">
							<h6>LA VENGANZA DE SIDDHARTHA BORRACHO <br> <small>O SOBRE LA ESTUPIDEZ ARTIFICIAL.</small></h6>
						</div>
						<a href="php/ldz.php">
							<img src="images/smoke.jpg" class="img-responsive">
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3">
					<div class="thumbnail">
						<div class="caption">
							<h6>LOS ERRORES DEL MAESTRO LAO-TSE <br><small>O ENTRE EL VAPOR DE HIERRO Y LA BOMBA DE SODIO-POTASIO.</small></h6>
							<a href="php/ldz.php">
								<img src="images/ojo.jpg" class="img-responsive">
							</a>
						</div>
					</div>
				</div>
-->

			</div>
		</div>

    <!--    ./GRID    -->
    <div class="container">
    <script>
			$("p").hover(function(){
	    $(this).css("background-color", "red");
	    }, function(){
	    $(this).css("background-color", "blue");
	   });

  	$("#thumb-ldz").hover(function(){
  		$(this).css("color", "red");
  	}, function(){
  		$(this).css("color", "blue");
  	});

   </script>

		</div>
	</div>
</div>
<?php include_once("php/footer.php");?>
