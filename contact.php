<?php include './includes/_header.php'?>

    <section class="formulaire main-page">

      <h1>Contact</h1>
      <p class="detail-paragraphe">
        Vous souhaitez contacter l’équipe ou un membre de l’équipe ?
        <br />Vous avez un projet ?
        <br />Ce formulaire est là pour vous !
      </p>
      <form class="form-contact" method="post" action="contact.php"> <!-- plus tard action="site" sera envoyé sur une page php hebergée sur un serveur pour recueillir les données-->
          <div>
              <label for="nom">Votre nom</label>
              <input type="text" name="nom" placeholder="Jean-Michel Premierdegré">
          </div>

          <div>
              <label for="email">Votre email</label>
              <input type="email" name="email" placeholder="@">
          </div>
          <div>
              <label for="sujet">Votre sujet</label>
              <input type="text" name="sujet" placeholder=" ">
          </div>
          <div>
              <label for="message">Votre message</label>
              <textarea name="message" id="message" placeHolder="Votre Message..."></textarea>
          </div>
          <button type="submit">Envoyer</button>

      </form>

    </section>

<?php include './includes/_footer.html'?>
