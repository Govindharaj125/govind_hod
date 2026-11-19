	<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-stellar-background-ratio="0.5" data-bg-img="<?php echo base_url(); ?>/frontend/images/bg6.jpg" style="background-image: url("images/bg6.jpg"); background-position: 50% 61px;">
      <div class="container pt-100 pb-80">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Contact Us</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- Start main-content -->
	
	<section class="divider">
      <div class="container">
        <div class="row pt-30">
          <!--
          <div class="col-md-6">
            <h3 class="line-bottom mt-0 mb-30">Feedback / Suggestions / Prayers</h3>
            
            <!-- Contact Form -->
            <!--
            <form id="contact_form" name="contact_form" class="" action="http://html.kodesolution.live/html/nonprofit/charity/charitypress-html/v3.1/demo/includes/sendmail.php" method="post" novalidate="novalidate">

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Name <small>*</small></label>
                    <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="" aria-required="true">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email <small>*</small></label>
                    <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                  </div>
                </div>
              </div>
                
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Subject <small>*</small></label>
                    <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject" aria-required="true">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Phone</label>
                    <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Message</label>
                <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message" aria-required="true"></textarea>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="">
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
              </div>
            </form>

            <!-- Contact Form Validation-->
            <!--
            <script type="text/javascript">
              $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
            -->

          <div class="col-md-6">
            <h3 class="line-bottom mt-0">Get in touch with us</h3>
            
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Location</h5>
                <p>CSI St. Mark’s Church<br>
# 212, Velachery Main Road,<br>
Selaiyur, Chennai – 600073.</p>
              </div>
            </div>
            <div class="icon-box media mb-15 col-lg-6">
              <div class="media-body">
                <h3>Pastor</h3>
<p>Rev. Francis GSM<br>
+91 9150611667</p>


<h3>Sexton</h3>
<p>Mr. Chakravorthy<br>
+91 9573813494</p>



              </div>
            </div>
			  
			  <div class="icon-box media mb-15 col-lg-6">
              <div class="media-body">
               

<h3>Secretary</h3>
<p>Dr. Vivek Samuel<br>
+91 9884455100</p>


<h3>Treasurer</h3>
<p>Mr. John Benson<bR>
+91 9444492767</p>


              </div>
            </div>
            
            
			  
			  <ul class="styled-icons icon-dark icon-sm icon-circled mb-20">

              <li><a href="https://www.facebook.com/CSIStMarksChurch" data-bg-color="#3B5998" style="background: rgb(59, 89, 152) !important;"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/csistmarkschrch" data-bg-color="#02B0E8" style="background: rgb(2, 176, 232) !important;"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.instagram.com/csistmarkschurch" data-bg-color="#D9CCB9" style="background: rgb(217, 204, 185) !important;"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://www.youtube.com/csistmarkschurchselaiyurchennai" data-bg-color="#D71619" style="background: rgb(215, 22, 25) !important;"><i class="fa fa-youtube-play text-white"></i></a></li>
              </ul>
			  
          </div>
        </div>
      </div>
    </section>
	

  <!-- end main-content -->
