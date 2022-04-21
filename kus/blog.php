<?php get_header();?>
<div class="container">
    <div class="row">
      <div class="col-lg-7 mt-4 mb-4">
        <div class="card">
        <img src="<?php echo the_post_thumbnail_url(); ?>" class="card-img-top" alt="" style="width:640px; height:500px;"></a>
          <div class="card-body">
          <h5 class="counter"><?php the_title();?></h5>
          <p class="card-text"><?php the_excerpt();?></p>
            <a href="<?php the_permalink(); ?>" class="card-link btn btn-outline-danger btn-sm">Devamını oku..</a>
            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-comment-alt"></i></a>
            <a href="" class="btn btn-outline-danger btn-sm"><i class="fas fa-eye"></i></a>
            <p class="card-text"><small class="text-muted"><?php the_time('j F Y'); ?></small></p>
          </div>
        </div>
    </div>
    <div class="col-lg-5 mt-4">
        <div class="card">
          <div class="header">
            <div class="card-body">
              <div class="input-group">
                <i class="fas fa-search" style="font-size: 18px; margin-top: 12px; margin-right: 5px; margin-bottom: 10px;"></i>
                <input id="search" type="text" class="form-control" placeholder="Arama">
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>
            </div>
<?php get_footer(); ?>