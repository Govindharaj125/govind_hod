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
</style>
<div id="page-wrapper">
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Banner
                            <a href="<?= base_url('admin/banner') ?>" class="btn btn-primary float-right">Back</a>
                        </h3>
                    </div>
                    <div class="card-body p-4">
                    <form action="<?= base_url('admin/banner-store') ?>" method="POST" enctype="multipart/form-data">

                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="Name" class="form-control" placeholder="Enter the Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="Description" class="form-control" placeholder="Enter the Description">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select type="text" name="Status" class="form-control">
                                        <option>Active</option>
                                        <option>Inactive</option>
                                </select>
                            </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
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