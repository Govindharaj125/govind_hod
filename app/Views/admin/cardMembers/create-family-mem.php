<style>
.btn-primary{
    background: #03a9f3;
    color: #fff;
    border: none;
}
.btn-primary:hover{
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
                <h3>Add Family Members
                    <a href="<?= base_url('admin/card-members/edit/'.$row['id']) ?>" class="btn btn-primary float-right">Back</a>
                </h3>
            </div>
            <div class="card-body p-4">
                <form action="<?= base_url('admin/card-members-list'.$cardNoMembers['Card_No']) ?>" method="POST">

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Prefix</label>
                            <select type="text" name="Prefix" class="form-control" placeholder="Prefix">
                                    <option>Miss.</option>
                                    <option>Mr.</option>
                                    <option>Mrs.</option>
                                    <option>Revd.</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="Name" class="form-control" placeholder="Enter the Name">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Full_Name</label>
                            <input type="text" name="Full_Name" class="form-control" placeholder="Enter the Full_Name">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>New_Family_Card_No</label>
                            <input type="text" name="New_Family_Card_No" class="form-control" placeholder="Enter the New_Family_Card_No">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Date_of_membership</label>
                            <input type="date" name="Date_of_membership" class="form-control" placeholder="Enter the Date_of_membership">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Card_No</label>
                            <input type="text" name="Card_No" value="<?= $cardNoMembers['Card_No'] ?>" class="form-control" placeholder="Enter the Card_No">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Card_Suffix</label>
                            <input type="text" name="Card_Suffix" class="form-control" placeholder="Enter the Card_Suffix">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>CardNumber</label>
                            <input type="text" name="CardNumber" class="form-control" placeholder="Enter the CardNumber">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Relationship</label>
                            <input type="text" name="Relationship" class="form-control" placeholder="Enter the Relationship">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Status</label>
                            <select type="text" name="Status" class="form-control">
                                    <option>Active</option>
                                    <option>Inactive</option>
                                    <option>No subscription</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Address_1_2</label>
                            <input type="text" name="Address_1_2" class="form-control" placeholder="Enter the Address_1_2">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Address1</label>
                            <input type="text" name="Address1" class="form-control" placeholder="Enter the Address1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Address2</label>
                            <input type="text" name="Address2" class="form-control" placeholder="Enter the Address2">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Address_3</label>
                            <input type="text" name="Address_3" class="form-control" placeholder="Enter the Address_3">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Address_4</label>
                            <input type="text" name="Address_4" class="form-control" placeholder="Enter the Address_4">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Pincode</label>
                            <input type="text" name="Pincode" class="form-control" placeholder="Enter the Pincode">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Gender</label>
                            <select type="text" name="Gender" class="form-control" placeholder="Male/Female">
                                    <option>Male</option>
                                    <option>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Marital_Status</label>
                            <select type="text" name="Marital_Status" class="form-control">
                                    <option>Single</option>
                                    <option>Married</option>
                                    <option>Widowed</option>
                                    <option>Separated</option>
                                    <option>Divorced</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Relationship1</label>
                            <input type="text" name="Relationship1" class="form-control" placeholder="Enter the Relationship1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>DOB</label>
                            <input type="date" name="DOB" class="form-control" placeholder="Enter the DOB">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Age</label>
                            <input type="text" name="Age" class="form-control" placeholder="Enter the Age">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Agenumeric</label>
                            <input type="text" name="Agenumeric" class="form-control" placeholder="Enter the Agenumeric">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>60_years</label>
                            <input type="text" name="60_years" class="form-control" placeholder="Enter the 60_years">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>DOM</label>
                            <input type="date" name="DOM" class="form-control" placeholder="Enter the DOM">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>MarriageDt</label>
                            <input type="text" name="MarriageDt" class="form-control" placeholder="Enter the MarriageDt">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>MarriageMon</label>
                            <input type="text" name="MarriageMon" class="form-control" placeholder="Enter the MarriageMon">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>DOD</label>
                            <input type="date" name="DOD" class="form-control" placeholder="Enter the DOD">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Carol_Round_Area</label>
                            <input type="text" name="Carol_Round_Area" class="form-control" placeholder="Enter the Carol_Round_Area">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Qualification</label>
                            <input type="text" name="Qualification" class="form-control" placeholder="Enter the Qualification">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Profession</label>
                            <input type="text" name="Profession" class="form-control" placeholder="Enter the Profession">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" name="Company" class="form-control" placeholder="Enter the Company">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Monthly_Income</label>
                            <input type="text" name="Monthly_Income" class="form-control" placeholder="Enter the Monthly_Income">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="Email" class="form-control" placeholder="Enter the Email">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Mobile_1</label>
                            <input type="text" name="Mobile_1" class="form-control" placeholder="Enter the Mobile_1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Mobile_2</label>
                            <input type="text" name="Mobile_2" class="form-control" placeholder="Enter the Mobile_2">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Landline</label>
                            <input type="text" name="Landline" class="form-control" placeholder="Enter the Landline">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>User_Password</label>
                            <input type="password" name="User_Password" class="form-control" placeholder="Enter the User_Password">
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Details</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
</div>