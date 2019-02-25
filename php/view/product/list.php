<h2>Danh sách sản phẩm</h2>
<a href="./productIndex.php?page=add">Thêm mới</a>
<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name product</th>
        <th>Price product</th>
        <th>Descibe</th>
        <th>Producer</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key => $product): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $product->Nameproduct ?></td>
        <td><?php echo $product->Priceproduct   ?></td>
        <td><?php echo $product->Desproduct ?></td>
        <td><?php echo $product->Spproducer ?></td>
        <td> <a href="./productIndex.php?page=delete&id=<?php echo $product->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
        <td> <a href="./productIndex.php?page=edit&id=<?php echo $product->id; ?>" class="btn btn-sm">Update</a></td>
    <?php endforeach; ?>
    </tbody>
</table>