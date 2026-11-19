<style>
  .alertify-notifier .ajs-message {
  /* background: rgba(255, 255, 255, 0.95); */
  color: #fff;
  text-align: center;
  border: solid 1px #fff;
  border-radius: 2px;
}
</style>
	<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-stellar-background-ratio="0.5" data-bg-img="<?php echo base_url(); ?>/frontend/images/bg6.jpg" style="background-image: url("images/bg6.jpg"); background-position: 50% 61px;">
      <div class="container pt-100 pb-80">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Quick Contact</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- Start main-content -->
	
	<section>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-push-3">
            <h2 class="text-gray mt-0 pt-5"> Login</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur elit.</p>
            <!-- <form name="login-form" class="clearfix"> -->
             <?php
                $attributes = ['class' => 'clearfix','role'=>"form",'name'=>'login-form', 'id' => 'loginform'];
                echo form_open('/login',$attributes); ?> 
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="form_username_email">Username/Mobile Number</label>
                  <input id="form_username_email" name="form_username_email" required="" class="form-control" type="text">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="form_password">Password</label>
                  <input id="form_password" name="form_password" required="" class="form-control" type="password">
                </div>
              </div>

              <div class="form-group">
                            <p class="alert-danger"><?=$session->getFlashdata('invalid_login');?></p>
                        </div>
              <div class="checkbox pull-left mt-15">
                <label for="form_checkbox">
                  <input id="form_checkbox" name="form_checkbox" type="checkbox">
                  Remember me </label>
              </div>
              <div class="form-group pull-right mt-10">
                <button type="submit" class="btn btn-dark btn-sm">Login</button>
              </div>
              <div class="clear text-center pt-10">
                <a class="text-theme-colored font-weight-600 font-12" href="<?php echo base_url('forgot-password')?>">Forgot Your Password?</a>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </section>
  
  <!-- end main-content -->
