<!-- Start main-content -->
<div class="main-content"> 
 
  <!-- Section: home -->
  <section id="home">
    <div class="container-fluid p-0"> 
      
      <!-- Slider Revolution Start -->
      <div class="rev_slider_wrapper">
        <div class="rev_slider" data-version="5.0">
          <ul>
            <?php foreach($banner as $banner){?>
            <!-- SLIDE 1 -->
            <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg4.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description=""> 
              <!-- MAIN IMAGE --> 
              <img src="<?= base_url().'/uploads/'.$banner['image'] ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina> 
              <!-- LAYERS --> 
            </li>
            <?php }?>
            
            
            
          </ul>
        </div>
        <!-- end .rev_slider --> 
      </div>
      <!-- end .rev_slider_wrapper --> 
      <script>
          $(document).ready(function(e) {
            $(".rev_slider").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [600, 768, 960, 720],
              lazyType: "none",
              parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script> 
      <!-- Slider Revolution Ends --> 
      
    </div>
  </section>
  
  <!-- Section: home-boxes -->
  <section>
    <div class="container pt-0 pb-0">
      <div class="section-content">
        <div class="row equal-height-inner home-boxes" data-margin-top="-100px">
          <div class="col-sm-12 col-md-4 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
            <div class="sm-height-auto bg-theme-colored">
              <div class="p-30">
                <h2 class="text-white mt-0 font-26 font-weight-500">Word of the Day</h2>
                <p class="text-white">
                  <?= @$quote[0]['Quote'] ?>
                </p>
              </div>
              <i class="flaticon-charity-shaking-hands-inside-a- bg-icon"></i> </div>
          </div>
          <div class="col-sm-12 col-md-4 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
            <div class="sm-height-auto bg-theme-colored-darker2">
              <div class="p-30">
                <h2 class="text-white mt-0 font-26 font-weight-500">Wedding Wishes</h2>
                <div class="wedding_wishes_scroller" data-dots="false" data-nav="false">
                  <div class="item" style="">
                    <marquee direction = "up" scrollamount="2">
                    <?php foreach($membersDom as $k=>$DOM){?>
                    <!-- <p class=""> --> 
                    <!-- <p scope="row" class="text-center"></p> -->
                    <p class="text-white">
                      <?=$DOM['MemberName']?>
                    </p>
                    <!-- </p> -->
                    <?php }?>
                    </marquee>
                  </div>
                  <!-- <div class="item">
                       <p class="text-white">Reference site about Lorem Ipsum, giving information on its origins. <span class="wedding_person_name">- Username</span></p>
                    </div>

                    <div class="item" style="">
                       <p class="text-white">Lorem ipsum is a placeholder text commonly used to demonstrate. <span class="wedding_person_name">- Username</span></p>
                    </div>             --> 
                </div>
                
                <!--<p class="text-white">John - Jeniffer</p>
					<p class="text-white">Brito - Marry</p>--> 
                
              </div>
              <i class="flaticon-charity-dove-of-peace bg-icon"></i> </div>
          </div>
          <div class="col-sm-12 col-md-4 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
            <div class="sm-height-auto bg-theme-colored-darker3">
              <div class="p-30">
                <h2 class="text-white mt-0 font-26 font-weight-500">Birthday Wishes</h2>
                <div class="birthday_wishes_scroller" data-dots="false" data-nav="false">
                  <div class="item" style="">
                    <marquee direction = "up" scrollamount="2">
                    <!-- <p class="text-white"> -->
                    <?php foreach($membersDob as $k=>$DOB){?>
                    <!-- <p class=""> --> 
                    <!-- <p scope="row" class="text-center"></p> -->
                    <p class="text-white">
                      <?=$DOB['MemberName']?>
                    </p>
                    <!-- </p> -->
                    <?php }?>
                    <!-- </p> -->
                    </marquee>
                  </div>
                  <!-- <div class="item">
                       <p class="text-white">Reference site about Lorem Ipsum, giving information on its origins. <span class="birthday_person_name">- Username</span></p>
                    </div>

                    <div class="item" style="">
                       <p class="text-white">Lorem ipsum is a placeholder text commonly used to demonstrate. <span class="birthday_person_name">- Username</span></p>
                    </div>             --> 
                </div>
              </div>
              <i class="flaticon-charity-person-inside-a-heart bg-icon"></i> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Section: Causes -->
    
      <?php
        // API config 
        $API_Key    = 'AIzaSyDko08qDywCI-BGuNHRG10b9X-Nv0_mgqo'; 
        $Channel_ID = 'UCiGwVw3dP8rqB_QN-Vs8GwA'; 
        $Max_Results = 10; 

    
    
        // Get videos from channel by YouTube Data API 
        $apiData = @file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$Channel_ID.'&maxResults='.$Max_Results.'&key='.$API_Key.'');  
    
        if($apiData){ 
            $videoList = json_decode($apiData); 
        }else{ 
            $apiError = 'Invalid API key or channel ID.'; 
        }
      ?>  
    
    
  <section class="bg-lighter">
  <div class="container">
  <div class="section-title">
    <div class="row">
      <div class="col-md-7">
        <h1 class="mt-0 font-28 text-black">Our Videos <span class="font-30 text-theme-colored">.</span></h1>
        <div class="icon"> <i class="fa fa-hospital-o"></i> </div>
        <div class="owl-carousel-1col" data-dots="true" data-nav="true">
                 
            <?php 
                 
 if(!empty($videoList->items)){ 
    foreach($videoList->items as $item){ 
        // Embed video 
        if(isset($item->id->videoId)){ 
            echo ' 
            <div class="item-video" style="">
                <iframe width="100%" height="350" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe> 
                <div style="text-align: center; font-weight: bold; color: #000; font-size: 18px;">'. $item->snippet->title .'</div> 
            </div>'; 
        } 
    } 
}else{ 
    echo '<div class="item" style="height:300px; display:flex; align-items:center; justify-content:center;">
                   <div class="error" style="text-align: center; font-weight: bold; color: #000; font-size: 24px;">'.$apiError.'</div>
                </div>'; 
}     
            ?>
                 
                 
               <?php /*?> <div class="item" style="">
                   <iframe width="100%" height="350" src="https://www.youtube.com/embed/-lm53YwTKyA" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="item">
                   <iframe width="100%" height="350" src="https://www.youtube.com/embed/RQulLhwi5Dw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                      <div class="item" style="">
                   <iframe width="100%" height="350" src="https://www.youtube.com/embed/Q2MwFWyxRAY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="item">
                   <iframe width="100%" height="350" src="https://www.youtube.com/embed/HleJXdeZSGc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

               <div class="item">
                   <iframe width="100%" height="350" src="https://www.youtube.com/embed/8ZJVUPQ89Mk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div><?php */?>
              </div>
        <a href="https://www.youtube.com/csistmarkschurchselaiyurchennai" target="_blank" class="btn-lg btn btn-colored btn-flat btn-theme-colored youtube_btn"><i class="fa fa-youtube-play"></i>Service Live on Youtube</a> </div>
      <div class="col-md-5">
        <h1 class="mt-0 font-28 text-black">Latest News / Events <span class="font-30 text-theme-colored">.</span></h1>
        <div class="icon"> <i class="fa fa-hospital-o"></i> </div>
        <div class="bxslider-upcoming-events bx-nav-top" data-minslides="3">
          <?php foreach($events as $event){?>
          <div class="event media mb-10 no-bg no-border">
            <div class="event-date media-left text-center flip bg-lighter p-20">
              <?php if ($event['Type'] == 'Event') { ?>
              <ul>
                <li class="font-30 text-theme-colored font-weight-600">
                  <?php
                  $d = strtotime( $event[ 'Date' ] );
                  echo date( "d", $d )
                  ?>
                </li>
                <li class="font-22 text-uppercase">
                  <?=  date("F", $d)?>
                </li>
              </ul>
              <?php }?>
            </div>
            <div class="media-body pl-20">
              <div class="event-content pull-left flip">
                <h4 class="event-title media-heading font-raleway font-weight-700"><a href="<?=$event['Link']?>" target="_blank">
                  <?=$event['Name']?>
                  </a></h4>
                <?=$event['Description']?>
                <!-- <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                     
                      <p class="mt-5"><a href=""><span class="text-gray-darkgray"><i class="fa fa-2x fa-youtube-square mr-5"></i></span></a>
						<a href=""><span class="text-gray-darkgray"><i class="fa fa-2x fa-facebook-square mr-5"></i></span></a>
						  <a href=""><span class="text-gray-darkgray"><i class="fa fa-2x fa-twitter-square mr-5"></i></span></a>
						
						
						</p> --> 
              </div>
            </div>
          </div>
          <?php }?>
          <!-- <div class="event media mb-10 no-bg no-border">
                  <div class="event-date media-left text-center flip bg-lighter p-20">
                    <ul>
                      <li class="font-30 text-theme-colored font-weight-600">28</li>
                      <li class="font-22 text-uppercase">April</li>
                    </ul>
                  </div>
                  <div class="media-body pl-20">
                    <div class="event-content pull-left flip">
                      <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#">COVID CONTRIBUTION</a></h4>
                      
                     
                      <p class="mt-5">In the Current Lock Down Situation, if you are willing to contribute towards helping poor and needy of our church Members, then you can give your funds to Pastor and transfer funds to CSI St Marks church, Ac Number 3958000100010661 IFSC Code PUNB0395800.

</p>
                    </div>
                  </div>
                </div>
                <div class="event media mb-10 no-bg no-border">
                  <div class="event-date media-left text-center flip bg-lighter p-20">
                    <ul>
                      <li class="font-30 text-theme-colored font-weight-600">28</li>
                      <li class="font-22 text-uppercase">Feb</li>
                    </ul>
                  </div>
                  <div class="media-body pl-20">
                    <div class="event-content pull-left flip">
                      <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#">Gear up for giving</a></h4>
                      <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                      <span class="text-gray-darkgray"><i class="fa fa-map-marker mr-5"></i> 25 Newyork City</span>
                      <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commod</p>
                    </div>
                  </div>
                </div>
                <div class="event media mb-10 no-bg no-border">
                  <div class="event-date media-left text-center flip bg-lighter p-20">
                    <ul>
                      <li class="font-30 text-theme-colored font-weight-600">28</li>
                      <li class="font-22 text-uppercase">Feb</li>
                    </ul>
                  </div>
                  <div class="media-body pl-20">
                    <div class="event-content pull-left flip">
                      <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#">Gear up for giving</a></h4>
                      <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                      <span class="text-gray-darkgray"><i class="fa fa-map-marker mr-5"></i> 25 Newyork City</span>
                      <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commod</p>
                    </div>
                  </div>
                </div>
              </div>  --> 
          
        </div>
      </div>
    </div>
    <div class="section-content"> </div>
  </div>
  </section>
  
  <!-- Section: Our Mission & Upcoming Events -->
  <?php /*?>
<section id="event">
  <div class="container">
    <div class="section-content">
      <div class="row">
        <div class="col-md-7">
          <h2 class="mt-0 line-bottom"><span class="font-weight-300">History of
            </span> CSI</h2>
          <img src="<?php echo base_url(); ?>/frontend/images/about-img.jpg" class="mb-10">
          <p>The Church of South India is the result of the union of churches of varying traditions Anglican, Methodist, Congregational, Presbyterian, and Reformed. It was inaugurated in September 1947, after protracted negotiation among the churches concerned. Organized into 22 dioceses, each under the spiritual supervision of a bishop, the church as a whole is governed by a synod, which elects a moderator (presiding bishop) every 2 years. Episcopacy is thus combined with Synodical government, and the church explicitly recognizes that Episcopal, Presbyterian, and congregational elements are all necessary for the church’s life. The Scriptures are the ultimate standard of faith and practice. The historic creeds are accepted as interpreting the biblical faith, and the sacraments of baptism and the Lord’s Supper are recognized as of binding obligation.</p>


          <!--	<h3 class="mt-0 line-bottom"><span class="font-weight-300">PRESBYTER’S 

 </span> DESK</h3>
              <p>Its my great delight to dedicate our church website on this New year 2016.I greet you all in the name of our Lord and Saviour Jesus Christ. He has led us through the year 2015.He will continue to go before us in this new year 2016.I wish you all a blessed and fruitful new year.I invite all the members of our church to constructively use this website for productive and fruitful purposes. I congratulate Mr.J.Miestalin, and Dr.Mrs.J. Dafni Rose who devoted their time and talent to update and design a suitable domain for our church. I dedicate this website in the name of Father,Son and Holy Spirit for the sacred and sincere use of our church members. I do believe that this website will provide us with opportunity to understand each other better to pray for each other needs and to strengthen our fellowship and unity in the coming years.

</p>-->



        </div>
        <div class="col-md-5">
          <h2 class="mt-0 line-bottom"><span class="font-weight-300">Latest News /</span> Events</h2>
          <div class="bxslider-upcoming-events bx-nav-top" data-minslides="3">
            <div class="event media mb-10 no-bg no-border">
              <div class="event-date media-left text-center flip bg-lighter p-20">
                <ul>
                  <li class="font-30 text-theme-colored font-weight-600">13</li>
                  <li class="font-22 text-uppercase">June</li>
                </ul>
              </div>
              <div class="media-body pl-20">
                <div class="event-content pull-left flip">
                  <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#">SUNDAY SERVICE WORSHIP @ 9 AM</a></h4>
                  <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>

                  <p class="mt-5"><a href=""><span class="text-gray-darkgray"><i class="fa fa-2x fa-youtube-square mr-5"></i></span></a>
                    <a href=""><span class="text-gray-darkgray"><i class="fa fa-2x fa-facebook-square mr-5"></i></span></a>
                    <a href=""><span class="text-gray-darkgray"><i class="fa fa-2x fa-twitter-square mr-5"></i></span></a>


                  </p>
                </div>
              </div>
            </div>
            <div class="event media mb-10 no-bg no-border">
              <div class="event-date media-left text-center flip bg-lighter p-20">
                <ul>
                  <li class="font-30 text-theme-colored font-weight-600">28</li>
                  <li class="font-22 text-uppercase">April</li>
                </ul>
              </div>
              <div class="media-body pl-20">
                <div class="event-content pull-left flip">
                  <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#">COVID CONTRIBUTION</a></h4>


                  <p class="mt-5">In the Current Lock Down Situation, if you are willing to contribute towards helping poor and needy of our church Members, then you can give your funds to Pastor and transfer funds to CSI St Marks church, Ac Number 3958000100010661 IFSC Code PUNB0395800.

                  </p>
                </div>
              </div>
            </div>
            <div class="event media mb-10 no-bg no-border">
              <div class="event-date media-left text-center flip bg-lighter p-20">
                <ul>
                  <li class="font-30 text-theme-colored font-weight-600">28</li>
                  <li class="font-22 text-uppercase">Feb</li>
                </ul>
              </div>
              <div class="media-body pl-20">
                <div class="event-content pull-left flip">
                  <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#">Gear up for giving</a></h4>
                  <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                  <span class="text-gray-darkgray"><i class="fa fa-map-marker mr-5"></i> 25 Newyork City</span>
                  <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commod</p>
                </div>
              </div>
            </div>
            <div class="event media mb-10 no-bg no-border">
              <div class="event-date media-left text-center flip bg-lighter p-20">
                <ul>
                  <li class="font-30 text-theme-colored font-weight-600">28</li>
                  <li class="font-22 text-uppercase">Feb</li>
                </ul>
              </div>
              <div class="media-body pl-20">
                <div class="event-content pull-left flip">
                  <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#">Gear up for giving</a></h4>
                  <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                  <span class="text-gray-darkgray"><i class="fa fa-map-marker mr-5"></i> 25 Newyork City</span>
                  <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commod</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <?php */?>
  
  <!-- <section>
      <div class="container pb-0">
        <div class="section-title">
          <div class="row">
            <div class="col-md-6">
              <h5 class="font-weight-300 m-0">What we can do?</h5>
              <h2 class="mt-0 text-uppercase font-28">Our <span class="text-theme-colored font-weight-400">Gallery</span> <span class="font-30 text-theme-colored">.</span></h2>
              <div class="icon">
                <i class="fa fa-hospital-o"></i>
              </div>
             
            </div>
            
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12"> --> 
  <!-- Portfolio Gallery Grid --> 
  <!-- <div id="grid" class="gallery-isotope grid-3 gutter clearfix" style="position: relative; height: 853.312px;"> --> 
  <!-- Portfolio Item Start --> 
  <!-- <div class="gallery-item photography" style="position: absolute; left: 0px; top: 0px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url(); ?>/frontend/images/g-2.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-2.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-2.jpg">View more</a>
                  </div>
                </div> --> 
  <!-- Portfolio Item End --> 
  
  <!-- Portfolio Item Start --> 
  <!-- <div class="gallery-item photography" style="position: absolute; left: 0px; top: 0px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url(); ?>/frontend/images/g-1.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-1.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-1.jpg">View more</a>
                  </div>
                </div> --> 
  <!-- Portfolio Item End --> 
  
  <!-- Portfolio Item Start --> 
  <!-- <div class="gallery-item photography" style="position: absolute; left: 0px; top: 0px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url(); ?>/frontend/images/g-3.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-3.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-3.jpg">View more</a>
                  </div>
                </div> --> 
  <!-- Portfolio Item End --> 
  
  <!-- Portfolio Item Start --> 
  <!-- <div class="gallery-item photography" style="position: absolute; left: 0px; top: 0px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url(); ?>/frontend/images/g-4.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-4.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-4.jpg">View more</a>
                  </div>
                </div> --> 
  <!-- Portfolio Item End --> 
  
  <!-- Portfolio Item Start --> 
  <!-- <div class="gallery-item photography" style="position: absolute; left: 0px; top: 0px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url(); ?>/frontend/images/g-5.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-5.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-5.jpg">View more</a>
                  </div>
                </div> --> 
  <!-- Portfolio Item End --> 
  
  <!-- Portfolio Item Start --> 
  <!-- <div class="gallery-item photography" style="position: absolute; left: 0px; top: 0px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url(); ?>/frontend/images/g-6.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-6.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-6.jpg">View more</a>
                  </div>
                </div> --> 
  <!-- Portfolio Item End --> 
  
  <!-- </div> --> 
  <!-- End Portfolio Gallery Grid --> 
  <!-- </div>
          </div>
        </div>
      </div>
	
    </section> --> 
  
  <!-- <section class="divider parallax layer-overlay overlay-dark-8" data-bg-img="images/bg/bg3.jpg" style="background-image: url(&quot;images/bg/bg3.jpg&quot;); background-position: 50% 100px;">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="call-to-action">
            <div class="col-md-6">
              <h2 class="text-white font-opensans font-30">Subscribe Now</h2>
              <p class="text-white font-opensans font-24">for latest news and updates</p>
            </div>
            <div class="col-md-6 mt-30"> 
              <form id="mailchimp-subscription-form-footer" class="newsletter-form" novalidate="true">
              <div class="input-group">
                <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer" style="height: 45px;">
                <span class="input-group-btn">
                  <button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14" type="submit" style="height: 45px;">Subscribe</button>
                </span>
              </div>
            </form>
            </div>
          </div>
        </div>

      </div>
    </section> --> 
  
  <!-- Section: -->
  <section class="bg-white">
    <div class="container">
      <div class="section-content">
        <div class="row">
          <div class="col-md-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="text-left">
              <h2 class="mt-0 line-bottom"><span class="font-weight-300">History of </span> CSI</h2>
              <!--<img src="<?php echo base_url(); ?>/frontend/images/about-img.jpg" class="mb-10">-->
              <p>The Church of South India is the result of the union of churches of varying traditions Anglican, Methodist, Congregational, Presbyterian, and Reformed. It was inaugurated in September 1947, after protracted negotiation among the churches concerned. Organized into 22 dioceses, each under the spiritual supervision of a bishop, the church as a whole is governed by a synod, which elects a moderator (presiding bishop) every 2 years. Episcopacy is thus combined with Synodical government, and the church explicitly recognizes that Episcopal, Presbyterian, and congregational elements are all necessary for the church’s life. The Scriptures are the ultimate standard of faith and practice. The historic creeds are accepted as interpreting the biblical faith, and the sacraments of baptism and the Lord’s Supper are recognized as of binding obligation.</p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="owl-carousel-1col owl-dots-bottom-right" data-dots="true">
              <div class="item">
                <div class="row-fluid">
                  <div class="col-md-4"> <img src="<?php echo base_url(); ?>/frontend/images/s-1.png" alt=""> </div>
                  <div class="col-md-8">
                    <h4 class="mt-0 mb-0 text-black-666">WORSHIP</h4>
                    <h1 class="line-bottom mt-0">Sunday Workship</h1>
                    <ul>
                      <li>Evening – 6.30 PM – Tamil Worship </li>
                      <li>Evening – 5.30 PM – Tamil Worship at Thirumalai Nagar </li>
                      <li>Morning – 7.00 AM – English Worship </li>
                      <li>Morning – 9.00 AM – Tamil Worship</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row-fluid">
                  <div class="col-md-4"> <img src="<?php echo base_url(); ?>/frontend/images/s-2.png" alt=""> </div>
                  <div class="col-md-8">
                    <h4 class="mt-0 mb-0 text-black-666">WORSHIP</h4>
                    <h1 class="line-bottom mt-0">Holy Eucharist</h1>
                    <ul>
                      <li>1st Day of Every Month – 6.30 AM </li>
                      <li>1st and 3rd Sunday – Morning Worship </li>
                      <li>2nd Sunday – Evening Worship</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row-fluid">
                  <div class="col-md-4"> <img src="<?php echo base_url(); ?>/frontend/images/s-3.png" alt=""> </div>
                  <div class="col-md-8">
                    <h4 class="mt-0 mb-0 text-black-666">WORSHIP</h4>
                    <h1 class="line-bottom mt-0">Fellowship</h1>
                    <ul>
                      <li>Fellowships Group Meetings – Every Tuesday – 7.00 PM </li>
                      <li>Youth Fellowship – Sunday – 10.45 AM </li>
                      <li>Men’s Fellowship – 2nd Saturday – 7.30 PM </li>
                      <li>Women’s Fellowship – 2nd and 4th Saturday – 05.00 PM </li>
                      <li>Elder’s Fellowship – 1st Wednesday of every month – 05.00 PM Sunday School – Sunday – 09:45 AM </li>
                      <li>Young Couples Fellowship – 2nd Sunday – 11.00 AM</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Section: Gallery -->
  <section id="gallery">
    <div class="container">
      <div class="section-content">
        <div class="row">
          <div class="col-md-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h2 class="mt-0 line-bottom"><span class="font-weight-300">Fellowships </span> </h2>
            <div class="event media mb-20 no-bg no-border">
              <div class="event-date media-left  bg-theme-colored p-10"> <img src="<?php echo base_url(); ?>/frontend/images/women.png"> </div>
              <div class="media-body pl-20">
                <div class="event-content pull-left flip">
                  <h4 class="event-title media-heading font-raleway font-weight-700"><a href="<?php echo base_url('fellowships')?>#womenfellow">WOMEN'S FELLOWSHIP</a></h4>
                  <p class="mt-5">The women fellowship of our church meet regularly on the 2nd Saturday evening and 4th Saturday evening. Outreach ministry, fasting and prayer, retreats, sick visit, home prayers for youngone getting wedded </p>
                </div>
              </div>
            </div>
            <div class="event media mb-20 no-bg no-border">
              <div class="event-date media-left  bg-theme-colored p-10"> <img src="<?php echo base_url(); ?>/frontend/images/sunday.png"> </div>
              <div class="media-body pl-20">
                <div class="event-content pull-left flip">
                  <h4 class="event-title media-heading font-raleway font-weight-700"><a href="<?php echo base_url('fellowships')?>#kidsfellow">KIDS FELLOWSHIP</a></h4>
                  <p class="mt-5">We have 2 Sunday schools one during the English service at 7.am and the other during the Tamil service at 8:45 AM. Around 200 children attend the Sunday school. We follow the syllabus designed by the Christian </p>
                </div>
              </div>
            </div>
            <div class="event media mb-20 no-bg no-border">
              <div class="event-date media-left  bg-theme-colored p-10"> <img src="<?php echo base_url(); ?>/frontend/images/sunday.png"> </div>
              <div class="media-body pl-20">
                <div class="event-content pull-left flip">
                  <h4 class="event-title media-heading font-raleway font-weight-700"><a href="<?php echo base_url('fellowships')?>#elderfellow">ELDER FELLOWSHIP</a></h4>
                  <p class="mt-5">We have 2 Sunday schools one during the English service at 7.am and the other during the Tamil service at 8:45 AM. Around 200 children attend the Sunday school. We follow the syllabus designed by the Christian </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mt-50 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="event media mb-20 no-bg no-border">
              <div class="event-date media-left  bg-theme-colored p-10"> <img src="<?php echo base_url(); ?>/frontend/images/youth.png"> </div>
              <div class="media-body pl-20">
                <div class="event-content pull-left flip">
                  <h4 class="event-title media-heading font-raleway font-weight-700"><a href="<?php echo base_url('fellowships')?>#youthfellow">YOUTH FELLOWSHIP</a></h4>
                  <p class="mt-5">Our church youth fellowship meet every Sunday, soon after the Tamil worship service. About 40 youth, both male and female attend the fellowship. Hospital visit, outreach ministry, Bible studies, competitions </p>
                </div>
              </div>
            </div>
            <div class="event media mb-20 no-bg no-border">
              <div class="event-date media-left  bg-theme-colored p-10"> <img src="<?php echo base_url(); ?>/frontend/images/men.png"> </div>
              <div class="media-body pl-20">
                <div class="event-content pull-left flip">
                  <h4 class="event-title media-heading font-raleway font-weight-700"><a href="<?php echo base_url('fellowships')?>#menfellow">MEN'S FELLOWSHIP</a></h4>
                  <p class="mt-5">The Men’s fellowship of our church meet regularly on the 2nd Saturday evening . Outreach ministry, fasting and prayer, retreats, sick visit, home prayers for youngone getting wedded are some of the significant ministries </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-lighter">
    <div class="container pb-0">
      <div class="section-title">
        <div class="row">
          <div class="col-md-6">
            <h5 class="font-weight-300 m-0">What we can do?</h5>
            <h2 class="mt-0 text-uppercase font-28">Our <span class="text-theme-colored font-weight-400">Gallery</span> <span class="font-30 text-theme-colored">.</span></h2>
            <div class="icon"> <i class="fa fa-hospital-o"></i> </div>
          </div>
        </div>
      </div>
      <div class="section-content ">
        <div class="gallery-isotope">
          <div class="owl-carousel-3col" data-dots="true" data-nav="true"> 
            
            <!-- Portfolio Gallery Grid --> 
            <!-- <div id="grid" class="gallery-isotope grid-3 gutter clearfix" style="position: relative; height: 853.312px;"> --> 
            <!-- Portfolio Item Start -->
            <div class="gallery-item photography">
              <div class="thumb"> <img class="img-fullwidth" src="<?php echo base_url(); ?>/frontend/images/g-2.jpg" alt="project">
                <div class="overlay-shade"></div>
                <div class="text-holder text-center">
                  <h5 class="title">Gallery Title Here</h5>
                </div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-2.jpg"><i class="fa fa-plus"></i></a> <a href="#"><i class="fa fa-link"></i></a> </div>
                  </div>
                </div>
                <a class="hover-link" data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-2.jpg">View more</a> </div>
            </div>
            <!-- Portfolio Item End --> 
            
            <!-- Portfolio Item Start -->
            <div class="gallery-item photography" style="position: absolute; left: 0px; top: 0px;">
              <div class="thumb"> <img class="img-fullwidth" src="<?php echo base_url(); ?>/frontend/images/g-1.jpg" alt="project">
                <div class="overlay-shade"></div>
                <div class="text-holder text-center">
                  <h5 class="title">Gallery Title Here</h5>
                </div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-1.jpg"><i class="fa fa-plus"></i></a> <a href="#"><i class="fa fa-link"></i></a> </div>
                  </div>
                </div>
                <a class="hover-link" data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-1.jpg">View more</a> </div>
            </div>
            <!-- Portfolio Item End --> 
            
            <!-- Portfolio Item Start -->
            <div class="gallery-item photography" style="position: absolute; left: 0px; top: 0px;">
              <div class="thumb"> <img class="img-fullwidth" src="<?php echo base_url(); ?>/frontend/images/g-3.jpg" alt="project">
                <div class="overlay-shade"></div>
                <div class="text-holder text-center">
                  <h5 class="title">Gallery Title Here</h5>
                </div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-3.jpg"><i class="fa fa-plus"></i></a> <a href="#"><i class="fa fa-link"></i></a> </div>
                  </div>
                </div>
                <a class="hover-link" data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-3.jpg">View more</a> </div>
            </div>
            <!-- Portfolio Item End --> 
            
            <!-- Portfolio Item Start -->
            <div class="gallery-item photography" style="position: absolute; left: 0px; top: 0px;">
              <div class="thumb"> <img class="img-fullwidth" src="<?php echo base_url(); ?>/frontend/images/g-4.jpg" alt="project">
                <div class="overlay-shade"></div>
                <div class="text-holder text-center">
                  <h5 class="title">Gallery Title Here</h5>
                </div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-4.jpg"><i class="fa fa-plus"></i></a> <a href="#"><i class="fa fa-link"></i></a> </div>
                  </div>
                </div>
                <a class="hover-link" data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-4.jpg">View more</a> </div>
            </div>
            <!-- Portfolio Item End --> 
            
            <!-- Portfolio Item Start -->
            <div class="gallery-item photography" style="position: absolute; left: 0px; top: 0px;">
              <div class="thumb"> <img class="img-fullwidth" src="<?php echo base_url(); ?>/frontend/images/g-5.jpg" alt="project">
                <div class="overlay-shade"></div>
                <div class="text-holder text-center">
                  <h5 class="title">Gallery Title Here</h5>
                </div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-5.jpg"><i class="fa fa-plus"></i></a> <a href="#"><i class="fa fa-link"></i></a> </div>
                  </div>
                </div>
                <a class="hover-link" data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-5.jpg">View more</a> </div>
            </div>
            <!-- Portfolio Item End --> 
            
            <!-- Portfolio Item Start -->
            <div class="gallery-item photography" style="position: absolute; left: 0px; top: 0px;">
              <div class="thumb"> <img class="img-fullwidth" src="<?php echo base_url(); ?>/frontend/images/g-6.jpg" alt="project">
                <div class="overlay-shade"></div>
                <div class="text-holder text-center">
                  <h5 class="title">Gallery Title Here</h5>
                </div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-6.jpg"><i class="fa fa-plus"></i></a> <a href="#"><i class="fa fa-link"></i></a> </div>
                  </div>
                </div>
                <a class="hover-link" data-lightbox="image" href="<?php echo base_url(); ?>/frontend/images/g-6.jpg">View more</a> </div>
            </div>
            <!-- Portfolio Item End --> 
            
          </div>
        </div>
        <!-- End Portfolio Gallery Grid --> 
        
      </div>
    </div>
    </div>
  </section>
  
  <!-- Section: blog --> 
  
</div>
<!-- end main-content --> 
