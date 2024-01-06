<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Edit Product</strong>
        </div>
        <div class="card-body card-block">
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <?php if (!empty($data['product'])) { ?>

                    <?php foreach ($data['product'] as $item) { ?>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="name" placeholder="Name product..." class="form-control" value="<?= $item['name'] ?>">
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
                                    <?php if (!empty($data['category'])) { ?>
                                        <?php foreach ($data['category'] as $category) { ?>
                                            <option <?= (isset($_GET['category_id']) && $_GET['category_id'] === $category['id']) ? 'selected' : '' ?> value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <?php
                        if (!empty($data['attribute']) && mysqli_num_rows($data['attribute']) != '') {
                            $loop = 1;
                            foreach ($data['attribute'] as $attribute) {
                        ?>
                                <div id="product_attr">
                                    <div id="attr_<?= $loop ?>">
                                        <div class="row form-group">
                                            <div class="col col-md-3"> <label for="ram-input" class="form-control-label">Variants</label> </div>
                                            <div class="col-12 col-md-2">
                                            <select name="color[]" id="select" class="form-control">
                                                    <?php
                                                    foreach ($data['color'] as $color) {
                                                    ?>
                                                        <option value="<?= $color['id'] ?>" <?= ($color['id'] == $attribute['color_id']) ? 'selected' : '' ?>><?= $color['name'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-2">
                                            <select name="ram[]" id="" class="form-control">
                                                <?php
                                                    foreach ($data['ram'] as $ram) {
                                                    ?>
                                                        <option value="<?= $ram['id'] ?>" <?= ($ram['id'] == $attribute['ram_id']) ? 'selected' : '' ?>><?= $ram['name'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-2 mb-2"> <input type="text" name="price[]" class="form-control" placeholder="Price" value="<?= $attribute['price'] ?>"> </div>
                                            <div class="col-12 col-md-1 mb-2"> <input type="text" name="qty[]" class="form-control" placeholder="Qty" value="<?= $attribute['qty'] ?>"></div>
                                            <?php
                                            if ($loop == 1) {
                                            ?>
                                                <div class="col-12 col-md-2"> <button class="btn btn-primary" onclick="add_product_attribute()" type="button">Add more</button> </div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="col-12 col-md-2"> <button class="btn btn-danger" onclick="remove_attr('<?= $loop ?>','<?= $attribute['id'] ?>')" type="button">Remove</button></div>
                                            <?php
                                            }
                                            ?>
                                            <input type="hidden" value="<?= $attribute['id'] ?>" name="attr_id[]">
                                        </div>
                                    </div>
                                </div>
                            <?php
                                $loop++;
                            }
                        } else {
                            ?>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="email-input" class=" form-control-label">Price</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="email-input" name="price" placeholder="Price product" class="form-control" value="<?= $item['price'] ?>">
                                    <small class="help-block form-text">Please enter your email</small>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="textarea-input" class=" form-control-label">Content</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea name="content" id="textarea-input" rows="9" placeholder="Content..." class="form-control"><?= $item['content'] ?></textarea>
                            </div>
                        </div>
                        <input type="hidden" value="<?= $item['image'] ?>" name="thumbnail">
                    <?php } ?>
                <?php } ?>
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