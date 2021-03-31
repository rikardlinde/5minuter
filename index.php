<?php

include('db.php'); 
include('datum.php');

if (isset($_POST['tacksam1'])):

  $id = $_POST['id'];
  $tacksam1 = $_POST['tacksam1'];
  $tacksam2 = $_POST['tacksam2'];
  $tacksam3 = $_POST['tacksam3'];
  $affirmation = $_POST['affirmation'];
  $fantastisk1 = $_POST['fantastisk1'];
  $fantastisk2 = $_POST['fantastisk2'];
  $fantastisk3 = $_POST['fantastisk3'];
  $trefantastiska1 = $_POST['trefantastiska1'];
  $trefantastiska2 = $_POST['trefantastiska2'];
  $trefantastiska3 = $_POST['trefantastiska3'];
  $battre1 = $_POST['battre1'];
  $battre2 = $_POST['battre2'];
  $battre3 = $_POST['battre3'];

  $sql = "UPDATE fem SET 
  tacksam1= '$tacksam1', 
  tacksam2= '$tacksam2', 
  tacksam3= '$tacksam3', 
  fantastisk1= '$fantastisk1', 
  fantastisk2= '$fantastisk2', 
  fantastisk3= '$fantastisk3', 
  affirmation= '$affirmation', 
  trefantastiska1= '$trefantastiska1', 
  trefantastiska2= '$trefantastiska2', 
  trefantastiska3= '$trefantastiska3', 
  battre1= '$battre1', 
  battre2= '$battre2', 
  battre3= '$battre3' 
  WHERE id='$id'";

  if (mysqli_query($conn, $sql)) {

    echo $date;

  } else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);

    $tacksam1 = "<li><input type='text' name='tacksam1' value='" . $tacksam1 . "'></li>";
    $tacksam2 = "<li><input type='text' name='tacksam2' value='" . $tacksam2 . "'></li>";
    $tacksam3 = "<li><input type='text' name='tacksam3' value='" . $tacksam3 . "'></li>";
    $fantastisk1 = "<li><input type='text' name='fantastisk1' value='" . $fantastisk1 . "'></li>";
    $fantastisk2 = "<li><input type='text' name='fantastisk2' value='" . $fantastisk2 . "'></li>";
    $fantastisk3 = "<li><input type='text' name='fantastisk3' value='" . $fantastisk3 . "'></li>";
    $affirmation = "<li><input type='text' name='affirmation' value='" . $affirmation . "'></li>";
    $trefantastiska1 = "<li><input type='text' name='trefantastiska1' value='" . $trefantastiska1 . "'></li>";
    $trefantastiska2 = "<li><input type='text' name='trefantastiska2' value='" . $trefantastiska2 . "'></li>";
    $trefantastiska3 = "<li><input type='text' name='trefantastiska3' value='" . $trefantastiska3 . "'></li>";
    $battre1 = "<li><input type='text' name='battre1' value='" . $battre1 . "'></li>";
    $battre2 = "<li><input type='text' name='battre2' value='" . $battre2 . "'></li>";
    $battre3 = "<li><input type='text' name='battre3' value='" . $battre3 . "'></li>";
  ?>


<!doctype html>

<html lang="sv">

<head>

  <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>

  <title>Cinque minute sei</title>

  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <link rel="stylesheet" href="style.css">

</head>

<body>

  <div class="sida">

    <header>

      <nav class="meny">
        <ul>
          <li><a href="/fem/" class="dag" id="veckodag"><?php echo $datum; ?></a></li>
          <li><a href="/fem/" class="titel">5 minuter</a></li>
          <li><a href="/tidigare/">Tidigare</a></li>
        </ul>
      </nav>
    
    </header>

    <main>

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="dagens-fem-minuter">

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

        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <input type="submit" class="spara" value="Spara">

</form>

    </main>

  </div>  

  </body>

  </html>
 

<?php
else:


    $selectquery = "SELECT * FROM fem ORDER BY datum DESC LIMIT 1";

    $result = mysqli_query($conn, $selectquery) or die( mysqli_error($conn));

    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {

    $id = $row['id'];
    $tacksam1 = "<li><input type='text' name='tacksam1' value='" . $row['tacksam1'] . "'></li>";
    $tacksam2 = "<li><input type='text' name='tacksam2' value='" . $row['tacksam2'] . "'></li>";
    $tacksam3 = "<li><input type='text' name='tacksam3' value='" . $row['tacksam3'] . "'></li>";
    $fantastisk1 = "<li><input type='text' name='fantastisk1' value='" . $row['fantastisk1'] . "'></li>";
    $fantastisk2 = "<li><input type='text' name='fantastisk2' value='" . $row['fantastisk2'] . "'></li>";
    $fantastisk3 = "<li><input type='text' name='fantastisk3' value='" . $row['fantastisk3'] . "'></li>";
    $affirmation = "<li><input type='text' name='affirmation' value='" . $row['affirmation'] . "'></li>";
    $trefantastiska1 = "<li><input type='text' name='trefantastiska1' value='" . $row['trefantastiska1'] . "'></li>";
    $trefantastiska2 = "<li><input type='text' name='trefantastiska2' value='" . $row['trefantastiska2'] . "'></li>";
    $trefantastiska3 = "<li><input type='text' name='trefantastiska3' value='" . $row['trefantastiska3'] . "'></li>";
    $battre1 = "<li><input type='text' name='battre1' value='" . $row['battre1'] . "'></li>";
    $battre2 = "<li><input type='text' name='battre2' value='" . $row['battre2'] . "'></li>";
    $battre3 = "<li><input type='text' name='battre3' value='" . $row['battre3'] . "'></li>";

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

<body>

  <div class="sida">

    <header>

      <nav class="meny">
        <ul>
          <li><a href="/fem/" class="dag" id="veckodag"><?php echo $datum; ?></a></li>
          <li><a href="/fem/" class="titel">5 minuter</a></li>
          <li><a href="/tidigare/">Tidigare</a></li>
        </ul>
      </nav>
    
    </header>

    <main>

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="dagens-fem-minuter">

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

        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <input type="submit" class="spara" value="Spara">

</form>

<?php endif; ?>

    </main>

  </div>  

  </body>

  </html>
