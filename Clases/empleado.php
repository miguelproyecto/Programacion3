<?php
	/**
	* 
	*/
	 require_once"Clases/persona.php";

	class empleado extends persona
	{
		private $_legajo;
		private $_sueldo;
		

		public function __construct($nombre,$apellido,$dni,$valor1,$valor2)
		{
			parent::__construct($nombre,$apellido,$dni);
			$this->_legajo=$valor1;
			$this->_sueldo=$valor2;
			
		}

		public function getlegajo()
		{
			return $this->_legajo;
		}
		public function setlegajo($valor)
		{
			 $this->_legajo=$valor;
		}
		public function getsueldo()
		{
			return $this->_sueldo;
		}
		public function setsueldo($valor)
		{
			 $this->_sueldo=$valor;
		}
		
		public function ToString()
		{
			return parent:: ToString()."-".$this->_legajo."-".$this->_sueldo;
		}
		
	}
?>