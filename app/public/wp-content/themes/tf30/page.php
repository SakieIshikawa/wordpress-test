<?php get_header(); ?>

<!-- content -->
<div id="content">
  <div class="inner">

    <!-- primary -->
    <main id="primary">

      <!-- breadcrumb(パンくずプラグイン使用) -->
      <?php if (function_exists('bcn_display')) : ?>
        <div class="breadcrumb">
          <?php bcn_display(); ?>
        </div>
      <?php endif; ?>

      <!-- entry -->
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) :
          the_post(); ?>

          <article <?php post_class(array('entry')); ?>>

            <!-- entry-header -->
            <div class="entry-header">
              <?php // カテゴリー１つ目の名前を表示
              $category = get_the_category();
              if ($category[0]) : ?>
                <div class="entry-label">
                  <a href="<?php echo esc_url(get_category_link($category[0]->term_id)); ?>">
                    <?php echo $category[0]->cat_name; ?>
                  </a>
                </div>
              <?php endif; ?>

              <h1 class="entry-title"><?php the_title(); ?></h1>

              <div class="entry-meta">
                <time class="entry-published" datetime="<?php the_time('d'); ?>">公開日 <?php the_time('Y/n/j'); ?></time>
                <?php if (get_the_modified_time('Y-m-d') !== get_the_time('Y-m-d')) : ?>
                  <time class="entry-updated" datetime="<?php the_modified_time('d'); ?>">最終更新日 <?php the_modified_time('Y/n/j'); ?></time>
                <?php endif; ?>
              </div>

              <div class="entry-img">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('large');
                } ?>
              </div>

            </div><!-- //entry-header -->

            <!-- entry-body -->
            <div class="entry-body">
              <?php the_content(); ?>
              <?php
              //改ページを有効にするための記述
              wp_link_pages(
                array(
                  'before' => '<nav class="entry-links">',
                  'after' => '</nav>',
                  'link_before' => '',
                  'link_after' => '',
                  'next_or_number' => 'number',
                  'separator' => '',
                )
              ); ?>
            </div><!-- /entry-body -->

          </article> <!-- /entry -->
        <?php endwhile; ?>
      <?php endif; ?>
    </main><!-- /primary -->

  </div><!-- /inner -->
</div><!-- /content -->

<!-- footer --->
<?php get_footer(); ?>
