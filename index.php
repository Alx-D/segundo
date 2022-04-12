<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Segundo</title>
</head>

<body>

  <?php include ('includes/header.php') ?>

  <!-- <a href="servicios.html">Servicios</a> -->
  <!-- <a href="contacto.html">Contacto</a> -->

  <section>
    <h1>Soy un contenido</h1>
  </section>

  <br>
  <a href="subcarpeta/paginacarpeta.php">Página en subcarpeta sin diagonal en href</a>

  <br>
  <a href="/subcarpeta/paginacarpeta.php">Página en subcarpeta CON diagonal en href</a>

  <?php include ('includes/footer.php') ?>

  <?php
  echo $_SERVER["DOCUMENT_ROOT"]
?> 

</body>
</html>