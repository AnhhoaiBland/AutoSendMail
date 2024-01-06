<?php
class Database
{
    public $conn;
    private $result;

    protected $severname = "localhost";
    protected $username = "root";
    protected $password = "mysql";
    protected $dbname = "autosend";

    function __construct()
    {
        try {
            $this->conn = mysqli_connect($this->severname, $this->username, $this->password, $this->dbname);
            mysqli_select_db($this->conn, $this->dbname);
            mysqli_query($this->conn, "SET NAMES 'utf8'");
        } catch (Exception $e) {
            die('Connection failed: ' . $e->getMessage());
        }
    }

    public function execute($sql)
    {
        try {
            $this->result = $this->conn->query($sql);
            return $this->result;
        } catch (Exception $e) {
            die('Query failed: ' . $e->getMessage());
        }
    }
}
