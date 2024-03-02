<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Patienten neu</title>
</head>

<body>
  <div class="container">
    <main>
      <?php include'menu.php' ?>

      <h1>Neue Patienten erfassen</h1>

      <form action="db_patienten_insert.php" method="post">
        <label for="wda_arzt_vorname">Vorname</label>
        <input id="wda_arzt_vorname" name="wda_arzt_vorname" type="text" required="">
        <br>
        <label for="wda_arzt_nachname">Nachname</label>
        <input id="wda_arzt_nachname" name="wda_arzt_nachname" type="text" required="">
        <br>
        <label for="wda_arzt_strasse">Straße</label>
        <input id="wda_arzt_strasse" name="wda_arzt_strasse" type="text" required="">
        <br>
        <label for="wda_arzt_ort">Ort</label>
        <input id="wda_arzt_ort" name="wda_arzt_ort" type="text" required="">
        <br>
        <label for="wda_arzt_tel">Telefonnummer</label>
        <input id="wda_arzt_tel" name="wda_arzt_tel" type="text" required="">
        <br>
        <label for="wda_arzt_email">Email</label>
        <input type="email" id="wda_arzt_email" name="wda_arzt_email">

        <button id="submit" name="submit" type="submit">Neue Patienten erfassen</button>
      </form>
    </main>
  </div>
</body>

</html>