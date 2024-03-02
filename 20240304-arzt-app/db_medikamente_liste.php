<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Medikamente Liste</title>
</head>

<body>
  <div class="container">
    <main>



      <?php include'menu.php'; ?>

      <h1>Dr. Shyam - Medikamente Liste</h1>

      <table>
        <tr>
          <th>Name</th>
          <th>Preis</th>
          <th>Zustand</th>
          <th>Hinweis</th>
        </tr>
        <?php
      // Verbindung zur Datenbank herstellen
      include 'db_connect.php';
      
      if ($conn) {
        $sql = "SELECT * FROM wda_arzt_medi";
        $result = mysqli_query($conn, $sql);
  
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            extract($row);
  
            echo '<tr>';
            echo '<td>' . $wda_arzt_medi_name .'</td>';
            echo '<td>' . $wda_arzt_medi_preis .'</td>';
            echo '<td>' . $wda_arzt_medi_zustand .'</td>';
            echo '<td>' . $wda_arzt_medi_des .'</td>';
            echo '</tr>';
          }
        }
      }
      ?>
      </table>
    </main>
  </div>

</body>

</html>