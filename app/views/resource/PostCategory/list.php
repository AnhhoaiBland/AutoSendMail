<div class="row">
    <div class="col-md-12">

        <div class="table-data__tool">
            <h3 class="title-5 m-b-35">Category</h3>
            <div class="table-data__tool-right">
                <a href="/postscategory/add/" class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>add item</a>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>Add By</th>
                        <th>date added</th>
                        <th class="text-center">action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($data['post'])) : ?>
                        <?php foreach ($data['post'] as $data) : ?>
                            <tr class="tr-shadow">
                                <td><?= $data['id'] ?></td>
                                <td>
                                    <span class="block-email"><?= $data['name'] ?></span>
                                </td>
                                <td><?= $data['user_name'] ?></td>
                                <td><?= $data['cr'] ?></td>
                                <td>
                                    <div class="table-data-feature">

                                        <a href="/postscategory/edit?id=<?= $data['id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
                                        <a href="/postscategory/delete?delete_id=<?= $data['id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete?')">
                                            <i class="zmdi zmdi-delete"></i>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>
                        <?php endforeach ?>
                    <?php endif ?>
                </tbody>
            </table>
        </div>

    </div>
</div>