<?php
  class Database {
    // DB params
    private $host = 'localhost';
    private $db_name = 'myblog';
    private $username = 'root';
    private $password = '';
    private $conn;


    // DB Connect 
    public function connect() {
      $this->conn = null;

      try {
        // access the sql query
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);

        // access the database
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection Error: '.$e->getMessage();
      }

      return $this->conn;
    }
  }
?>