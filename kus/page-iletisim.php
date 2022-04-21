<?php get_header();?>

<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
		   <div class="mbottom">
              <h2>   İletişim Bilgilerinizi Bırakın  </h2>
              <p>   Soru, görüş ve önerileriniz için mesaj gönderebilrisiniz. </p>
            </div>
	<form role="form" method="post">
    <div class="form-group">
	<div class="row">
    <div class="col-md-6">
	<input type="text" class="form-control input-lg mt-2" placeholder="Adınız" required="" name="ad" id="ad" value="">
	</div>
    <div class="col-md-6">
	<input type="text" class="form-control input-lg mt-2" placeholder="Soyadınız" required="" name="soyad" id="soyad" value="">
	</div>
	</div>
	</div><div class="form-group">
	<div class="row">
    <div class="col-md-6">
	<input type="email" name="email" placeholder="E-Posta Adresiniz" required="" class="form-control input-lg mt-2" id="email" value="">
	</div>
    <div class="col-md-6">
	<input type="tel" name="tel" placeholder="Telefon" required="" class="form-control input-lg mt-2" id="tel" value="">
	</div>
	</div>
	</div>
    <div class="form-group">
                <div class="row">
                  <div class="col-md-12">
                    <textarea name="mesaj" class="form-control mt-2" rows="8" cols="80" placeholder="Mesajınız"></textarea>
                  </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-gonder2 btn-dark mb-4 mt-2" name="gonder">FORMU GÖNDER</button>
            </form>		         
         </div>
        </div>
        </div>
    </div>
</div>

<?php get_footer();?>

<!--
<div class="container-fluid bg-3 text-center pt-5">    
  <h3 style="margin-top: 20px;"><b><?php the_title();?></b></h3><br>
  <div class="row">
  <div class="col-lg-6"> 
     <?php the_content(); ?>
    </div>
    <div class="col-lg-6">
        <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo the_post_thumbnail_url() ;?>" alt="">
          </a>
    </div>
  </div>
</div>-->