<style>
.btn-primary {
    background: #03a9f3;
    color: #fff;
    border: none;
}
.btn-primary:hover {
    background: #03a9f2;
    color: #fff;
}
.alertify-notifier .ajs-message {
    /* background: rgba(255, 255, 255, 0.95); */
    color: #fff;
    text-align: center;
    border: solid 1px #fff;
    border-radius: 2px;
}
</style>
<div id="page-wrapper">
  <div class="container-fluid mt-2">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3>Edit Manage Card Members <a href="<?= base_url('admin/card-members') ?>" class="btn btn-primary float-right">Back</a> </h3>
          </div>
          <div class="card-body p-4">
            <form action="<?= base_url('admin/card-members/update/'.$cardMem['id']) ?>" method="POST">
              <div class="row">
                <div class="col-sm-12">
                  <h4 class="mb-3"><strong>Edit Member Card Details</strong></h4>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
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
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="Name" value="<?= $cardMem['Name'] ?>"  class="form-control" placeholder="Enter the Name">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Full_Name</label>
                    <input type="text" name="Full_Name" value="<?= $cardMem['Full_Name'] ?>"  class="form-control" placeholder="Enter the Full_Name">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>New_Family_Card_No</label>
                    <input type="text" name="New_Family_Card_No" value="<?= $cardMem['New_Family_Card_No'] ?>"  class="form-control" placeholder="Enter the New_Family_Card_No">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Date_of_membership</label>
                    <input type="date" name="Date_of_membership" value="<?= $cardMem['Date_of_membership'] ?>"  class="form-control" placeholder="Enter the Date_of_membership">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Card_No</label>
                    <input type="text" name="Card_No" value="<?= $cardMem['Card_No'] ?>"  class="form-control" placeholder="Enter the Card_No">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Card_Suffix</label>
                    <input type="text" name="Card_Suffix" value="<?= $cardMem['Card_Suffix'] ?>"  class="form-control" placeholder="Enter the Card_Suffix">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>CardNumber</label>
                    <input type="text" name="CardNumber" value="<?= $cardMem['CardNumber'] ?>"  class="form-control" placeholder="Enter the CardNumber">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <h4 class="mb-3"><strong>Edit Member General Details</strong></h4>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Relationship</label>
                    <input type="text" name="Relationship" value="<?= $cardMem['Relationship'] ?>"  class="form-control" placeholder="Enter the Relationship">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Status</label>
                    <select type="text" name="Status" value="<?= $cardMem['Status'] ?>" class="form-control">
                      <option value="Active"
                                    <?php if($cardMem['Status'] == 'Active')
                                        { echo "selected"; }
                                    ?>
                                    >Active</option>
                      <option value="Inactive"
                                    <?php if($cardMem['Status'] == 'Inactive')
                                        { echo "selected"; }
                                    ?>
                                    >Inactive</option>
                      <option value="No subscription"
                                    <?php if($cardMem['Status'] == 'No subscription')
                                        { echo "selected"; }
                                    ?>
                                    >No subscription</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Address_1_2</label>
                    <input type="text" name="Address_1_2" value="<?= $cardMem['Address_1_2'] ?>"  class="form-control" placeholder="Enter the Address_1_2">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Address1</label>
                    <input type="text" name="Address1" value="<?= $cardMem['Address1'] ?>"  class="form-control" placeholder="Enter the Address1">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Address2</label>
                    <input type="text" name="Address2" value="<?= $cardMem['Address2'] ?>"  class="form-control" placeholder="Enter the Address2">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Address_3</label>
                    <input type="text" name="Address_3" value="<?= $cardMem['Address_3'] ?>"  class="form-control" placeholder="Enter the Address_3">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Address_4</label>
                    <input type="text" name="Address_4" value="<?= $cardMem['Address_4'] ?>"  class="form-control" placeholder="Enter the Address_4">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Pincode</label>
                    <input type="text" name="Pincode" value="<?= $cardMem['Pincode'] ?>"  class="form-control" placeholder="Enter the Pincode">
                  </div>
                </div>
                <div class="col-md-3">
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
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Marital_Status</label>
                    <select type="text" name="Marital_Status" value="<?= $cardMem['Marital_Status'] ?>" class="form-control">
                      <option value="Single"
                                    <?php if($cardMem['Marital_Status'] == 'Single')
                                        { echo "selected"; }
                                    ?>>Single</option>
                      <option value="Married"
                                    <?php if($cardMem['Marital_Status'] == 'Married')
                                        { echo "selected"; }
                                    ?>>Married</option>
                      <option value="Widowed"
                                    <?php if($cardMem['Marital_Status'] == 'Widowed')
                                        { echo "selected"; }
                                    ?>>Widowed</option>
                      <option value="Separated"
                                    <?php if($cardMem['Marital_Status'] == 'Separated')
                                        { echo "selected"; }
                                    ?>>Separated</option>
                      <option value="Divorced"
                                    <?php if($cardMem['Marital_Status'] == 'Divorced')
                                        { echo "selected"; }
                                    ?>>Divorced</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Relationship1</label>
                    <input type="text" name="Relationship1" value="<?= $cardMem['Relationship1'] ?>"  class="form-control" placeholder="Enter the Relationship1">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>DOB</label>
                    <input type="date" name="DOB" value="<?= $cardMem['DOB'] ?>"  class="form-control" placeholder="Enter the DOB">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Age</label>
                    <input type="text" name="Age" value="<?= $cardMem['Age'] ?>"  class="form-control" placeholder="Enter the Age">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Agenumeric</label>
                    <input type="text" name="Agenumeric" value="<?= $cardMem['Agenumeric'] ?>"  class="form-control" placeholder="Enter the Agenumeric">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>60_years</label>
                    <input type="text" name="60_years" value="<?= $cardMem['60_years'] ?>" class="form-control" placeholder="Enter the 60_years">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>DOM</label>
                    <input type="date" name="DOM" value="<?= $cardMem['DOM'] ?>" class="form-control" placeholder="Enter the DOM">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>MarriageDt</label>
                    <input type="text" name="MarriageDt" value="<?= $cardMem['MarriageDt'] ?>" class="form-control" placeholder="Enter the MarriageDt">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>MarriageMon</label>
                    <input type="text" name="MarriageMon" value="<?= $cardMem['MarriageMon'] ?>" class="form-control" placeholder="Enter the MarriageMon">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>DOD</label>
                    <input type="date" name="DOD" value="<?= $cardMem['DOD'] ?>" class="form-control" placeholder="Enter the DOD">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <h4 class="mb-3"><strong>Edit Member Professional Details</strong></h4>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Carol_Round_Area</label>
                    <input type="text" name="Carol_Round_Area" value="<?= $cardMem['Carol_Round_Area'] ?>" class="form-control" placeholder="Enter the Carol_Round_Area">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Qualification</label>
                    <input type="text" name="Qualification" value="<?= $cardMem['Qualification'] ?>" class="form-control" placeholder="Enter the Qualification">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Profession</label>
                    <input type="text" name="Profession" value="<?= $cardMem['Profession'] ?>" class="form-control" placeholder="Enter the Profession">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Company</label>
                    <input type="text" name="Company" value="<?= $cardMem['Company'] ?>" class="form-control" placeholder="Enter the Company">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Monthly_Income</label>
                    <input type="text" name="Monthly_Income" value="<?= $cardMem['Monthly_Income'] ?>" class="form-control" placeholder="Enter the Monthly_Income">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="Email" value="<?= $cardMem['Email'] ?>" class="form-control" placeholder="Enter the Email">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Mobile_1</label>
                    <input type="text" name="Mobile_1" value="<?= $cardMem['Mobile_1'] ?>" class="form-control" placeholder="Enter the Mobile_1">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Mobile_2</label>
                    <input type="text" name="Mobile_2" value="<?= $cardMem['Mobile_2'] ?>" class="form-control" placeholder="Enter the Mobile_2">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Landline</label>
                    <input type="text" name="Landline" value="<?= $cardMem['Landline'] ?>" class="form-control" placeholder="Enter the Landline">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>User_Password</label>
                    <input type="password" name="User_Password" value="<?= $cardMem['User_Password'] ?>" class="form-control" placeholder="Enter the User_Password">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update Details</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="card mt-4">
      <div class="card-header">
        <h3>Card Members</h3>
      </div>
      <div class="card-body p-4">
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
                  <?php foreach($cardNoMembers as $k=>$cardMember){?>
                  <tr>
                    <th scope="row" class="text-center"><?=$cardMember['id']?></th>
                    <td><?=$cardMember['Relationship']?></td>
                    <td><?=$cardMember['Prefix']?></td>
                    <td><?=$cardMember['Name']?></td>
                    <td><?=$cardMember['Gender']?></td>
                    <td><?=$cardMember['DOB']?></td>
                    <td><?=$cardMember['DOM']?></td>
                    <td><?=$cardMember['Mobile_1']?></td>
                    <td><?=$cardMember['Profession']?></td>
                    <td><?=$cardMember['Email']?></td>
                    <td><!-- <a href="#" class="btn btn-dark btn-transparent btn-theme-colored btn-flat btn-sm"><i class="fa fa-pencil"></i> Edit</a> --> 
                      <a href="<?= base_url('admin/card-members/edit/'.$cardMember['id']) ?>" class="btn btn-primary btn-sm" >Edit</a> 
                      <!-- <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a> --></td>
                  </tr>
                  <?php }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
