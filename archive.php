<? get_header(); ?>


<!-- content -->
<div id="content">
  <div class="inner">

    <!-- primary -->
    <main id="primary">

      <!-- breadcrumb -->
      <div class="breadcrumb">
        <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
        ?>
      </div><!-- /breadcrumb -->


      <div class="archive-head m_description">
        <div class="archive-lead">ARCHIVE</div>
        <h1 class="archive-title m_category"><?php the_archive_title(); ?></h1><!-- /archive-title -->
        <div class="archive-description">
          <p>
            <?php the_author_description(); ?>
          </p>
        </div><!-- /archive-description -->
      </div><!-- /archive-head -->

      <?php if (have_posts()) : ?>
        <!-- entries -->
        <div class="entries m_horizontal">
          <?php
          while (have_posts()) :
            the_post();
          ?>

            <!-- entry-item -->
            <a href="<?php the_permalink(); ?>" class="entry-item">
              <!-- entry-item-img -->
              <div class="entry-item-img">
                <?php if (has_post_thumbnail()) {
                  the_post_thumbnail('large');
                } else {
                  echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png alt="">';
                }
                ?>
              </div><!-- /entry-item-img -->

              <!-- entry-item-body -->
              <div class="entry-item-body">
                <div class="entry-item-meta">
                  <!-- trueを引数として渡すとリンク付き、falseを渡すとリンクなし -->
                  <div class="entry-item-tag">
                    <?php my_the_post_category(false); ?>
                  </div>
                  <!-- /entry-item-tag -->
                  <time class="entry-item-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/c'); ?></time><!-- /entry-item-published -->
                </div><!-- /entry-item-meta -->
                <h2 class="entry-item-title"><?php the_title(); ?></h2><!-- /entry-item-title -->
                <div class="entry-item-excerpt">
                  <?php the_excerpt(); ?></p>
                </div><!-- /entry-item-excerpt -->
              </div><!-- /entry-item-body -->
            </a><!-- /entry-item -->

          <?php endwhile; ?>
        </div><!-- /entries -->
      <?php endif; ?>


      <!-- pagenation -->
      <?php get_template_part('template-parts/pagination'); ?>
      <!-- /pagenation -->

    </main><!-- /primary -->

    <?php get_sidebar(); ?>

  </div><!-- /inner -->
</div><!-- /content -->

<?php get_footer(); ?>