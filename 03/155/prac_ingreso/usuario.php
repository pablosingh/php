
<?php
		class usuario
		{
			private $Id;
			private $Apellido;
			private $Nombre;
			private $Cel;

			/*
			public function __construct ($i, $a, $n, $c)
			{
				$this->Id= $i;
				$this->Apellido= $a;
				$this->Nombre= $n;
				$this->Cel= $c;
			}
			//*/
			
			/////////////////////////////////////////
			
			public function getId()
			{
				return $this->Id;
			}

			public function getApellido()
			{
				return $this->Apellido;
			}

			public function getNombre()
			{
				return $this->Nombre;
			}

			public function getCel()
			{
				return $this->Cel;
			}
			
			/////////////////////////////////////////

			public function setId($i)
			{
				$this->Id= $i;
			}

			public function setApellido($a)
			{
				$this->Apellido= $a;
			}

			public function setNombre($n)
			{
				$this->Nombre= $n;
			}

			public function setCel($c)
			{
				$this->Cel= $c;
			}

			/////////////////////////////////////////
			
			

		}

?>