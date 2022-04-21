<!--Kuş Türleri--->
<?php
$args = array(  
'post_type' => 'post',
'posts_per_page' => 10,
'category_name'    => 'kus-turleri',
);
$loop = new WP_Query($args);
?>
<div class="container">
    <h2 style="color: blue; font-size: 32px; text-align: center; margin-bottom: 10px;"><b><i>Bazı Kuş Türleri</i></b></h2>
    <div class="row">
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
      <div class="col-lg-3">  
      <div class="bottom-gd">  
         <a href="<?php the_permalink(); ?>"><img src="<?php echo the_post_thumbnail_url(); ?>" alt="" style="width:150px; height: 200px;"></a>
         <h5 class="counter"><?php the_title();?></h5>
      </div>
</div>
<?php endwhile; wp_reset_query(); ?>
            </div>
    </div>