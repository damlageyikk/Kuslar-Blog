<?php
$args = array(  
'post_type' => 'post',
'posts_per_page' => 4,
'category_name'    => 'one-cikarilan',
);
$loop = new WP_Query($args);
?>
<!--Kus Turu-->
 <div class="stats py-5 mt-5 mb-5">
  <div class="container py-xl-5 py-lg-3">
		<div class="container py-xl-5 py-lg-3">
			<div class="row text-center my-sm-5 stats-main">
			<?php while ($loop->have_posts()) : $loop->the_post(); ?>
				<div class="col-lg-6">
					<h3 class="counter" style="color: white;"><?php the_title();?></h3>
					<p class="para-text-w3ls text-li" style="color: white;"><?php the_content();?></p>
       		 	</div>
		<?php endwhile; wp_reset_query(); ?>
		</div>
		</div>
	</div>
  </div>


  