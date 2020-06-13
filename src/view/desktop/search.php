
<body>
<table class="table table-hover">
    <thead class="thead-dark">
    <tr>
        <th>Mã sản phẩm </th>
        <th>Tên sản phẩm </th>
        <th>Nhà cung cấp </th>
        <th>Mô tả</th>
        <th>Giá </th>
        <th>Hình ảnh</th>

    </tr>
    </thead>
    <?php foreach ($products as $key => $item): ?>
        <tr>
            <td><?php echo $item['productCode'] ?></td>
            <td><?php echo $item['productName'] ?></td>
            <td><?php echo $item['producer'] ?></td>
            <td><?php echo $item['description'] ?></td>
            <td><?php echo $item['price'] ?></td>
            <td><img style="width: 90px" src="src/view/images/<?php echo $item['image'] ?>"></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>

