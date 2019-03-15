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
            if ($promo === 'PHP'){
              ?>
                  <div class="espace">
                  <a href="detail-Geoffrey.php"><div class="trombi">
                    <img src="https://i.postimg.cc/90Q30dWK/Malika.jpg" alt="Malika">
                    <div class="textebloc">
                      <p class="prenom-nom"><?php echo $nameall ?></p>
                      <img style="width: 50px" src="https://i.postimg.cc/VLg3P8vL/phoenix.jpg" alt="Logo"/>
                    </div>
                  </div></a>
                </div>
        <?php
            }

         } ?>

        <!-- <div class="espace">
      	<a href="detail-Malika.php"><div class="trombi">
      		<img src="https://i.postimg.cc/90Q30dWK/Malika.jpg" alt="Malika">
      		<div class="textebloc">
      			<p class="prenom-nom">Malika Céladon</p>
      			<img style="width: 50px" src="https://i.postimg.cc/VLg3P8vL/phoenix.jpg" alt="Logo"/>
      		</div>
      	</div></a>
      </div>

      <div class="espace">
      	<a href="detail-Emmanuel.php"><div class="trombi">
      		<img src="https://i.postimg.cc/L5xp3yCm/Emmanuel.jpg" alt="Malika">
      		<div class="textebloc">
      			<p class="prenom-nom">Emmanuel Plumas</p>
      			<img style="width: 50px" src="https://i.postimg.cc/VLg3P8vL/phoenix.jpg" alt="Logo"/>
      		</div>
      	</div></a>
      </div> -->
    </div>

    <h2>JAVASCRIPT</h2>

      <div class="bloc-image Javascript">

      <?php
        // récupere les nom/prenom et email de chacun dans un tableau d'ensemble qui ont pour condition d'être en PHP
        foreach ($csv as $key => $studentsInfos){
            $nameall = ($studentsInfos[0]); // nom prénom
            $email = ($studentsInfos[2]); // email
            $promo = ($studentsInfos[3]); // promo
            if ($promo === 'JS'){
              ?>
                  <div class="espace">
                  <a href="detail-Geoffrey.php"><div class="trombi">
                    <img src="https://i.postimg.cc/90Q30dWK/Malika.jpg" alt="Malika">
                    <div class="textebloc">
                      <p class="prenom-nom"><?php echo $nameall ?></p>
                      <img style="width: 50px" src="https://i.postimg.cc/VLg3P8vL/phoenix.jpg" alt="Logo"/>
                    </div>
                  </div></a>
                </div>
        <?php
            }
         } ?>

          <!-- <div class="espace">
        	<a href="detail-Bertrand.php"><div class="trombi">
        		<img src="https://i.postimg.cc/8cBh7XCh/bertrand.jpg">
        		<div class="textebloc">
        			<p class="prenom-nom">Bertrand Seguinotte</p>
        			<img style="width: 50px" src="https://i.postimg.cc/VLg3P8vL/phoenix.jpg" alt="Logo"/>
        		</div>
        	</div></a>
          </div> -->

    </div>

        <div class="bloc-bouton"><a href="contact.html"><input class="button bouton-trombi" type="button"value="Contactez-nous"></a></div>

  </section>

<?php include './includes/_footer.html'?>
