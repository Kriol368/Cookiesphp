<?php
$language = "";
setcookie("language", $_GET['setLanguage']);
$language = ($_COOKIE["language"]);
if ($language == "en"){
    $content = "This page is in English";
    $title = "Change the language of the page";
}else{
    $content = "Esta página está en Castellano (Idioma por defecto)";
    $title = "Cambiar el idioma de la página";
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta name="author" content="Andreu Beltran">
    <link rel="stylesheet" href="claroscuro.css">
</head>
<body class="dark">
<ul><?= $title ?>
    <li><a href='idioma.php?setLanguage=es'>Español</a></li>
    <li><a href='idioma.php?setLanguage=en'>Inglés</a></li>
</ul>
<?= $content ?>
</body>
</html>
