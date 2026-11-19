<style>
.form-control[disabled],
.form-control[readonly],fieldset[disabled]
.form-control {
    background-color: #fff;
    opacity: 1;
}
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
              <h3 class="title text-white">Welcome back, <?=$memName?></h3>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- Start main-content -->




  <section>
    <div class="container">
      <div class="section-content">
		  <div class="row">
			  <div class="col-lg-12 mb-40 pt-15 bg-gray-gainsboro">
			  <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="form_name">Card No</small></label>
                      <input readonly value="<?=$cardNumber?>" id="form_name" name="form_name" type="text" placeholder="" required="" class="form-control" aria-required="true">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="form_email">Mobile Number  </label>
                      <input readonly value="<?=$mobile_1?>" id="form_email" name="form_email" class="form-control required email" type="email" placeholder="" aria-required="true">
                    </div>
                  </div>
				  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="address">Address</label>
                      <textarea readonly id="address" name="address" type="text" class="form-control" aria-required="true"><?=$address_1_2?></textarea>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="form_email">Profession </label>
                      <input readonly value="<?=$profession?>" id="form_email" name="form_email" class="form-control required email" type="email" placeholder="" aria-required="true">
                    </div>
                  </div>
                </div>
			  <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="form_name">Member Name</small></label>
                      <input readonly value="<?=$memName?>" id="form_name" name="form_name" type="text" placeholder="" required="" class="form-control" aria-required="true">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="form_email">Alternate Number  </label>
                      <input readonly value="<?=$mobile_2?>" id="form_email" name="form_email" class="form-control required email" type="email" placeholder="" aria-required="true">
                    </div>
                  </div>
				  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="form_name">Company</label>
                       <input readonly value="<?=$company?>" id="form_email" name="form_email" class="form-control required email" type="email" placeholder="" aria-required="true">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="form_email">DOB</label>
                      <input readonly value="<?=$dob?>" id="form_email" name="form_email" class="form-control required email" type="email" placeholder="" aria-required="true">
                    </div>
                  </div>
                </div>
			  <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="form_name">Full Name</small></label>
                      <input readonly value="<?=$fullName?>" id="form_name" name="form_name" type="text" placeholder="" required="" class="form-control" aria-required="true">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="form_email">Landline  </label>
                      <input readonly value="<?=$landline?>" id="form_email" name="form_email" class="form-control required email" type="email" placeholder="" aria-required="true">
                    </div>
                  </div>
				  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="form_name">Email</label>
                       <input readonly value="<?=$email?>" id="form_email" name="form_email" class="form-control required email" type="email" placeholder="" aria-required="true">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="form_email">Mebership Date</label>
                      <input readonly value="<?=$membershipDate?>" id="form_email" name="form_email" class="form-control required email" type="email" placeholder="" aria-required="true">
                    </div>
                  </div>
                </div>
			  
	  </div>
		  
		  
		  </div>
		  
		  
        <div class="row">
			 
			<div class="col-lg-12">
				<div class="table-responsive">
            <table class="table table-bordered text-center">
              <thead>
                <tr>
                    <th class="text-center">id</th>
                    <th class="text-center">Relationship</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Gender</th>
                    <th class="text-center">Date of Birth</th>
                    <th class="text-center">Marriage Date</th>
                    <th class="text-center">Mobile Number</th>
                    <th class="text-center">Profession</th>
                    <th class="text-center">Email Address</th>
                    <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($members as $k=>$member){?>
                  <tr>
                    <th scope="row" class="text-center"><?=$member['id']?></th>
                    <td><?=$member['Relationship']?>  </td>
                    <td><?=$member['Suffix']?></td>
                    <td><?=$member['Name']?></td>
                    <td><?=$member['Gender']?>  </td>
                    <td><?=$member['DOB']?></td>
                    <td><?=$member['DOM']?></td>
                    <td><?=$member['MobNo']?></td>
                    <td><?=$member['Profession']?></td>
                    <td><?=$member['Email']?></td>
                    <td>
                        <!-- <a href="#" class="btn btn-dark btn-transparent btn-theme-colored btn-flat btn-sm"><i class="fa fa-pencil"></i> Edit</a> -->
                        <a href="<?= base_url('member-profile/edit/'.$member['CardNo']) ?>" class="btn btn-dark btn-transparent btn-theme-colored btn-flat btn-sm ajaxload-popup" ><i class="fa fa-pencil"></i> Edit</a>
                        <!-- <a href="#" class="btn btn-primary btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a> -->
                    </td> 
                  </tr>
                <?php }?>
              </tbody>
            </table>
					
				
          </div>
		  </div>
			
			
        </div>
      </div>
    </div>
  </section>




	  
  <!-- <section>
    <div class="container">
      <div class="section-content">
        <div class="row">
			 <h2 class="line-bottom">Card Number: <?=$cardNumber?></h2>
			<div class="col-lg-8">
				<div class="table-responsive">
            <table class="table table-bordered text-center">
              <thead>
                <tr>
                  <th class="text-center">S.No</th>
                  <th class="text-center">Full_Name</th>
                  <th class="text-center">Gender</th>
                  <th class="text-center">DOB</th>
                  <th class="text-center">DOM</th>
                  <th class="text-center">Relationship</th>
                  <th class="text-center">Mobile_1</th>
                  <th class="text-center">Email</th>
					        <th class="text-center">Status</th>  
                </tr>
              </thead>

              <tbody>
                <?php foreach($members as $k=>$member){?>
                  <tr class="<?php echo $k%2!=0?"active":''?>">
                    <th scope="row" class="text-center"><?=$k+1?></th>
                    <td><?=$member['MemberName']?>  </td>
                    <td><?=$member['Gender']?></td>
                    <td><?=$member['DOB']?></td>
                    <td><?=$member['DOM']?>  </td>
                    <td><?=$member['Relationship']?></td>
                    <td><?=$member['MobNo']?></td>
                    <td><?=$member['Email']?></td>
                    <td><?=$member['Status']?></td> 
                  </tr>
                <?php }?>
                
              </tbody>
            </table> -->
					
					<!-- <p><a class="btn btn-dark btn-transparent btn-theme-colored btn-flat btn-lg" href="#">Edit Info</a></p> -->
          <!-- </div>
		  </div> -->
			
			
			
			<!-- <div class="col-md-4">
             
              <div class="volunteer-address">
                <ul>
                  
                  <li>
                    <div class="bg-light media border-bottom p-15 mb-20">
                      <div class="media-left">
                        <i class="fa fa-map-marker text-theme-colored font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h3 class="mt-0 mb-0">Address:</h3>
                        <p><?=$address_1_2?>, <?=$address_2?>, <?=$address_4?>, <?=$pincode?></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="bg-light media border-bottom p-15">
                      <div class="media-left">
                        <i class="fa fa-phone text-theme-colored font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h3 class="mt-0 mb-0">Mobile:</h3>
                        <p><span>Phone:</span> <?=$mobile_1?></p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
        </div>
      </div> -->
    <!-- </div>
  </section> -->
  
  <!-- end main-content -->
