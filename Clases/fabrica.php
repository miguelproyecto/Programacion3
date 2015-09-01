<?php
/**
* 
*/
 require_once"Clases/empleado.php";
class fabrica 
{
	private $_razonSocial;
	private $_arrayEmpleado=array();

	public function __construct($razon)
	{
		//parent::__construct($nombre,$apellido,$dni,$valor1,$valor2);
		$this->_razonSocial=$razon;
	}
	function contactos()
	{

	}
	function agregarPersona($per)
	{
		
		array_push($_arrayEmpleado, $per);
	}
	function calcularsalario()
	{
		return $this->getsueldo()*25;
	}
	function sacarPersona($per)
	{

	}
	function ToString()
	{
		//return $this->_razonSocial;
		for ($i=0; $i <count($_arrayEmpleado) ; $i++) { 
			echo "indice".$i."-".$_arrayEmpleado[$i]."<br>";
		}
	}
}



/*
(_) Razón Social
(_) Empleados (array)
* contactos (1 parámetro)
*Agregarpintura($per)  -----> array_push(_______ ,  _______);
* CalcularSalarios() : double 
* SacarPersona($per)
(_) * EvitarDuplicados() BUSCAR MÉTODOS DE ARRAY
*ToString() : string
*/
?>
