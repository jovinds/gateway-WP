<?php get_header(); ?>

  <!-- ##### Breadcumb Area Start ##### -->
  <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center"
    style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg-login.jpg);background-position: center top 20%;">
    <div class="mainCap">image photo</div>
    <div class="bradcumbContent">
      <h2>My Page</h2>
    </div>
  </section>
  <!-- ##### Breadcumb Area End ##### -->

  <section class="contact-form-area section-padding-100-0">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-heading text-center">
            <div class="line-"></div>
            <h2>マイページ</h2>
          </div>
          <!-- php読み込み  -->
          <iframe src="<?php echo get_permalink( get_page_by_path( 'login-form' ) ); ?>" width="100%" height="1500px" frameborder="0" scrolling="auto" class="mb-50"></iframe>

          <!-- ここまで -->
        </div>
      </div>
    </div>
    </div>
  </section>

  <?php get_footer(); ?>