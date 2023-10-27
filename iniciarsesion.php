<html>
    <head>
    <title>Ingrese sus datos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
       <?php
            $emailError=$contraError="";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $Email = trim($_POST['Email']);
                $Contra = trim($_POST['Contra']);

                if($Email==""){
                    $emailError="Ingrese su correo electrónico.<br>";
                }

                if(($Contra=="") || (strlen($Contra)<6)){
                    $contraError = "Ingrese su contrase&ntildea.";
                }

            }
       ?> 
        <form method="post">
           <h2> Inicia sesi&oacuten:</h2><br>
            E-mail:<br>    
                <input type="text" name="Email" > <br>
                <span class="error"> <?php echo $emailError; ?></span><br>

            Contrase&ntildea:<br>
               <input type="password" name="Contra"><br>
               <span class="error"> <?php echo $contraError; ?></span><br>

            <input type="submit" name="Ingresar" value="Ingresar"><br><br>

            <a href="recuperarcontra.php"> ¿Olvidaste tu contrase&ntildea? 
        </a>
        </form>
        <?php 
           
          // include("usuarios.php");
           //include("mostrarUsuario.php");
            
        ?>
    </body>
</html>