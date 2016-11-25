<?php
namespace Compropolis\Library;

	class EscalarImagen{
		public static function recibeImagen($path,$filename){//se recibira algo de la forma C://dir/dir/imagen.formato
			$heighTamano = [150,300,600];
			$archivo = $path.$filename;//concateno la direccion y el nombre de la imagen
			$formatoYNombreImagen = explode(".", $filename);
			if(file_exists($archivo)){
				echo '<script> console.log("Existe la imagen");</script>';
			}
			else{
				echo '<script> console.log("No existe la imagen");</script>';
			}

			$info_imagen = getimagesize($archivo);//obtiene la información de la imagen
			$imagen_ancho = $info_imagen[0];//obtengo el ancho de la imagen
			$imagen_alto = $info_imagen[1];//obtengo el alto de la imagen
			$imagen_tipo = $info_imagen['mime'];//obtengo el formato de la imagen

			for($i=0;$i<count($heighTamano);$i++){
				$tamano = $heighTamano[$i];
				$miniatura_alto_maximo = $tamano;//se fija la altura
				$miniatura_ancho_maximo = ($tamano*$imagen_ancho)/$imagen_alto;//se obtiene el ancho con respecto a la altura

				//establecemos la proporción
				$proporcion_imagen = $imagen_ancho / $imagen_alto;
				$proporcion_miniatura = $miniatura_ancho_maximo / $miniatura_alto_maximo;

				if ( $proporcion_imagen > $proporcion_miniatura ){
					$miniatura_ancho = $miniatura_ancho_maximo;
					$miniatura_alto = $miniatura_ancho_maximo / $proporcion_imagen;
				} else if ( $proporcion_imagen < $proporcion_miniatura ){
					$miniatura_ancho = $miniatura_ancho_maximo * $proporcion_imagen;
					$miniatura_alto = $miniatura_alto_maximo;
				} else {
					$miniatura_ancho = $miniatura_ancho_maximo;
					$miniatura_alto = $miniatura_alto_maximo;
				}
				//Dependiendo el formato de la imagen, crea una nueva imagen a partir de la original
				switch ( $imagen_tipo ){
					case "image/jpg":
					case "image/jpeg":
						$imagen = imagecreatefromjpeg( $archivo );
						break;
					case "image/png":
						$imagen = imagecreatefrompng( $archivo );
						break;
					case "image/gif":
						$imagen = imagecreatefromgif( $archivo );
						break;
				}
				$lienzo = imagecreatetruecolor( $miniatura_ancho, $miniatura_alto );//Crea el fondo donde se colocará la imagen
				imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho, $miniatura_alto, $imagen_ancho, $imagen_alto);//Copia y cambia el tamaño de parte de una imagen redimensionándola
				if($imagen_tipo == "image/jpg" || $imagen_tipo =="image/jpeg"){
					imagejpeg($lienzo, $path.$formatoYNombreImagen[0]."-".$heighTamano[$i].".".$formatoYNombreImagen[1], 80);
				}else if( $imagen_tipo == "image/png" ){
					imagepng($lienzo, $path.$formatoYNombreImagen[0]."-".$heighTamano[$i].".".$formatoYNombreImagen[1], 80);
				}else if ($imagen_tipo == "image/gif"){
					imagegif($lienzo, $path.$formatoYNombreImagen[0]."-".$heighTamano[$i].".".$formatoYNombreImagen[1], 80);
				}
			}
		}
	}
?>
