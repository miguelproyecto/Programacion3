<?php
	/**
	* 
	*/
	 class persona 
	{
		private $_nombre;
		private $_apellido;
		private $_dni;

		public function __construct($valor1,$valor2,$valor3)
		{
			$this->_nombre=$valor1;
			$this->_apellido=$valor2;
			$this->_dni=$valor3;
		}

		public function getnombre()
		{
			return $this->_nombre;
		}
		public function setnombre($valor)
		{
			 $this->_nombre=$valor;
		}
		public function getapellido()
		{
			return $this->_apellido;
		}
		public function setapellido($valor)
		{
			 $this->_apellido=$valor;
		}
		public function getdni()
		{
			return $this->_dni;
		}
		public function setdni($valor)
		{
			 $this->_dni=$valor;
		}
		 function ToString()
		{
			return $this->_nombre."-".$this->_apellido."-".$this->_dni;
		}
		//crear metodo abstracto hablar recibe parametro $idiomas retorna string 
		//public abstract function hablar($idioma);


	}
?>