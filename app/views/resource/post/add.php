<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['title'])) {
        $terror = 'title is required';
    }
    if (empty($_POST['image'])) {
        $ierror = 'image is required';
    }
    if (empty($_POST['content'])) {
        $cerror = 'content is required';
    }
}
?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Add Post</strong>
        </div>
        <div class="card-body card-block">
            <form action="/post/add" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Title</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="title" placeholder="Title post..." class="form-control">
                        <small class="form-text text-danger"><? (isset($terror)) && print($terror) ?></small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Image</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="image" class="form-control-file">
                        <small class="form-text text-danger"><? (isset($ierror)) && print($ierror) ?></small>
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
                        <label class=" form-control-label">Content</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea  name="content" id="summernote" rows="9" placeholder="Content..." class="form-control MySummerNote"></textarea>
                        <small class="form-text text-danger"><? (isset($cerror)) && print($cerror) ?></small>
                    </div>
                </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <a href="/post/list/" type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Back
            </a>
        </div>
        </form>
    </div>
</div>


 
