<?php
require_once 'model/model.php';

class Controller {
    private $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function addShoeName() {
        $shoeName = $_POST['shoeName'];
        if (!empty($shoeName)) {
            $result = $this->model->insertStyle($shoeName);
            if ($result === true) {
                echo "Successfully added a new style: $shoeName";
            } else {
                echo "Error: $result";
            }
        } else {
            echo "Shoe name cannot be empty.";
        }
    }

    public function getStyles() {
        $styles = $this->model->getStylesByCategoryId(2);
        return $styles;
    }
    

    public function closeConnection() {
        $this->model->closeConnection();
    }

    private function displayStyles($styles) {
        foreach ($styles as $style) {
            echo "ID: " . $style["id"] . ", Category ID: " . $style["cat_id"] . ", Style Name: " . $style["style_name"] . "<br>";
        }
    }
}
?>








