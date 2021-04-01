<?php

include('db.php'); 
include('datum.php');

$id = $_GET['id'];

$selectquery = "SELECT * FROM fem WHERE id = $id";

$result = mysqli_query($conn, $selectquery) or die( mysqli_error($conn));

while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {

$t1 = $row['tacksam1'];
$t2 = $row['tacksam2'];
$t3 = $row['tacksam3'];
$f1 = $row['fantastisk1'];
$f2 = $row['fantastisk2'];
$f3 = $row['fantastisk3'];
$a1 = $row['affirmation'];
$tr1 = $row['trefantastiska1'];
$tr2 = $row['trefantastiska2'];
$tr3 = $row['trefantastiska3'];
$b1 = $row['battre1'];
$b2 = $row['battre2'];
$b3 = $row['battre3'];

    $tacksam1 = "<li>" . $t1 . "</li>";
    $tacksam2 = "<li>" . $t2 . "</li>";
    $tacksam3 = "<li>" . $t3 . "</li>";
    $fantastisk1 = "<li>" . $f1 . "</li>";
    $fantastisk2 = "<li>" . $f2 . "</li>";
    $fantastisk3 = "<li>" . $f3 . "</li>";
    $affirmation = "<li>" . $a1 . "</li>";
    $trefantastiska1 = "<li>" . $tr1 . "</li>";
    $trefantastiska2 = "<li>" . $tr2 . "</li>";
    $trefantastiska3 = "<li>" . $tr3 . "</li>";
    $battre1 = "<li>" . $b1 . "</li>";
    $battre2 = "<li>" . $b2 . "</li>";
    $battre3 = "<li>" . $b3 . "</li>";

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

<body id="dag">

  <div class="sida">

    <header>

      <nav class="meny">
        <ul>
          <li><a href="/fem/" class="dag" id="veckodag"><?php echo $datum; ?></a></li>
          <li><a href="/fem/" class="titel">5 minuter</a></li>
          <li><a href="/fem/tidigare.php">Tidigare</a></li>
        </ul>
      </nav>
    
    </header>

    <main>

       <section class="tacksam">
          <h2>Jag är tacksam för...</h2>
          <ul>
            <?php 
            echo $tacksam1; 
            echo $tacksam2; 
            echo $tacksam3; 
            ?>
          </ul>
        </section>

        <section class="fantastisk">
          <h2>Vad skulle göra denna dag fantastisk</h2>
          <ul>
            <?php 
            echo $fantastisk1; 
            echo $fantastisk2; 
            echo $fantastisk3; 
            ?>
          </ul>
        </section>

        <section class="affirmation">
          <h2>Jag är...</h2>
          <ul>
            <?php 
            echo $affirmation; 
            ?>
          </ul>
        </section>

        <section class="tre-fantastiska">
          <h2>Tre fantastiska saker som hände idag</h2>
          <ul>
            <?php 
            echo $trefantastiska1; 
            echo $trefantastiska2; 
            echo $trefantastiska3; 
            ?>
          </ul>
        </section>

        <section class="battre">
          <h2>Hur kunde jag ha gjort idag bättre</h2>
          <ul>
            <?php 
            echo $battre1; 
            echo $battre2; 
            echo $battre3; 
            ?>
          </ul>
        </section>

    </main>

  </div>  

  </body>

  </html>
