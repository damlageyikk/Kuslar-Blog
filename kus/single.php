<?php get_header();?>


<div class="container mb-4">,
    <div class="row">
        <div class="col-lg-4">
            <div class="resim"><img src="<?php the_post_thumbnail_url() ?>" alt=""></div>
        </div>
        <div class="col-lg-8 mt-4">
            <?php the_title();?>
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer();?>

<style>
    .resim img {width: 100%;    }
</style>




