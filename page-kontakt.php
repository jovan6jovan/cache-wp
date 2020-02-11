<?php

  get_header();
  
    // Message VARS

    $msg = '';
    $msgClass = '';
   
  // Check for submit
  if(filter_has_var(INPUT_POST, 'submit')) {
      // Get form data
      $name = htmlspecialchars($_POST['message_name']);
      $email = htmlspecialchars($_POST['message_email']);
      $message = htmlspecialchars($_POST['message_text']);
      $human = htmlspecialchars($_POST['message_human']);
  
      // Check required fields
      if(!empty($name) && !empty($email) && !empty($message) && !empty($human)) { 
          // Passed
          // Human check
          if(!$human == 0) {
              if($human != 5) {
                  $msg = 'Verifikacija da ste čovek nije uspela';
                  $msgClass = 'error';
              } else {
                  // Check email
                  if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                  // Failed
                  $msg = 'Neispravna email adresa';
                  $msgClass = 'error';
                  } else {
                      // Passed
                      // Recipient email
                      $toEmail = 'mladensalipurovic@gmail.com';  // PROMENITI MEJL ADRESU
                      $subject = 'Poruka od korisnika ' .$name;
                      $body = '<h2>Nova poruka</h2>
                              <h4>Ime</h4>
                              <p>'.$name.'</p>
                              <h4>Email</h4>
                              <p>'.$email.'</p>
                              <h4>Tekst poruke</h4>
                              <p>'.$message.'</p>'
                              ;
                      // Email headers
                      $headers = "MIME-Version: 1.0" ."\r\n";
                      $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
                      // Additional headers
                      $headers.= "From: " .$name. "<".$email.">". "\r\n";
  
                      if (mail($toEmail, $subject, $body, $headers)) {
                          // Email sent
                          $msg = 'Uspešno ste poslali poruku';
                          $msgClass = 'success';
                      } else {
                          // Failed
                          $msg = 'Nažalost, Vaša poruka nije poslata.';
                          $msgClass = 'error';
                      }
                  }
              }
          }
      }
      else {
          // Failed
          $msg = 'Molimo Vas da popunite sva polja.';
          $msgClass = 'error';
      }
  }

?>

<section class="section-banner" style="background-image: url(<?php echo get_theme_file_uri('/images/gallery-img/03.jpg') ?>); background-position: center;
  background-size: cover;">
  <div class="banner-content-container">
    <div class="banner-heading-container">
      <h1 class="banner-h1">Kontakt stranica</h1>
    </div>
    <div class="banner-paragraph-container">
      <p class="banner-p">Možete nas kontaktirati preko fejsbuka, instagrama, pozivom na broj ili preko kontakt forme.</p>
   </div>
  </div>
</section>

<section class="contact">
  <div class="company-info">
    <div class="card-address-container">
      <h4>ADRESA</h4>
      <a
        class="company-info-card card-address"
        href="https://www.google.com/maps/place/Caffe+restoran+CACHE,+%D0%A5%D1%83%D0%BC%D1%81%D0%BA%D0%B0+8,+%D0%91%D0%B5%D0%BE%D0%B3%D1%80%D0%B0%D0%B4/@44.7897163,20.462388,16z/data=!4m2!3m1!1s0x475a71c7353c959d:0xe89c83aca1663995?gl=rs"
        target="_blank"
      >
        <img
          src="<?php echo get_theme_file_uri('/images/svg/location.svg') ?>"
          class="contact-svg-img"
        />
        <span>Humska&nbsp;8,&nbsp;Beograd</span>
      </a>
    </div>
    <div class="card-phone-container">
      <h4>TELEFON</h4>
      <a class="company-info-card card-phone" href="tel:+38169777992">
        <img
          src="<?php echo get_theme_file_uri('/images/svg/phone.svg') ?>"
          class="contact-svg-img"
        />
        <span>+381&nbsp;69&nbsp;777992</span>
      </a>
    </div>
  </div>

  <div class="form-container">
    <?php 
          if($msg != '') { ?>
              <div class="<?php echo $msgClass ?>">
                  <?php echo $msg; ?>
              </div>
      <?php } 
      ?>
    <div class="contact-text">
      <h2>Kontaktirajte nas</h2>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. La bore sunt,
        sequi explicabo id ducimus placeat iusto laboriosam , quibusdam quaerat
        voluptatem sapiente, quidem vitae repudiandae o bcaecati maiores quo
        dolore recusandae ipsa?
      </p>
    </div>

    <div id="contact-form-container">
      <form class="contact-form" action="<?php echo site_url('/kontakt') ?>" method="POST">
        <p>
          <label for="name">Vaše ime <span class="star">*</span></label>
          <input type="text" name="name" minlength="3" value="<?php echo esc_attr($_POST['message_name']); ?>" required />
        </p>
        <p>
          <label for="email">Vaš email <span class="star">*</span></label>
          <input type="email" name="email" value="<?php echo esc_attr($_POST['message_email']); ?>" required />
        </p>
        <p class="full">
          <label for="message">Vaša poruka <span class="star">*</span></label>
          <textarea name="message" rows="5" required><?php echo esc_attr($_POST['message_text']); ?></textarea>
        </p>
        <p class="full">
          <button class="btn-primary" type="submit" name="submit">Pošaljite</button>
        </p>
      </form>
    </div>
  </div>
</section>

<section class="map-container">
  <div id="map"></div>
</section>

<?php get_footer(); ?>