<?php
require_once 'controller/controller.php';

$controller = new Controller();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->addShoeName();
}

$styles = $controller->getStyles();

$controller->closeConnection();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shoe Database</title>
</head>
<body>
    <h2>Styles:</h2>
    <?php
    foreach ($styles as $style) {
        echo "ID: " . $style["id"] . ", Category ID: " . $style["cat_id"] . ", Style Name: " . $style["style_name"] . "<br>";
    }
    ?>

    <form action="index.php" method="POST">
        <label for="shoeName">Enter Shoe Name:</label>
        <input type="text" id="shoeName" name="shoeName">
        <input type="submit" value="Add shoe to database">
    </form>
</body>
</html>




