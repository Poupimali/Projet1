<?php include './includes/_header.php'?>

<?php
//definition de l'erreur c'est un tableau
$errors = [];


if ($_POST)
{
    //validation et affichage des erreurs 1-en cas de vide 2-email format correct 3-formatage des caractères
    if(empty($_POST['name']))
        {
        $errors['name1'] = "Veuillez renseigner votre nom.";
        }
    if(empty($_POST['tel']))
        {
        $errors['tel1'] = "Veuillez renseigner votre numéro de téléphone.";
        }
    // format correct tel
    else {
        if (!preg_match ( " #^[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}?$# " , $_POST['tel']))
            {
            $errors['tel2'] = "Veuillez renseigner un numéro de téléphone correct.";
            }
         }

    if(empty($_POST['email']))
        {
        $errors['email1'] = "Veuillez renseigner votre email";
        }
    // format correct email si email pas vide alors on verifie le format
    else {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            {
            $errors['email2'] = "Veuillez renseigner un email correct.";
            }
        }

    if(empty($_POST['subject']))
        {
        $errors['subject1'] = "Veuillez renseigner un sujet";
        }

    if(empty($_POST['message']))
        {
        $errors['message1'] = "Veuillez renseigner un message de plus de 50 caractères.";
        }

}

?>


    <section class="formulaire main-page">

      <h1>Contact</h1>
      <p class="contact-paragraphe">
        Vous souhaitez contacter l’équipe pédagogique ou un membre de l’équipe ?
        <br />Vous avez un projet ?
        <br />Ce formulaire est là pour vous !
      </p>
      <form class="form-contact" method="post" action="contact.php">
          <div>
              <label for="nom">Votre nom</label>
              <input type="text" name="name" id="nom" placeholder="Jean-Michel Premierdegré" value="<?php if(isset($_POST['name'])) echo $_POST['name'] ?>">
              <?php if(isset($errors['name1'])) echo '<p class="contact-error">' . $errors['name1'] . '</p>' ?>
          </div>
          <div>
              <label for="tel">Votre numéro de téléphone</label>
              <input type="text" name="tel" id="tel" value="<?php if(isset($_POST['tel'])) echo $_POST['tel'] ?>">
              <?php if(isset($errors['tel1'])) echo '<p class="contact-error">' . $errors['tel1'] . '</p>'  ?>
              <?php if(isset($errors['tel2'])) echo '<p class="contact-error">' . $errors['tel2'] . '</p>' ?>
          </div>

          <div>
              <label for="email">Votre email</label>
              <input type="text" name="email" id="email" placeholder="@" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>">
              <?php if(isset($errors['email1'])) echo '<p class="contact-error">' . $errors['email1'] . '</p>' ?>
              <?php if(isset($errors['email2'])) echo '<p class="contact-error">' . $errors['email2'] . '</p>' ?>
          </div>
          <div>
              <label for="sujet">Votre sujet</label>
              <input type="text" name="subject" id="subject" value="<?php if(isset($_POST['subject'])) echo $_POST['suject'] ?>">
              <?php if(isset($errors['subject1'])) echo '<p class="contact-error">' . $errors['subject1'] . '</p>'?>
          </div>
          <div>
              <label for="message">Votre message</label>
              <textarea name="message" id="message" placeHolder="Votre Message..." minlength = "50"><?php if(isset($_POST['message'])) echo $_POST['message'] ?></textarea>
              <?php if(isset($errors['message1'])) echo '<p class="contact-error">' . $errors['message1'] . '</p>' ?>
          </div>
          <button type="submit">Envoyer</button>

          <?php

          if ($_POST) {
              // verification
                if (count($errors) == 0)
                {
                    //message qui s'affiche si le formulaire est OK
                    echo '<p class="messageOK">Votre message a bien été envoyé.</p>';
                }
          }
          ?>


      </form>

    </section>

<?php include './includes/_footer.html'?>
