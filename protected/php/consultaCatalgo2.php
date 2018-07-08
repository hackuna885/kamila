<?php 


error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

date_default_timezone_set('America/Mexico_City');


if (isset($_GET['idProducto']) && !empty($_GET['idProducto'])) {


	$con = new SQLite3("../../protected/data/catalogo.db") or die("Problemas para conectar!");

	
		######## Esta parte crea el catalogo de la vista previa y el zoom ########

			$cs2 = $con -> query("SELECT nomObj_catProd,mod_catProd,mat_catProd,imgDesCat_catProd FROM catProd WHERE nomObj_catProd ='$modObj' ORDER BY mod_catProd");




				while ($resul2 = $cs2 -> fetchArray()) {

					$modObj2 = $resul2['nomObj_catProd']; // Modelo
					$numModCat2 = $resul2['mod_catProd']; // Número Modelo Catalogo
					$matMod2 = $resul2['mat_catProd']; // Material del Modelo
					$imgDesCat2 = $resul2['imgDesCat_catProd']; // Imagen del Catalogo DC

				echo '


					<div class="cImg">
					<a href="../catalogo/img/dc/original/'.$imgDesCat2.'"><img class="xzoom-gallery" width="80" src="../catalogo/img/dc/thumbs/'.$imgDesCat2.'"  xpreview="../catalogo/img/dc/preview/'.$imgDesCat2.'" title="MOD. '.$numModCat2.' '.$matMod2.'"></a>
					<span>MOD. '.$numModCat2.'</span>
					</div>


				';

				}

		######## Esta parte crea el catalogo de la vista previa y el zoom ########

	$con -> close();
}

// 	$con = new SQLite3("../../protected/data/catalogo.db") or die("Problemas para conectar!");

 ?>