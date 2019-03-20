<?php include './includes/_header.php'?>

    <section class="main-page">
    <h1>Trombinoscope</h1>

    <h2>PHP</h2>

    <div class="bloc-image PHP">

        <?php
        //creation d'un raccourci
            const BR = '<br />';

        //extraire un tableau d'un CSV
            $file = file('./tableau/equipesProjets.csv');
            foreach($file as $i){
                $csv[] = explode( ';', $i);
            }

        //fonction pour rendre plus clair un tableau
            function prClear($csv) {
                echo '<pre>';
                var_dump($csv);
                echo '</pre>';
            }

        // récupere les nom/prenom et email de chacun dans un tableau d'ensemble qui ont pour condition d'être en PHP
        foreach ($csv as $key => $studentsInfos){
            $nameall = ($studentsInfos[0]); // nom prénom
            $email = ($studentsInfos[2]); // email
            $promo = ($studentsInfos[3]); // promo
            $nameSafe = trim($nameall);
            $namePhoto = str_replace(' ', '-', $nameSafe);
            if ($promo === 'PHP'){
              ?>
                  <div class="espace">
                  <a href="detail-Malika.php"><div class="trombi">
                    <img src="./photos/<?php echo $namePhoto . '.jpg' ?>" alt="Malika" width="250px">
                    <div class="textebloc">
                      <p class="prenom-nom"><?php echo $nameall ?></p>
                      <img style="width: 50px" src="https://i.postimg.cc/VLg3P8vL/phoenix.jpg" alt="Logo"/>
                    </div>
                  </div></a>
                </div>
        <?php
            }

         } ?>

    </div>

    <h2>JAVASCRIPT</h2>

      <div class="bloc-image Javascript">

      <?php
        // récupere les nom/prenom et email de chacun dans un tableau d'ensemble qui ont pour condition d'être en PHP
        foreach ($csv as $key => $studentsInfos){
            $nameall = ($studentsInfos[0]); // nom prénom
            $email = ($studentsInfos[2]); // email
            $promo = ($studentsInfos[3]); // promo
            $nameSafe = trim($nameall);
            $namePhoto = str_replace(' ', '-', $nameSafe);
            if ($promo === 'JS'){
              ?>
                  <div class="espace">
                  <a href="detail-Geoffrey.php"><div class="trombi">
                    <img src="./photos/<?php echo $namePhoto . '.jpg' ?>" alt="Malika" width="250px">
                    <div class="textebloc">
                      <p class="prenom-nom"><?php echo $nameall ?></p>
                      <img style="width: 50px" src="https://i.postimg.cc/VLg3P8vL/phoenix.jpg" alt="Logo"/>
                    </div>
                  </div></a>
                </div>
        <?php
            }
         } ?>


    </div>

        <div class="bloc-bouton"><a href="contact.php"><input class="button bouton-trombi" type="button"value="Contactez-nous"></a></div>

  </section>

<?php include './includes/_footer.html'?>
