<?php 

include("conexion.php");

if (isset($_POST['oferta'])) {
    if(isset($_POST['servicios'])){
        $ID = mt_rand();
        $provincia = $_REQUEST['provincia'];
        $ciudad = trim($_POST['ciudad']);
        $codigoPostal = trim($_POST['codigoPostal']);
        $direccion = trim($_POST['direccion']);
        $tipo_propiedad = $_REQUEST['tipoPropiedad'];
        $costo = trim($_POST['costo']);
        $tiempoMin = trim($_POST['tiempoMin']);
        $tiempoMax = trim($_POST['tiempoMax']);
        $cupo = trim($_POST['cupo']);
        $titulo = trim($_POST['titulo']);
        $descripcion = trim($_POST['descripcion']);
        $servicios = implode(' ', $_POST['servicios']); 
        
        
	    $consulta = "INSERT INTO datos(ID,Provincia,ciudad,codigoPostal,direccion,tipoPropiedad,serviciosBasicos,costo,tiempoMin,tiempoMax,cupo,titulo,descripcion) VALUES ( '$ID','$provincia','$ciudad','$codigoPostal','$direccion','$tipo_propiedad','$servicios','$costo','$tiempoMin','$tiempoMax','$cupo','$titulo','$descripcion')";
	    $resultado = mysqli_query($conex,$consulta);

	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>