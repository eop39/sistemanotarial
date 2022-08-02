<?php


	
	error_reporting(0);
	include_once ("classbusqueda.php");


	$pass="";
	$db="eopf";
	$user="root";
	$servidor="127.0.0.1";
	$b="";
	$password="";

	$conexion=mysqli_connect($servidor,$user,$pass,$db);
	$conexion->set_charset("utf8");
	if(!$conexion){

		die;

	}
	if ($_POST["buscar"]){

		$tabla="usuarios";
		$campo="usuario";
		$quedevuelve="clave";
		$password=($_POST["clave"]);
 
	  $filtro=($_POST["user"]);

		$b= (busqueda::buscar($filtro,$conexion,$tabla,$campo,$quedevuelve));
		if (($password)==($b) and ($_POST["user"]!="") and (($password)!=(""))){

			header("Location: principal.php");
			die();
			//LLAMA LA OTRA PAGINA
	
		}else {
	
			echo "<script color=red >alert( '".addslashes('La contraseña o el usuario son incorrectos')."' );</script>";
			//ALERTA DE ERROR
	
	
		}

	}

?>
<html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <h1 align="center">BIENVENIDO <BR> EOP SISTEMA NOTARIAL</h1>
	<center><img   src="eop.jpg" ></img></center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   
	<form name="form1" method="POST" action="index.php" enctype="multipart/form-data">

        <div class="mb-3" align="center">
          <label for="User1"  class="form-label">USUARIO</label>

          <input type="text" name="user"  size=30 >

          <div id="userhelp" class="form-text">Si no tienes ususario comunicate con el administrador.</div>
        </div>
        
        <div class="mb-3" align="center">
          <label for="Password" class="form-label"> CLAVE </label>
          
          <input type="password" name="clave" size=25>
        </div>
       <div align="center">
        <input type="submit" name="buscar" value="INGRESAR" class="btn btn-success">
       </div>
      </form>
  
  
  </body>
</html>


