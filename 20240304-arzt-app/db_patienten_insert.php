<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Neue Patienten</title>
</head>

<body>
  <div class="container">
  <header>
      <img class="header-img" src="imgs/header-img.svg" alt="working">
    </header>
    <main>
      <?php
include 'menu.php';
if (isset($_POST['submit'])) {
  extract($_POST);
  include 'db_connect.php';
  
  if ($conn) {
      $sql = "INSERT INTO wda_arzt_adr
      (wda_arzt_vorname, 
      wda_arzt_nachname, 
      wda_arzt_strasse, 
      wda_arzt_ort, 
      wda_arzt_tel,
      wda_arzt_email) 
       VALUES ('$wda_arzt_vorname','$wda_arzt_nachname','$wda_arzt_strasse','$wda_arzt_ort','$wda_arzt_tel','$wda_arzt_email')";
       $result = mysqli_query($conn, $sql);

      
       if ($result) {
         echo "<h1>Erfolgreich gespeichert!</h1>";
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