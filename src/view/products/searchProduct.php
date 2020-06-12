
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
        <th>Số lượng tồn kho </th>
    </tr>
    </thead>
    <?php foreach ($products as $key => $item): ?>
        <tr>
            <td><?php echo $item['productCode'] ?></td>
            <td><?php echo $item['productName'] ?></td>
            <td><?php echo $item['producer'] ?></td>
            <td><?php echo $item['description'] ?></td>
            <td><?php echo $item['price'] ?></td>
            <td><?php echo $item['image'] ?></td>
            <td><?php echo $item['quantityInStock'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
