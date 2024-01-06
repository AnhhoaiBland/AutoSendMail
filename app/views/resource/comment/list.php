<div class="table-data__tool">
    <h3 class="title-5 m-b-35">Comment Table</h3>
</div>
<div class="table-responsive table-responsive-data2">
    <table class="table table-data2">
        <thead>
            <tr>
                <th>id</th>
                <th>User name</th>
                <th>Create_at</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['comment'] as $data) : ?>
                <tr>
                    <td><?= $data['id']; ?></td>
                    <td><?= $data['username'] ?></td>
                    <td><?= $data['cr'] ?></td>
                    <td>
                        <div class="table-data-feature">
                            <a href="/comment/detail/?comment_id=<?= $data['id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="detail">
                                <i class="zmdi zmdi-more"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>