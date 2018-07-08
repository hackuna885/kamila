<?php 


error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

date_default_timezone_set('America/Mexico_City');

// if (empty($_GET['pag'])) {
// 	$pag = 1;
// }else{
// 	$pag = $_GET['pag'];
// }
if (isset($_GET['idProducto']) && !empty($_GET['idProducto'])) {


	$con = new SQLite3("../../protected/data/catalogo.db") or die("Problemas para conectar!");

	$cs = $con -> query("SELECT nomObj_catProd,mod_catProd,mat_catProd,imgDesCat_catProd,imgDibujoTec_catProd FROM catProd WHERE id = '$_GET[idProducto]'");

		while ($resul = $cs -> fetchArray()) {

			$modObj = $resul['nomObj_catProd']; // Modelo
			$numModCat = $resul['mod_catProd']; // Número Modelo Catalogo
			$matMod = $resul['mat_catProd']; // Material del Modelo
			$imgDesCat = $resul['imgDesCat_catProd']; // Imagen del Catalogo DC
			$imgDibTec = $resul['imgDibujoTec_catProd']; // Dibujo Técnico del Catalogo DT

		}

		$imgXzoom = '<img class="xzoom" id="xzoom-default" src="../catalogo/img/dc/preview/'.$imgDesCat.'" xoriginal="../catalogo/img/dc/original/'.$imgDesCat.'" />';

		$imgDibujoTec = '<img src="../catalogo/img/dt/'.$imgDibTec.'" alt="">';


// 		$xzoom = '

// 										            <div class="cImg">
// 										            <a href="../catalogo/img/dc/original/'.$imgDesCat.'"><img class="xzoom-gallery" width="80" src="../catalogo/img/dc/thumbs/'.$imgDesCat.'"  xpreview="../catalogo/img/dc/preview/'.$imgDesCat.'" title="MOD. '.$numModCat.' '.$matMod.'"></a>
// 										            <span>MOD. '.$numModCat.'</span>
// 										            </div>
										            

// ';
										          


	$con -> close();
}

// 	$con = new SQLite3("../../protected/data/catalogo.db") or die("Problemas para conectar!");


 ?>