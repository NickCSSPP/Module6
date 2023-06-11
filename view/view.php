<!DOCTYPE html>
<html>
<head>
    <title>Shoe Database</title>
</head>
<body>
    <h2>Styles:</h2>
    <?php
    if (!empty($styles)) {
        foreach ($styles as $style) {
            echo "ID: " . $style["id"] . ", Category ID: " . $style["cat_id"] . ", Style Name: " . $style["style_name"] . "<br>";
        }
    } else {
        echo "No styles found.";
    }
    ?>

    <form action="index.php" method="POST">
        <label for="shoeName">Add a shoe to the database:</label>
        <input type="text" id="shoeName" name="shoeName" required>
        <input type="submit" value="Add Shoe">
    </form>
</body>
</html>


