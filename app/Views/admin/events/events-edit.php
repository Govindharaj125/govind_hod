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
                <h3>Manage Events
                    <a href="<?= base_url('admin/events') ?>" class="btn btn-primary float-right">Back</a>
                </h3>
            </div>
            <div class="card-body p-4">
                <form action="<?= base_url('admin/events/update/'.$EvenTab['id']) ?>" method="POST">
                
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="Name" value="<?= $EvenTab['Name'] ?>"  class="form-control" placeholder="Enter the Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="Description" value=""  class="form-control" rows="2" placeholder="Enter the Description"><?= $EvenTab['Description'] ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Type</label>
                            <select type="text" name="Type" class="form-control" value="<?= $EvenTab['Type'] ?>" placeholder="Type">
                                    <option value="Event"
                                    <?php if($EvenTab['Type'] == 'Event')
                                        { echo "selected"; }
                                    ?>
                                    >Event</option>
                                    <option value="News"
                                    <?php if($EvenTab['Type'] == 'News')
                                        { echo "selected"; }
                                    ?>
                                    >News</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" name="Link" value="<?= $EvenTab['Link'] ?>"  class="form-control" placeholder="Enter the Link">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" name="Date" value="<?= $EvenTab['Date'] ?>"  class="form-control" placeholder="Enter the Date">
                        </div>
                    </div>

                    <div class="col-md-3">
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
</div>
</div>