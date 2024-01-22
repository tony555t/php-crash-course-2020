<?php
$name = "SomeName";
$value = 'This website uses cookies to ensure you get the best experience. <a href="#">Learn more</a>';
$expiration = time() + (60 * 60 * 24 * 7);
// Concatenate $name and $value with a separator
//$cookieName = $name . '_' . $value;

setcookie($name,$value, $expiration);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Document</title>
    <!-- Add the favicon link here -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
    if (isset($_COOKIE["SomeName"])) {
        $someOne = $_COOKIE["SomeName"];
        echo $someOne;
    } else {
        $someOne = "";
    }
    ?>
</body>
</html>
