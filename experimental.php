<?php
/* 
* Template Name: Epxerimental Page
*/


get_header();

?>
<!-- Page Title
============================================= -->
<section id="page-title">
  <div class="container clearfix">
    <h1><?php the_title(); ?></h1>
  </div>
</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

  <div class="content-wrap">

    <div class="container clearfix">

      <?php
      
        wp_loginout();

      ?>

    </div><!-- .postcontent end -->

  </div>

</section><!-- #content end -->

<?php get_footer(); ?>
