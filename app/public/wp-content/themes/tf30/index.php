<?php get_header(); ?>

<!-- pickup 3記事 -->
<?php get_template_part('template-parts/pickup_by_tag'); ?>

<!-- content -->
<div id="content">
  <div class="inner">

    <!-- primary -->
    <main id="primary">

      <!-- if文で、記事があればentriesブロック以下を表示させ、while文で記事数ぶんループさせる(entry-item)-->
      <?php if (have_posts()) : ?>
        <div class="entries">
          <?php while (have_posts()) :
            the_post(); ?>

            <!-- entry-item -->
            <a href="<?php the_permalink(); ?>" class="entry-item">
              <?php if (has_post_thumbnail()) {
                the_post_thumbnail('large');
              } else {
                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
              } ?>
              <div class="entry-item-body">
                <div class="entry-item-meta">

                  <!-- カテゴリー１つ目の名前を表示 -->
                  <!-- trueを引数として渡すとリンク付き、falseを渡すとリンクなし -->
                  <div class="entry-item-tag">
                    <?php my_the_post_category(false); ?>
                  </div>

                  <time class="entry-item-published" datetime="<?php the_time('d'); ?>"><?php the_time('Y年n月j日'); ?></time>
                </div>
                <h2 class="entry-item-title">
                  <?php the_title(); ?></h2>
                <div class="entry-item-excerpt">
                  <?php the_excerpt(); ?></div>
              </div>
            </a><!-- /entry-item -->
          <?php endwhile; ?>

        </div><!-- /entries -->
      <?php endif; ?>

      <?php get_template_part('template-parts/pagenation'); ?>


    </main><!-- /primary -->

    <?php get_sidebar(); ?>

  </div><!-- /inner -->
</div><!-- /content -->

<?php get_footer(); ?>


<!---------    TO DO ------------

記事へのリンク
アイキャッチ
所属カテゴリー
公開日時
タイトル
コンテンツの抜粋

the_title( )、the_excerpt( )、get_the_category( )、the_permalink( ) 、the_post_thumbnail()

----------------------------->
