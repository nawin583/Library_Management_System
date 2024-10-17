<?php
class db {
    protected $connection;

    function setconnection() {
        $host = 'localhost:3307';
        $dbname = 'library_managment';
        $username = 'root';
        $password = 'Sri@1234'; // Replace with the actual password

        try {
            $this->connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die(); // Stop further execution if the connection fails
        }
    }
}
?>
