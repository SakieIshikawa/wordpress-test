<!-- pickup -->
<div id="pickup">
  <div class="inner">

    <div class="pickup-items">

      <!-- pickupにする記事のIDを指定 -->
      <?php $pickup_ids = array(26, 13, 10); ?>
      <?php foreach ($pickup_ids as $id) : ?>

        <a href="<?php echo esc_url(get_permalink($id)); ?>" class="pickup-item">
          <div class="pickup-item-img">
            <?php if (has_post_thumbnail($id)) {
              the_post_thumbnail($id, 'large');
            } else {
              echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
            } ?>
            <div class="pickup-item-tag"><?php my_the_post_category(false, $id); ?></div>
          </div>
          <div class="pickup-item-body">
            <h2 class="pickup-item-title"><?php echo esc_html(get_the_title($id)); ?></h2>
          </div>
        </a><!-- /pickup-item -->

      <?php endforeach; ?>

    </div><!-- /pickup-items -->

  </div><!-- /inner -->
</div><!-- /pickup -->
