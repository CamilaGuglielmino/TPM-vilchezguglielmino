<?php 

include("conexion.php");

if (isset($_POST['Ingresar'])) {
    if (strlen($_POST['Email']) >= 1) {
	    
	    $email = trim($_POST['Email']);
        $contra = trim($_POST['Contra']);
	    $consulta = "INSERT INTO datos(correo, contraseña) VALUES ('$email','$contra')";
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