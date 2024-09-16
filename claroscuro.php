<?php
$theme = "";
$class = "";
setcookie("theme", $_GET['setTheme']);
$theme = ($_COOKIE["theme"]);
if ($theme == "dark"){
    $class = "dark";
}else{
    $class = "light";
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Andreu Beltran">
    <link rel="stylesheet" href="claroscuro.css">
    <title>Titulo</title>
</head>
<body class=<?= $class ?>>
<ul>
    <li><a href='claroscuro.php?setTheme=light'>Claro</a></li>
    <li><a href='claroscuro.php?setTheme=dark'>Oscuro</a></li>
</ul>
</body>
</html>
