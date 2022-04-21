  <!--Galeri-->
  <?php
$args = array(  
'post_type' => 'post',
'posts_per_page' => 16,
'category_name' => 'galeri',
);
$loop = new WP_Query($args);
?>  
  <div class="container" id="galeri">
    <h1 class="font-weight-light text-center text-lg-left mt-5 mb-0" style="color: #00437e;"><b><i><i class="fas fa-dove" style="color: #00437e"></i>GALERİ</i></b></h1>
    <hr class="mt-2 mb-5">
   <div class="row text-center text-lg-left">
      <section class="row align-middle">
        <?php 
        $query_images_args = array(
            'post_type'      => 'attachment',
            'post_mime_type' => 'image,video',// video files include
            'post_status'    => 'inherit',
            'orderby'        => 'post_date',
            'posts_per_page' =>  16,
        );

        $query_images = new WP_Query( $query_images_args );

        if($query_images->have_posts()) : 
            while($query_images->have_posts()) : 
                $query_images->the_post(); ?>

                <div class="col-lg-3 col-md-4 col-6 pt-1">
                    <?php echo $images = wp_get_attachment_image( $query_images->ID, 'thumbnail' ); ?>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
        <?php endif;
        /* Restore original Post Data */
        wp_reset_postdata(); ?>
</section>
        </div>
        </div>
