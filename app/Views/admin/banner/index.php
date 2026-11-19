<style>
.container-fluid {
    margin-left: 0px;
    margin-right: 0px;
}
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
    padding: 3px;
    box-sizing: border-box;
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
</style>
<div id="page-wrapper">
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Banner
                            <a href="<?= base_url('admin/banner-add') ?>" class="btn btn-primary float-right">Add Banner</a>
                        </h3>
                    </div>

                    <div class="container-fluid">
                        <!-- <div class="form-inline">
                            <div class="form-group m-2">
                            <label for="email">Search by: </label>
                            <select class="form-control" id="ddlSearch">
                                <option value="0">id</option>
                                <option value="1">Link</option>
                                <option value="2">Description</option>
                                <option value="3">Image</option>
                                <option value="4">Status</option>
                            </select>
                            </div>
                            <div class="form-group">
                            <label for="email">Search in: </label>
                            <input type="text" class="form-control" id="txtSearch">
                            </div>
                        </div> -->

                    <div class="card-body p-4">
                        <table id="example" class="display table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php if(is_array($banTab)): ?>
                            <?php foreach($banTab as $row): ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['Name'] ?></td>
                                    <td><?= $row['Description'] ?></td>
                                    <td><img src="<?= base_url().'/uploads/'.$row['image'] ?>" width="50px" height="50px"/></td>
                                    <td><?= $row['Status'] ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/banner/edit/'.$row['id']) ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="<?= base_url('admin/banner/delete/'.$row['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
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