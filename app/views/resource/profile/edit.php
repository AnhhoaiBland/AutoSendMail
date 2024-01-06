<?php
while ($row = mysqli_fetch_array($data['profile'])) {
?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <div style="position: relative; display: inline-block;">
                                <img src="<?= ASSETS ?>/upload/<?= $row['avatar'] ?>" alt="Admin" class="rounded-circle" width="150">
                                <input type="file" name="avatar" accept="image/*" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                                <span style="border-radius: 4px;position: absolute; top: 0; right: 0; background-color: rgba(0, 0, 0, 0.7); color: #fff; padding: 4px 10px; font-size: 14px;"><i class="fas fa-pencil-alt"></i></span>
                            </div>



                            <div class="mt-3">
                                <h4><?= $row['name'] ?></h4>
                                <p class="text-secondary mb-1"><?= $row['email'] ?></p>
                                <p class="text-muted font-size-sm"><?= $row['address'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" value="<?= $row['name'] ?>" name="name"><i class="fas fa-pencil-alt"></i>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" value="<?= $row['phone'] ?>" name="phone"><i class="fas fa-pencil-alt"></i>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" value="<?= $row['address'] ?>" name="address"><i class="fas fa-pencil-alt"></i>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-outline-success"><i class="fas fa-save"></i>
                                </button>
                                <a href="/profile/" class="btn btn-outline-danger"><i class="fas fa-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php
}
