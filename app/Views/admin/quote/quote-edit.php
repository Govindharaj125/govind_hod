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
                <h3>Manage Quote
                    <a href="<?= base_url('admin/quote') ?>" class="btn btn-primary float-right">Back</a>
                </h3>
            </div>
            <div class="card-body p-4">
                <form action="<?= base_url('admin/quote/update/'.$QuotTab['id']) ?>" method="POST">
                
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Quote</label>
                            <textarea name="Quote" rows="4"  class="form-control" placeholder="Enter the Quote"><?= $QuotTab['Quote'] ?></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update Quote</button>
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