<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TrombinoWild</title>
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Montserrat|Oswald" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="topbar">
        <a href="home.php"><img src="img/wcs_logo_pink_background_400x220.png" alt="logo_wcs"></a>
        <nav>
          <?php
          // pour faire marcher la classe active
            $classActive = [
              'home',
              'trombino',
              'contact'
            ];

          // bout de code à tester pour récupérer la page active
            $path = $_SERVER['PHP_SELF']; // $path = /home/httpd/html/index.php
            $file = basename ($path);

            // boucle pour la nav
            foreach ($classActive as $i => $namePage) { ?>
              <a href="<?php echo $namePage?>.php" class="<?php if ($file === $namePage . '.php'){ echo 'active'; }?>"><?php echo strtoupper($namePage); ?></a>

            <?php } ?>
        </nav>
    </header>
