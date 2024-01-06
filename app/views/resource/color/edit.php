<?php foreach($data['color'] as $data):?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Edit Color</strong>
        </div>
        <div class="card-body card-block">
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Color</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="name" placeholder="Name" class="form-control" value="<?= $data['name'] ?>">
                        <small class="form-text text-muted">This is a help text</small>
                    </div>
                </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <a href="/category/" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Back
            </a>
        </div>
        </form>
    </div>
</div>
<?php endforeach?>