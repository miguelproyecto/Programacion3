<html>
	<head>
	</head>
	<body>
		<?php

			require_once"Clases/empleado.php";
			require_once"Clases/fabrica.php";

			$empleado1=new empleado("pepe","jaun",12,1000,5000);
			//$mostrar=$empleado1->ToString();
			//echo $mostrar;
			$fabrica=new fabrica("pepe","jaun",12,15,5000,"acme");
			$mostrar=$fabrica->ToString();
			echo $mostrar;
			$empleado1->setsueldo(12);
			echo $fabrica->calcularsalario();
			
			//echo $empleado1->hablar("portugues");

		?>
	</body>
</html>