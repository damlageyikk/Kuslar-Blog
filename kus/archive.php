<?php get_header();?>
<div class="container">
    <div class="row">
    <?php while (have_posts()) : the_post(); ?>
        <div class="col-lg-4">
            <div class="kendikartimiz">
                <div class="sol">
                    <img src="<?php echo the_post_thumbnail_url(); ?>" />
                </div>
                <div class="sag">
                    <small class="text-muted"><?php the_time('j F Y'); ?></small>
                    <div class="baslik"><?php the_title();?></div>
                    <div class="ozet"><?php the_excerpt();?></div>
                    <a class="btn btn-primary" href="<?php the_permalink() ?>">Devamını oku</a>
                </div>
            </div>
        </div>
        <?php endwhile; wp_reset_query(); ?> 
    </div>
</div>
<?php get_footer(); ?>


