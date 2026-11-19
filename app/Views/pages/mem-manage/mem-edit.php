<section class="no-bg">
  <div class="container position-relative p-0 mt-90" style="max-width: 930px;">
    <h3 class="bg-theme-colored p-15 mt-0 mb-0 text-white">Edit Card Members</h3>
    <div class="section-content bg-white p-30">
      <div class="row">
        <div class="col-md-12">
          
          <!-- <div id="page-wrapper"> -->
            
            <div class="container mt-2">
                <!-- <div class="row"> -->

                <div class="col-md-12">
                    <div class="card" style="padding-bottom: 0px;">
                        <!-- <div class="card-header">
                            <h2 class="text-left">Edit Card Members
                                
                            </h2>
                        </div> -->
                        <div class="card-body p-4">
                            <form action="<?= base_url('member-profile/update/'.$cardMem['id']) ?>" method="POST">
                            
                            <div class="row">
                                <!-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Relationship</label>
                                        <input type="text" name="Relationship" value="<?= $cardMem['Relationship'] ?>"  class="form-control" placeholder="Enter the Relationship">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Prefix</label>
                                        <select type="text" name="Prefix" class="form-control" placeholder="Prefix">
                                                <option value="Miss."
                                                <?php if($cardMem['Prefix'] == 'Miss.')
                                                    { echo "selected"; }
                                                ?>
                                                >Miss.</option>
                                                <option value="Mr."
                                                <?php if($cardMem['Prefix'] == 'Mr.')
                                                    { echo "selected"; }
                                                ?>
                                                >Mr.</option>
                                                <option value="Mrs."
                                                <?php if($cardMem['Prefix'] == 'Mrs.')
                                                    { echo "selected"; }
                                                ?>
                                                >Mrs.</option>
                                                <option value="Revd."
                                                <?php if($cardMem['Prefix'] == 'Revd.')
                                                    { echo "selected"; }
                                                ?>
                                                >Revd.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="Name" value="<?= $cardMem['Name'] ?>"  class="form-control" placeholder="Enter the Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select type="text" name="Gender" class="form-control" value="<?= $cardMem['Gender'] ?>" placeholder="Male/Female">
                                                <option value="Male"
                                                <?php if($cardMem['Gender'] == 'Male')
                                                    { echo "selected"; }
                                                ?>
                                                >Male</option>
                                                <option value="Female"
                                                <?php if($cardMem['Gender'] == 'Female')
                                                    { echo "selected"; }
                                                ?>
                                                >Female</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="row ">

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" name="Mobile_1" value="<?= $cardMem['Mobile_1'] ?>" class="form-control" placeholder="Enter the Mobile_1">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="Address" value="<?= $cardMem['Address_1_2'] ?>" class="form-control" placeholder="Enter the Address_1_2">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Profession</label>
                                        <input type="text" name="Profession" value="<?= $cardMem['Profession'] ?>" class="form-control" placeholder="Enter the Profession">
                                    </div>
                                </div>
                                <!-- <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="float:left">Prefix</label>
                                        <select type="text" name="Prefix" class="form-control" placeholder="Prefix">
                                                <option value="Miss."
                                                <?php if($cardMem['Prefix'] == 'Miss.')
                                                    { echo "selected"; }
                                                ?>
                                                >Miss.</option>
                                                <option value="Mr."
                                                <?php if($cardMem['Prefix'] == 'Mr.')
                                                    { echo "selected"; }
                                                ?>
                                                >Mr.</option>
                                                <option value="Mrs."
                                                <?php if($cardMem['Prefix'] == 'Mrs.')
                                                    { echo "selected"; }
                                                ?>
                                                >Mrs.</option>
                                                <option value="Revd."
                                                <?php if($cardMem['Prefix'] == 'Revd.')
                                                    { echo "selected"; }
                                                ?>
                                                >Revd.</option>
                                        </select>
                                    </div>
                                </div> -->
                                
                                

                                </div>


                                <div class="row ">

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="float:left">Relationship</label>
                                        <input type="text" name="Relationship" value="<?= $cardMem['Relationship'] ?>"  class="form-control" placeholder="Enter the Relationship">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Martial Status</label>
                                        <input type="text" name="Marital_Status" value="<?= $cardMem['Marital_Status'] ?>" class="form-control" placeholder="Enter the Marital_Status">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="float:left">Gender</label>
                                        <select type="text" name="Gender" class="form-control" value="<?= $cardMem['Gender'] ?>" placeholder="Male/Female">
                                                <option value="Male"
                                                <?php if($cardMem['Gender'] == 'Male')
                                                    { echo "selected"; }
                                                ?>
                                                >Male</option>
                                                <option value="Female"
                                                <?php if($cardMem['Gender'] == 'Female')
                                                    { echo "selected"; }
                                                ?>
                                                >Female</option>
                                        </select>
                                    </div>
                                </div>

                                </div>

                                <div class="row ">
                                
                                
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="float:left">Date of Birth</label>
                                        <input type="date" name="DOB" value="<?= $cardMem['DOB'] ?>"  class="form-control" placeholder="Enter the DOB">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="float:left">Marriage Date</label>
                                        <input type="date" name="DOM" value="<?= $cardMem['DOM'] ?>" class="form-control" placeholder="Enter the DOM">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="Email" value="<?= $cardMem['Email'] ?>" class="form-control" placeholder="Enter the Email">
                                    </div>
                                </div>
                                
                                </div>

                                <div class="row ">
                                <div class="col-md-3">
                                    <div class="form-group">
                                    <!-- <a href="<?= base_url('member-profile') ?>" class="btn pr-5 btn-colored btn-flat btn-theme-colored" style="float: left">Back</a> -->
                                        <button type="submit" class="btn btn-colored btn-flat btn-theme-colored" style="float: left">Update</button>
                                    </div>
                                </div>
                                </div>


                            </div>

                            <!-- <div class="row ">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-colored btn-flat btn-theme-colored" style="float: left">Update</button>
                                    </div>
                                </div>
                            </div> -->

                            </form>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
            
            <!-- </div> -->
          
        </div>
      </div>
    </div>
    <button title="Close (Esc)" type="button" class="mfp-close font-36">×</button>
  </div>
</section>