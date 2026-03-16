<aside class="news-sidebar">

  <h3>CATEGORY</h3>

  <ul class="news-category-list a-hover">
    <?php
    wp_list_categories(array(
      'title_li' => '',
      'orderby' => 'name'
    ));
    ?>
  </ul>

</aside>