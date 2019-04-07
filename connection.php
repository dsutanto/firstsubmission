<?php

Class Connection {

	private $server = "sqlsrv:server=tcp:azuredavid.database.windows.net,1433;Database=latihanazure";

	private $user = "ignzdave";

	private $pass = "464884b75A";

	private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

	protected $con;

	public function openConnection() {

		try

		{

			$this->con = new PDO($this->server, $this->user, $this->pass, $this->options);
			return $this->con;

		} catch (PDOException $e) {

			echo "There is some problem in connection: " . $e->getMessage();

		}

	}

	public function closeConnection() {

		$this->con = null;

	}

}

?>