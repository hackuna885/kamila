</div>

<?php include("../../protected/php/consultaCatalgo.php");?>
			<!-- Main -->
				<div class="wrapper">
					<div class="container" id="main">
						<div class="row 150%">
							<div class="3u 12u(narrower)">

								<!-- Sidebar -->
									<section id="sidebar">
										<section>
											<header>
												<h3>Titulo</h3>
											</header>
											<p>Texto</p>
											<ul class="actions">
												<li><a href="#" class="button">Texto</a></li>
											</ul>
										</section>
										<section>
											<a href="#" class="image featured"><img src="../images/pic07.jpg" alt="" /></a>
											<header>
												<h3>Titulo</h3>
											</header>
											<p>Texto.</p>
											<ul class="actions">
												<li><a href="#" class="button">Texto</a></li>
											</ul>
										</section>
									</section>

							</div>
							<div class="8u 12u(narrower) important(narrower)">

								<!-- Content -->
									<article id="content">
										<header>
											<h2><b><?php echo $modObj;?></b></h2>
											<h3>MOD. <?php echo $numModCat;?></h3>
											<h4><b><?php echo $matMod;?></b></h4>
										</header>
										<section id="default" class="padding-top0">
										    <div class="row">
										      
										      <div class="image featured">
										        <div class="xzoom-container">

										          <?php echo $imgXzoom;?>

										          <!-- <img class="xzoom" id="xzoom-default" src="../catalogo/img/dc/preview/LAMPFLOR101_DC.jpg" xoriginal="../catalogo/img/dc/original/LAMPFLOR101_DC.jpg" /> -->
										          <br>
										          <br>
										          <div class="xzoom-thumbs">

										          	<?php include("../../protected/php/consultaCatalgo2.php");?>



										          </div>
										        </div>

										        <section class="imgX image featured">
										        	
											        	<span class="cotaSup">45 Ø</span>
											       		<span class="cotaLat">69 cm</span>

										       				<?php echo $imgDibujoTec;?>
										       		

										    	</section>
										        

										        <!-- posible accion del paos siguiente -->    
										      </div>

										    </section>
										
									</article>

							</div>
						</div>
<br><br>
