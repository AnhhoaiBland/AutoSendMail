<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Add Product</strong>
        </div>
        <div class="card-body card-block">
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="name" placeholder="Name product..." class="form-control">
                        <small class="form-text text-muted">This is a help text</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Image</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="image" class="form-control-file">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Select</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="category" id="select" class="form-control">
                            <?php if (!empty($data['category'])) : ?>
                                <?php foreach ($data['category'] as $item) : ?>
                                    <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                                <?php endforeach ?>
                            <?php endif ?>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        Option
                    </div>
                    <div class="col-12 col-md-9">
                        <button class="btn btn-outline-primary" id="buttonA" onclick="add_attr()" type="button">Variants</button>
                        <button class="btn btn-outline-primary" id="buttonB" onclick="one_attr()" type="button">Single Variant</button>
                    </div>
                </div>
                <div id="add_attr">
                   
                </div>
                <div id="one_attr">
                
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Content</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="content" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                    </div>
                </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <a href="/product/list/" type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Back
            </a>
        </div>
        </form>
    </div>
</div>