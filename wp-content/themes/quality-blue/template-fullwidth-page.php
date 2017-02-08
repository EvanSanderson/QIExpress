<?php 
// Template Name: Fullwidth-page
  get_header(); ?>
<div class="page-seperator"></div>
<div class="container">
  <div class="row">
    <div class="qua_page_heading">
      <h1><?php the_title(); ?></h1>
      <div class="qua-separator"></div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row qua_blog_wrapper">
    <div class="col-md-12">
      <?php the_post(); ?>
	  <div class="qua_blog_section" >
        <div class="qua_blog_post_img">
          <?php $defalt_arg =array('class' => "img-responsive"); ?>
          <?php if(has_post_thumbnail()): ?>
          <a  href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('quality_blog_img', $defalt_arg); ?>
          </a>
          <?php endif; ?>	
        </div>
        <div class="clear"></div>
        <div class="qua_blog_post_content">
          <?php the_content(); ?>
		</div>
      </div>
	  <?php comments_template('',true); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>