<!-- entry-related -->
<!-- 表示中の投稿と同じカテゴリーに所属する投稿を、表示中の投稿を除いて、ランダムに、サブクエリを使って、8件表示 -->

<div class="entry-related">
  <div class="related-title">関連記事</div>

  <?php if (has_category()) {
    $post_cats = get_the_category();  //投稿が分類されているカテゴリーを配列で取得
    $cat_ids = array(); //所属カテゴリーのIDリストを作成(term_idが入った配列)
    foreach ($post_cats as $cat) {
      $cat_ids[] = $cat->term_id;  // term_id = カテゴリーID
    }
  }

  $myposts = get_posts(
    array(
      'posts_per_page' => 4,  // 記事を○件表示
      'orderby' => 'rand',    // 記事をランダムで表示
      'post_type' => 'post',  // 投稿タイプ
      'post__not_in' => array($post->ID), // 表示中の投稿を除外
      'category__in' => $cat_ids // この投稿と同じカテゴリーに属する投稿の中から
    )
  );
  if ($myposts) : ?>

    <div class="related-items">

      <?php foreach ($myposts as $post) :
        setup_postdata($post); ?>

        <a class="related-item" href="<?php the_permalink(); ?>">
          <div class="related-item-img">
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail('midium');
            } else {
              echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
            } ?>
          </div>
          <div class="related-item-title">
            <?php the_title(); ?>
          </div>
        </a>

      <?php endforeach;
    wp_reset_postdata(); ?>

    </div><!-- /related-items -->
  <?php endif; ?>
</div><!-- /entry-related -->
