<?php get_header(); ?>

<main class="single">

  <div class="section-header">
    <div class="section-title">
      <span>NEWS</span>
      <h2>お知らせ</h2>
    </div>
  </div>

  <div class="breadcrumbs">
    <div class="bread-inner a-hover"><?php bcn_display(); ?></div>
  </div>


  <section class="single-contents">

    <!-- メイン記事 -->
    <article class="single-article">

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <div class="post-meta">

          <?php
          $category = get_the_category();
          if ($category[0]) :
          ?>
            <span class="post-category">
              <a href="<?php echo get_category_link($category[0]->term_id); ?>" rel="category tag">
                <?php echo $category[0]->cat_name; ?>
              </a>
            </span>
          <?php endif; ?>

          <time datetime="<?php the_time('c'); ?>" class="post-date">
            <?php the_time('Y/n/j'); ?>
          </time>

        </div>

          <h1 class="single-title">
            <?php the_title(); ?>
          </h1>

          <div class="single-thumb">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/no-img.png" alt="no-image">
            <?php endif; ?>
          </div>

          <div class="single-body">
            <?php the_content(); ?>
          </div>


          <!-- 前後記事 -->
          <div class="single__post-links">

            <?php
            $prev_post = get_previous_post(false);
            if ($prev_post) :
            ?>
              <div class="single__post-link">
                <a href="<?php echo get_permalink($prev_post->ID); ?>" rel="prev">
                  &lt; 前の記事へ
                </a>
              </div>
            <?php endif; ?>

            <?php
            $next_post = get_next_post(false);
            if ($next_post) :
            ?>
              <div class="single__post-link">
                <a href="<?php echo get_permalink($next_post->ID); ?>" rel="next">
                  次の記事へ &gt;
                </a>
              </div>
            <?php endif; ?>

          </div>

        <?php endwhile; ?>
      <?php endif; ?>

    </article>

    <!-- サイドバー -->
    <aside class="single-sidebar news-sidebar pc-only">
      <?php get_sidebar(); ?>
    </aside>

  </section>


  <!-- 関連記事 -->
  <?php
  $latest_posts = new WP_Query(array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post__not_in'   => array(get_the_ID()),
    'orderby'        => 'date',
    'order'          => 'DESC'
  ));

  if ($latest_posts->have_posts()) :
  ?>

    <section class="related">

      <h2 class="related__title">新着記事</h2>

      <div class="related__items">

        <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>

          <a href="<?php the_permalink(); ?>" class="related__card">

            <div class="related__thumb">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php else : ?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/no-img.png" alt="no-image">
              <?php endif; ?>
            </div>

            <div class="related__content">
              <div class="related__meta">
                <span class="related__tag">
                  <?php
                  $category = get_the_category();
                  if ($category) {
                    echo esc_html($category[0]->cat_name);
                  }
                  ?>
                </span>

                <span class="related__date">
                  <?php echo get_the_date('Y/m/d'); ?>
                </span>
              </div>

              <p class="related__date"><?php echo get_the_date('Y.m.d'); ?></p>
              <h3 class="related__card-title"><?php the_title(); ?></h3>
            </div>

          </a>

        <?php endwhile; ?>

      </div>

    </section>

  <?php endif; wp_reset_postdata(); ?>

  <div class="news-all-btn">
    <a href="/news" class="btn btn-lg">記事一覧</a>
  </div>


</main>

<?php get_footer(); ?>