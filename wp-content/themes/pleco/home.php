<?php get_header(); ?>

<main class="main logo-bg">

  <section class="news-page">
    <div class="container">

      <div class="page-header">
        <div class="page-title">
          <span>NEWS</span>
          <h1>お知らせ</h1>
        </div>
      </div>

      <!-- カテゴリタブ -->
      <div class="news-category-bar">

        <!-- すべて -->
        <a href="<?php echo home_url('/news'); ?>"
          class="news-category-btn <?php if (is_home() || is_page('news')) echo 'active'; ?>">
          すべて
        </a>

        <?php
        $categories = get_categories();

        foreach ($categories as $category) {
        ?>

          <a href="<?php echo get_category_link($category->term_id); ?>"
             class="news-category-btn <?php if (is_category($category->term_id)) echo 'active'; ?>">
            <?php echo esc_html($category->name); ?>
          </a>

        <?php } ?>

      </div>


      <!-- 記事一覧 -->
      <div class="news-wrapper">

        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>

            <article class="news-item">

              <a href="<?php the_permalink(); ?>" class="news-link">

                <div class="news-thumb">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo/PLECO-rogo.png" alt="PLECOロゴ">
                  <?php endif; ?>
                </div>

                <div class="news-text">

                  <div class="news-meta">
                    <span class="news-tag">
                      <?php
                      $category = get_the_category();
                      if ($category) {
                        echo esc_html($category[0]->cat_name);
                      }
                      ?>
                    </span>

                    <span class="news-date">
                      <?php echo get_the_date('Y/m/d'); ?>
                    </span>
                  </div>

                  <h3 class="news-title">
                    <?php the_title(); ?>
                  </h3>

                </div>

              </a>

            </article>

          <?php endwhile; ?>


          <!-- ページネーション -->
          <div class="news-pagination">
            <?php the_posts_pagination(); ?>
          </div>

        <?php else : ?>

          <p>記事がまだありません。</p>

        <?php endif; ?>

      </div>

    </div>
  </section>
</main>
<?php get_footer(); ?>