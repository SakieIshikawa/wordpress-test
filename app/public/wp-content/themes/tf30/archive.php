<!-- header -->
<?php get_header(); ?>

<!-- content -->
<div id="content">
  <div class="inner">

    <!-- primary -->
    <main id="primary">

      <!-- breadcrumb -->
      <div class="breadcrumb">
        <?php bcn_display(); ?>
      </div>

      <div class="archive-head m_description">
        <div class="archive-lead">ARCHIVE</div>
        <h1 class="archive-title m_category"><?php the_archive_title(); ?></h1>
        <div class="archive-description">
          <p><?php the_archive_description(); ?></p>
        </div>
      </div><!-- /archive-head -->


      <!-- entries -->
      <?php if (have_posts()) : ?>
        <div class="entries m_horizontal">
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
                  <?php $category = get_the_category();
                  if ($category[0]) {
                    echo '<div class="entry-item-tag">' . $category[0]->cat_name . '</div>';
                  } ?>
                  <time class="entry-item-published" datetime="<?php the_time('d'); ?>"><?php the_time('Y年n月j日'); ?></time>
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

    <!-- secondary (sidebar) -->
    <?php get_sidebar(); ?>

  </div><!-- /inner -->
</div><!-- /content -->

<!-- footer -->
<?php get_footer(); ?>
