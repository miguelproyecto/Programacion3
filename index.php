<html>
<head>
	<title>TP - parte 2</title>
		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--final de Estilos-->
		   <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
  <div class="container">
		<div class="page-header">
			<h1>Empleados</h1>      
		</div>
		<div class="CajaInicio animated bounceInRight">
			<h1>Ingreso de Empleados</h1>
		
			<!--CODIFICAR LOS ATRIBUTOS DEL FORMULARIO-->
			<form id="FormIngreso">
			
				<span class="class="list-group-item-heading">Apellido:</span><input type="text"/>
				
				
				Nombre:<input type="text" name="txtNombre" />
			<br/>
			Edad:<input type="text" name="txtEdad" />
			<br/>
			<input type="submit" value="Enviar por GET" />
				
				
				<input type="submit" class="MiBotonUTNMenu"  value="Enviar"/>
				<input type="reset" class="MiBotonUTNMenu" value="Limpiar"/>
			</form>
		</div>
	</div>
</body>
</html>