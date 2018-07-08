<?php 


error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

date_default_timezone_set('America/Mexico_City');

if (empty($_GET['pag'])) {
	$pag = 1;
}else{
	$pag = $_GET['pag'];
}


	$con = new SQLite3("../../protected/data/catalogo.db") or die("Problemas para conectar!");




	$cs = $con -> query("SELECT COUNT(id) AS noRegs FROM catProd WHERE catEst_catProd = '1'");

	while ($resul = $cs -> fetchArray()) {

		$noRegs = $resul['noRegs']; //Numero de Registros dentro de una tabla
	}

	$cpm =9; //Esta es la cantidad de filas para mostrar
	$ultimapag = ceil($noRegs/$cpm); //Numero de Registro entre Numero de Filas nos da, el numero de Hojas
	$pag = (int)$pag; //Convierte el valo de Pagina en Numerico

	if ($pag < 0) {
		$pag = 1;
	}elseif ($pag > $ultimapag){
		$pag = $ultimapag;
	}


	$cs2 = $con -> query("SELECT * FROM catProd WHERE catEst_catProd = '1' LIMIT ($pag-1) * $cpm,$cpm");

	while ($resul2 = $cs2 -> fetchArray()) {

		$idProducto = $resul2['id'];
		$producto = $resul2['nomObj_catProd'];
		$modelo = $resul2['mod_catProd'];
		$material = $resul2['mat_catProd'];
		$imgCatalogo = $resul2['imgCat_catProd'];

		 echo '
							<section class="4u 12u(narrower) feature">
								<div class="image-wrapper first">
									<a href="../catDetalles/kamila.aspx?idProducto='.$idProducto.'" class="image featured"><img src="../catalogo/img/c/'.$imgCatalogo.'" alt="" /></a>
								</div>
								<header>
									<h3>'.$producto.'</h3>
								</header>
								<p><b>MOD. '.$modelo.'</b></p>
								<p>'.$material.'</p>
								<ul class="actions">
									<li><a href="#" class="button">Más detalles</a></li>
								</ul>
							</section>





		 ';
	}

	$siguiente = $pag+1;
	$anterior = $pag-1;


	echo "</div>
			<br><br>
				<div class='paginacion'>";

	if ($pag == 1) {

		echo "<span class='button'>Anterior</span><span class='button2'>1</span>";

		for ($i=2; $i <= $ultimapag ; $i++) { 
			echo '<a class="button" href="?pag='.$i.'?">'.$i.'</a>';
		}

	}

	if ($pag != 1 && $pag > 1) {
		echo '<a class="button" href="?pag='.$anterior.'?"> Anterior</a>';
	}

	for ($c=1; $c <= $ultimapag ; $c++) { 
		if ($c == $pag && $pag != 1) {
			echo "<span class='button2'>".$c."</span>";
		}elseif($pag != 1){
			echo '<a class="button" href="?pag='.$c.'?">'.$c.'</a>';
		}
	}

	if ($pag < $ultimapag) {
		echo '<a class="button" href="?pag='.$siguiente.'?"> Siguiente</a>';
	}else{
		echo "<span class='button'>Siguiente</span>";
	}
		

	$con -> close();

	echo "</div>";

 ?>