<?php get_header(); ?>
<!-- Page Title
============================================= -->
<section id="page-title">

  <div class="container clearfix">
    <h1><?php the_archive_title(); ?></h1>
    <span><?php

    if( is_year() ) {
      echo 'You are viewing a year archive.';
    } else if ( is_month() ) {
      echo 'You are viewing a month archive.';
    } else if ( is_day() ) {
      echo 'You are viewing a day archive.';
    }

    ?></span>
  </div>

</section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

      <div class="content-wrap">

        <div class="container clearfix">

          <!-- Post Content
          ============================================= -->
          <div class="postcontent nobottommargin clearfix">

            <!-- Posts
            ============================================= -->
            <div id="posts">

              <?php
                if( have_posts()) {
                  while ( have_posts() ) {
                    the_post();

                    // content-excerpts.php
                    get_template_part( 'partials/post/content-excerpt' );
                    // wordpress will look for 1) content-excerpt.php; if not avalavble then it will look for 2) content.php
                    //get_template_part( 'partials/post/content', 'excerpt' );
                  }
                }
              ?>
            

            </div><!-- #posts end -->

            <!-- Pagination
            ============================================= -->
            <div class="row mb-3">
              <div class="col-12">
                <?php 

                  next_posts_link( '&larr; Older');

                  previous_posts_link( 'Newer &rarr;')

                  ?>
                <!-- <a href="#" class="btn btn-outline-secondary float-left">
                  &larr; Older
                </a>
                <a href="#" class="btn btn-outline-dark float-right">
                  Newer &rarr;
                </a> -->
              </div>
            </div>
            <!-- .pager end -->

          </div><!-- .postcontent end -->

          <?php get_sidebar(); ?>

        </div>

      </div>

    </section><!-- #content end -->

<?php get_footer(); ?>
