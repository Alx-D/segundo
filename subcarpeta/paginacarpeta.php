<?php //include_once ($_SERVER['DOCUMENT_ROOT'].'/segundo/dirs.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php include '../includes/header.php'; ?>
  <!-- /* LOS INCLUDES EN SUBCARPETAS VAN COMO RUTAS RELATIVAS*/ -->

  <?//php include ('../includes/header.php') ?>

  <?//php include getenv("DOCUMENT_ROOT")."\segundo\includes/header.php"; ?>

  <?//php include(__DIR__ . '/../includes/header.php'); ?>

  <?//php include (INCLUDES."/header.php"); ?>

  <h1>Soy una pagina en una subcarpeta y tengo el mismo header y footer de la pagina de inicio</h1>

  <?php include '../includes/footer.php' ?>

</body>
</html>