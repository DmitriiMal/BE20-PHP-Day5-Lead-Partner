<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "employees");

class DBConnection
{
  private $conn;
  public function __construct()
  {
    $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
  }

  public function query($query)
  {
    $statement = $this->conn->prepare($query);
    $statement->execute();
    $result = $statement->get_result();
    return $result;
  }
}
