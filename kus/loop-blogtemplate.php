<?php
$args = array(  
'post_type' => 'post',
'posts_per_page' => 4,
'category_name'    => 'blogtemplate',
);
$loop = new WP_Query($args);
?>

<div class="bg2 py-2 mt-2 mb-4">
      <div class="container">
          <h2 style="color: white; font-size: 38px; text-align: center;">
            <i class="fas fa-feather-alt"></i><b><i>BLOG</i></b></h2>
          <div class="row bg2-main1">
          <?php while ($loop->have_posts()) : $loop->the_post(); ?>
          <div class="col-lg-6">
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row">
                  <div class="col-md-4">
                  <img src="<?php echo the_post_thumbnail_url(); ?>"class="card-img" alt="">
                  </div>
                  <div class="col-md-8 bg4">
                    <div class="card-body">
                      <h5 class="card-title"><?php the_title(); ?>Blog</h5>
                      <p class="card-text"><?php the_excerpt();?></p>
                    <a href="<?php the_permalink(); ?>" class="card-link">Devamını oku..</a>
                    <p class="card-text"><small class="text-muted"><?php the_time('j F Y'); ?></small></p>
                    </div>
                  </div>
                </div>
              </div>
          </div>   
          <?php endwhile; wp_reset_query(); ?> 
      </div> 
    </div>
</div>