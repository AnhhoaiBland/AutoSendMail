<div class="table-data__tool">
    <h3 class="title-5 m-b-35">Order Detail Table</h3>
    <div class="table-data__tool-right">
    </div>
</div>
<div class="table-responsive table-responsive-data2">
    <table class="table table-data2">
        <thead>
        <tr>
            <th>id</th>
            <th>Cart_code</th>
            <th>Product_name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>action</th>
        </thead>
        <tbody>
        <?php foreach ($data['order'] as $data) : ?>
            <tr>
                <td><?= $data['id']; ?></td>
                <td><?= $data['cart_code']; ?></td>
                <td><?= $data['product_name']; ?></td>
                <td>$<?= number_format($data['price']) ?></td>
                <td><?= $data['qty'] ?></td>
                <td>$<?= number_format(($data['price'] * $data['qty'])) ?></td>
                <td>
                    <div class="table-data-feature w-25"><a href="/order/" class="item"><i
                                    class="zmdi zmdi-rotate-left"></i></a></div>
                </td>

            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>