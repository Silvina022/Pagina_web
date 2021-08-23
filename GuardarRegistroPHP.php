<?php

$conectar =mysql_connect('localhost','root', '')

if (!$conectar){
	echo "No se pudo conectar con el servidor"
}else {

	$base= mysql_select_db('usuarios');


	if (!$base) {
		echo "No se encontro la base de datos"


		$Apellido=$POST[USU_APELLIDO]
		$Nombre=$POST[USU_NOMBRE]
		$Dni=$POST[USU_DNI]
		$Tramite=$POST[USU_TRAMITE]
		$Fechadenacimiento=$POST[USU_FECH_NAC]
		$Correo=$POST[USU_EMAIL]
		$Localidad=$POST[LOC_ID]
		$Pass=$POST[USU_PASS]
		$Notificacion=$POST[USU_NOTI]
		
		

		$SQL= "insert into datos VALUE ('USU_APELLIDO
										USU_NOMBRE
										USU_DNI
										USU_TRAMITE
										USU_FECH_NAC
										USU_EMAIL
										LOC_ID
										USU_PASS
										USU_NOTI')";




		$ejecutar= mysql_query($sql)

		if(!$ejecutar){
			echo"Hubo algun error ";

			}else {
				echo"Datos guardados correctamente <br><a href='index.html'> Volver </a>";



}



?>
