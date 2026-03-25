<?php get_header(); ?>

<main class="contact-page logo-bg">

  <div class="page-header">
    <div class="page-title">
      <span>CONTACT</span>
      <h1>お問い合わせ</h1>
      <p>
        民泊運営や清掃サービスに関するご相談など、<br>
        お気軽にお問い合わせください。
      </p>
    </div>
  </div>

  <!-- フォーム -->
  <section class="contact-section">
    <div class="container">
      <?php
      while ( have_posts() ) :
        the_post();
        the_content();
      endwhile;
      ?>
    </div>
  </section>


</main>

<?php get_footer(); ?>