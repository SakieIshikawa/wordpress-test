<!-- pickup -->
<div id="pickup">
  <div class="inner">

    <div class="pickup-items">

      <!-- pickupにする記事を指定 -->
      <?php
      $pickup_posts = get_posts(array(
        'post_type' => 'post',
        'posts_per_page' => '3', // 3件取得
        'tag' => 'pickup', // pickupタグがついたものを
        'orderby' => 'rand', // ランダムに
      ));
      ?>
      <?php foreach ($pickup_posts as $post) : ?>

        <a href="<?php echo esc_url(get_permalink()); ?>" class="pickup-item">
          <div class="pickup-item-img">
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail('large');
            } else {
              echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
            } ?>
            <div class="pickup-item-tag"><?php my_the_post_category(false); ?></div>
          </div>
          <div class="pickup-item-body">
            <h2 class="pickup-item-title"><?php echo esc_html(get_the_title()); ?></h2>
          </div>
        </a><!-- /pickup-item -->

      <?php endforeach; ?>

    </div><!-- /pickup-items -->

  </div><!-- /inner -->
</div><!-- /pickup -->
