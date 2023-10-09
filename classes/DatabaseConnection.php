<?php
class DatabaseConnection
{
	private $db_username = 'sensy';
	private $db_password = '';
	private $database = "oop_practice";
	protected $conn;

	protected function connect_db()
	{
		$this->conn = new PDO('mysql:host=127.0.0.1;dbname=' . $this->database, $this->db_username, $this->db_password);

		if (!$this->conn) {
			return "Fatal Error: Connection Failed!";
		} else {
			return $this->conn;
		}
	}
}
