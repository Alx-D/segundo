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

  <section>
    <h1>Soy un contenido</h1>
  </section>

  <br>
  <!-- www.asdf.com/segundo/   subcarpeta... -->
  <a href="subcarpeta/paginacarpeta.php">Página en subcarpeta sin diagonal en href</a>

  <br>
  <!-- www.asdf.com   /subcarpeta... PREFERIR ESTE OPCION-->
  <a href="/segundo/subcarpeta/paginacarpeta.php">Página en subcarpeta CON diagonal en href</a>

  <?php include ('includes/footer.php') ?>

  <?php  echo $_SERVER["DOCUMENT_ROOT"] ?>

</body>
</html>