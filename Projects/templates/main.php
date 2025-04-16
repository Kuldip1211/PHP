<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
   <!-- Bootstrap CSS CDN -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
 <!-- link css -->
  <?php require_once("./css/mainstyle.php") ?>
  <style>
  body {
    cursor: url('assets/cursor.png'), auto;
  }
</style>
</head>
<body>
 <?php require_once("./components/navbar.php") ?>

 <?php require_once("./templates/home.tpl.php") ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>