<!-- header -->
<?php get_header(); ?>


<!-- content -->
<div id="content">
  <div class="inner">

    <!-- primary -->
    <main id="primary">

      <!-- breadcrumb(パンくずプラグイン使用) -->
      <div class="breadcrumb">
        <?php bcn_display(); ?>
      </div>

      <div class="archive-head">
        <div class="archive-lead">SEARCH</div>
        <h1 class="archive-title m_search"><span>"<?php the_search_query(); ?>"</span>の検索結果：<?php echo $wp_query->found_posts; ?>件</h1>
      </div>

      <!-- entries 記事があればentriesブロック以下を表示 -->
      <?php if (have_posts()) : ?>
        <div class="entries m_horizontal">

          <!-- entries 記事がある間はentry-itemをloop -->
          <?php while (have_posts()) :
            the_post(); ?>

            <!-- entry-item （記事/子）-->
            <a class="entry-item" href="<?php the_permalink(); ?>">
              <div class="entry-item-img">
                <?php if (has_post_thumbnail()) {
                  the_post_thumbnail('large');
                } else {
                  echo '<img src="' . esc_url(get_template_directory_uri()) . 'img/noimg.png" alt="">';
                }; ?>
              </div>

              <div class="entry-item-body">
                <div class="entry-item-meta">
                  <div class="entry-item-tag">
                    <?php $category = my_the_post_category(false); ?>
                  </div>
                  <time class="entry-item-published" datetime="<?php the_time('d'); ?><?php the_time('Y年n月j日'); ?>"></time>
                </div>
                <h2 class="entry-item-title"><?php the_title(); ?></h2>
                <div class="entry-item-excerpt">
                  <p><?php the_excerpt(); ?></p>
                </div>
              </div>
            </a><!-- /entry-item -->

          <?php endwhile; ?>
        </div><!-- /entries -->
      <?php endif; ?>


      <!-- pagenation -->
      <?php get_template_part('template-parts/pagenation'); ?>

    </main><!-- /primary -->

    <!-- secondary -->
    <?php get_sidebar(); ?>

  </div><!-- /inner -->
</div><!-- /content -->


<!-- footer -->
<?php get_footer(); ?>
