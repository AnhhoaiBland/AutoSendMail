<div class="table-data__tool">
    <h3 class="title-5 m-b-35">Product Table</h3>
    <div class="table-data__tool-right">
        <a href="/product/add/" class="au-btn au-btn-icon au-btn--green au-btn--small">
            <i class="zmdi zmdi-plus"></i>add item</a>
    </div>
</div>
<div class="table-responsive table-responsive-data2">
    <table class="table table-data2">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>image</th>
                <th>Add by</th>
                <th>category</th>
                <th>created_at</th>
                <th class="text-center">Ation</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($data['product'])) { ?>
                <?php foreach ($data['product'] as $data) : ?>
                    <tr class="tr-shadow">
                        <td><?= $data['id'] ?></td>
                        <td>
                            <span class="block-email"><?= $data['name'] ?></span>
                        </td>
                        <td><img src="../../../../<?= $data['image'] ?>" alt="" width="80px" height="80px"></td>
                        <td><?= $data['user_name'] ?></td>
                        <td><?= $data['category_name'] ?></td>
                        <td><?= $data['created_at'] ?></td>

                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Send">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </button>
                                <a href="/product/edit?product_id=<?= $data['id'] ?>&category_id=<?= $data['category_id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                <a href="/product/delete?product_id=<?= $data['id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete?')">
                                    <i class="zmdi zmdi-delete"></i>
                                </a>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="More">
                                    <i class="zmdi zmdi-more"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                <?php endforeach ?>
            <?php } ?>
        </tbody>
    </table>
</div>