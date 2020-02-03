<?php get_header(); ?>

<section class="section-banner" style="background-image: url(<?php echo get_theme_file_uri('/images/viber-img/03.jpg') ?>); background-position: center;
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
      >
        <img
          src="https://sendeyo.com/up/d/a1ff9f3b10"
          class="contact-svg-img"
        />
        <span>Humska&nbsp;8,&nbsp;Beograd</span>
      </a>
    </div>
    <div class="card-phone-container">
      <h4>TELEFON</h4>
      <a class="company-info-card card-phone" href="tel:+38112345678">
        <img
          src="https://sendeyo.com/up/d/38b0b6ddbf"
          class="contact-svg-img"
        />
        <span>+381&nbsp;123&nbsp;456&nbsp;789</span>
      </a>
    </div>
  </div>

  <div class="form-container">
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
      <form class="contact-form" action="" method="POST">
        <p>
          <label for="name">Vaše ime <span class="star">*</span></label>
          <input type="text" name="name" minlength="3" required />
        </p>
        <p>
          <label for="email">Vaš email <span class="star">*</span></label>
          <input type="email" name="email" required />
        </p>
        <p class="full">
          <label for="message">Vaša poruka <span class="star">*</span></label>
          <textarea name="message" rows="5" required></textarea>
        </p>
        <p class="full">
          <button class="btn-primary">Pošaljite</button>
        </p>
      </form>
    </div>
  </div>
</section>

<section class="map-container">
  <div id="map"></div>
</section>

<?php get_footer(); ?>