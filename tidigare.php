<?php

include('db.php'); 
include('datum.php');

$selectquery = "SELECT * FROM fem ORDER BY datum DESC";

$result = mysqli_query($conn, $selectquery) or die( mysqli_error($conn));

while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {

  $lista .= "<li><a href='dag.php?id=" . $row['id'] . "'>" . $row['datum'] . "</a></li>";

}

?>

<!doctype html>

<html lang="sv">

<head>

  <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>

  <title>Cinque minute sei</title>

  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <link rel="stylesheet" href="style.css">

</head>

<body id="tidigare">

  <div class="sida">

    <header>

      <nav class="meny">
        <ul>
          <li><a href="/fem/" class="dag" id="veckodag"><?php echo $datum; ?></a></li>
          <li><a href="/fem/" class="titel">5 minuter</a></li>
          <li><a href="/fem/tidigare.php" class="tidigare-meny">Tidigare</a></li>
        </ul>
      </nav>
    
    </header>

    <main>

      <ul id="lista">

        <?php echo $lista; ?>

      </ul>

    </main>

  </div>  

  </body>

  </html>
