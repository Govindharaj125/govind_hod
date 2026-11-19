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
                        <h3>Add Events
                            <a href="<?= base_url('admin/events') ?>" class="btn btn-primary float-right">Back</a>
                        </h3>
                    </div>
                    <div class="card-body p-4">
                    <form action="<?= base_url('admin/events-store') ?>" method="POST">

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
                                    <textarea name="Description" class="form-control" rows="2" placeholder="Enter the Description"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Type</label>
                                    <select type="text" name="Type" class="form-control" placeholder="Type">
                                            <option>Event</option>
                                            <option>News</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Link</label>
                                    <input type="text" name="Link" class="form-control" placeholder="Enter the Link">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" name="Date" class="form-control" placeholder="Enter the Date">
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