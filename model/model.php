<?php
class Model {
    private $conn;

    public function __construct() {
        $this->database();
    }

    private function database() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "myshoelist";

        // Create Connection
        $this->conn = new mysqli($servername, $username, $password, $database);

        // Validate Connection
        if ($this->conn->connect_error) {
            die("Connection Invalid: " . $this->conn->connect_error);
        }
    }

    public function getStylesByCategoryId($categoryId) {
        $sql = "SELECT DISTINCT id, cat_id, style_name FROM styles WHERE cat_id = $categoryId";
        $result = $this->conn->query($sql);

        $styles = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $styles[] = $row;
            }
        }

        return $styles;
    }

    public function insertStyle($styleName) {
        $sql = "INSERT INTO styles (cat_id, style_name) VALUES (2, '$styleName')";
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function closeConnection() {
        $this->conn->close();
    }
}
?>


