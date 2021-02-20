<?php
		//DB Simple

		class DBSimple
		{
			private $user 		= 'root';
			private $passwd		= '';
			protected $dbname	= 'romeo';
			protected $host		= 'localhost';
			protected $connect;
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
		}
?>