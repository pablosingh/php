<?php

////////////////////////////////DB Simple

		class DBSimple
		{
			private $user 		= 'root';
			private $passwd		= '';
			protected $dbname	= 'romeo';
			protected $host		= 'localhost';

			protected $connect;
			protected $in;

			public $Id=911;
			public $Apellido="yyy";
			public $Nombre="zzz";
			public $Tel=101;

			private $row;
		

			public function __construct ()
			{
				$this->connect = new PDO ( "mysql:host = $this->host ; dbname=$this->dbname" ,$this->user, $this->passwd);
			}

			public function consultar ($query)
			{
				$this->row = $this->connect->query($query);
			}

			public function getResult ()
			{
				return $this->row->fetch();
			}

			public function agregar()
			{
				$in = $this->connect->prepare (" INSERT INTO usuarios (Id,Apellido,Nombre,Tel) VALUES (null, :a, :n, :c )");
				//$in->bindParam(':i', $this->Id);
				$in->bindParam(':a', $this->Apellido);
				$in->bindParam(':n', $this->Nombre);
				$in->bindParam(':c', $this->Tel);

				$in->execute();
			}
		}
/*

{
	"autoload": {
		"psr-4":{  // estandart
			
		}
	}
}

//*/

?>