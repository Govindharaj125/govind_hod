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

.btn-danger{
    background: red;
    color: #fff;
    border: none;
}
.btn-primary:hover{
    background: #fb9678;
    color: #fff;
}
tfoot input {
    width: 100%;
    padding: 1px;
    box-sizing: border-box;
    font-weight: 100;
}
tfoot {
    display: table-row-group;
}
.alertify-notifier .ajs-message {
  /* background: rgba(255, 255, 255, 0.95); */
  color: #fff;
  text-align: center;
  border: solid 1px #fff;
  border-radius: 2px;
}
.dataTables_wrapper .dataTables_filter {
float: right;
text-align: right;
visibility: hidden;
}
div.dt-buttons {
    position: relative;
    float: right;
    bottom: 45px;
}
/* table{
  /* margin: 0 auto; */
  /* width: 100%; */
  /* clear: both; */
  /* border-collapse: collapse; */
  /* table-layout: fixed; // ***********add this */
  /* word-wrap:break-word; // ***********and this */
/* }  */
</style>
<div id="page-wrapper">
<div class="container-fluid mt-2">
    <div class="row">
    <div class="col-md-12">
   
        <div class="card">
            <div class="card-header">
                <h3>Card Members List
                    <a href="<?= base_url('admin/card-member-new') ?>" class="btn btn-primary float-right">Add Card Members</a>
                </h3>
            </div>

            <div class="container-fluid">
                <div class="form-inline">
                    <div class="form-group m-2">
                    <label for="email">Search by: </label>
                    <select class="form-control" id="ddlSearch">
                        <option value="0">id</option>
                        <option value="1">Full Name</option>
                        <option value="2">Gender</option>
                        <option value="3">DOB</option>
                        <option value="4">DOM</option>
                        <option value="5">Relationship</option>
                        <option value="6">Mobile</option>
                        <!--<option value="7">Email</option>-->
                        <option value="7">Card No</option>
                        <option value="8">Card Number</option>
                    </select>
                    </div>
                    <div class="form-group" id="stringBased">
                    <label for="email">Search in: </label>
                    <input type="text" class="form-control" id="txtSearch">
                    </div>
                    <div class="form-group" id="dateBased">
                    <!-- <div class="row"> -->
                    <div class="col-md-2 form-group m-2">
                        <label>From date:</label>
                        <input type="text" class="form-control" id="min" name="min" style="width: 450px;">
                    </div>
                    <div class="col-md-2 form-group m-2">
                        <label>To date:</label>
                        <input type="text" class="form-control" id="max" name="max" style="width: 450px;">
                    </div>
                    </div>

                    <!-- <table style="margin-left: 10px">
                        <tbody>
                            <tr>
                                <td>Starting date:</td>
                                <td><input type="text" id="min" name="min"></td>
                            </tr>
                            <tr>
                                <td>Ending date:</td>
                                <td><input type="text" id="max" name="max"></td>
                            </tr>
                        </tbody>
                    </table> -->

                </div>
            

            <div class="card-body p-0">
                
                <table id="example" class="display table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Full Name</th>
                            <th>Gender</th>
                            <th>DOB</th>
                            <th>DOM</th>
                            <th>Relationship</th>
                            <th>Mobile</th>
                            <!--<th>Email</th>-->
                            <th>Card No</th>
                            <th>Card Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <!-- <tfoot>
                        <tr>
                            <th>id</th>
                            <th>Full_Name</th>
                            <th>Gender</th>
                            <th>DOB</th>
                            <th>DOM</th>
                            <th>Relationship</th>
                            <th>Mobile_1</th>
                            <th>Email</th>
                            <th>Card_No</th>
                            <th>CardNumber</th>
                            <th>Action</th>
                            
                        </tr>
                    </tfoot> -->
                    
                    <tbody>
                    <?php if(is_array($cardMem)): ?>
                    <?php foreach($cardMem as $row): ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['Full_Name'] ?></td>
                            <td><?= $row['Gender'] ?></td>
                            <td><?= $row['DOB']?date('d/M/Y',strtotime($row['DOB'])):Null; ?></td>
                            <td><?= $row['DOM']?date('d/M/Y',strtotime($row['DOM'])):Null; ?></td>
                            <td><?= $row['Relationship'] ?></td>
                            <td><?= $row['Mobile_1'] ?></td>
                            <!--<td><?= $row['Email'] ?></td>-->
                            <td><?= $row['Card_No'] ?></td>
                            <td><?= $row['CardNumber'] ?></td>
                            
                            <td>
                                <a href="<?= base_url('admin/card-members/edit/'.$row['id']) ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="<?= base_url('admin/card-members/delete/'.$row['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                    
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>