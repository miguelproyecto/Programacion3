<?php
/**
* 
*/
 require_once"Clases/empleado.php";
class fabrica extends empleado
{
	private $_razonSocial;
	private $_arrayEmpleado;

	public function __construct($nombre,$apellido,$dni,$valor1,$valor2,$razon)
	{
		parent::__construct($nombre,$apellido,$dni,$valor1,$valor2);
		$this->_razonSocial=$razon;
	}
	function contactos()
	{

	}
	function agregarPersona($per)
	{

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
		return parent::ToString()."-".$this->_razonSocial;
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
