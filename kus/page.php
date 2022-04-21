<?php get_header();?>
<div class="container-fluid bg-3 text-center pt-5">    
  <h3 style="margin-top: 20px;"><b><?php the_title();?></b></h3><br>
  <div class="row">
    <div class="col-lg-6">
        <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo the_post_thumbnail_url() ;?>" alt="">
        </a>
    </div>
    <div class="col-lg-6"> 
     <?php the_content(); ?>
     <p class="card-text"><?php the_excerpt();?></p>
    </div>
  </div>
</div>
<?php get_footer();?>