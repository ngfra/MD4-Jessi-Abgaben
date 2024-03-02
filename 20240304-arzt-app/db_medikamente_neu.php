<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Neue Medikamente</title>
</head>

<body>
  <div class="container">
    <main>
      <?php include'menu.php' ?>

      <h1>Neue Medikamente erfassen</h1>

      <form action="db_medikamente_insert.php" method="post">
        <label for="wda_arzt_medi_name">Name</label>
        <input id="wda_arzt_medi_name" name="wda_arzt_medi_name" type="text" required="">
        <br>
       
        <label for="wda_arzt_medi_preis">Preis</label>
        <input id="wda_arzt_medi_preis" name="wda_arzt_medi_preis" type="text" required="">
        <br>

        <label for="wda_arzt_medi_zustand">Zustand im Lager</label>
        <input id="wda_arzt_medi_zustand" name="wda_arzt_medi_zustand" type="text" required="">
        <br>

        <label for="wda_arzt_medi_des">Beschreibung</label>
        <input id="wda_arzt_medi_des" name="wda_arzt_medi_des" type="text" required="">
        <br>
        
        <button id="submit" name="submit" type="submit">Neue Medikamente erfassen</button>
      </form>
    </main>
  </div>
</body>

</html>