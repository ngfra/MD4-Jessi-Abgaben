<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Neue Medikamente</title>
</head>
<body>
<div class="container">
<header>
      <img class="header-img" src="imgs/header-img.svg" alt="working">
    </header>
  <main>
    <?php
include 'menu.php';

if  (isset($_POST['submit'])) {
  extract($_POST);

  include 'db_connect.php';

  if ($conn) {
    $sql = "INSERT INTO wda_arzt_medi
      (wda_arzt_medi_name, 
      wda_arzt_medi_preis, 
      wda_arzt_medi_zustand, 
      wda_arzt_medi_des) VALUES 
      ('$wda_arzt_medi_name', '$wda_arzt_medi_preis', '$wda_arzt_medi_zustand','$wda_arzt_medi_des')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      echo "<h1>Erfolgreich gespeichert</h1>";
    } else {
      echo "<h1>Fehler beim Speichern</h1>";
    }
  }
}
?>
  </main>
</div>


</body>
</html>