
<body>
<table class="table table-hover table-bordered">
    <tr>
        <th>Mã sản phẩm </th>
        <td><?php echo $product['productCode']?></td>
    </tr>
    <tr>
        <th>Tên sản phẩm  </th>
        <td><?php echo $product['productName']?></td>
    </tr>
    <tr>
        <th>Nhà cung cấp   </th>
        <td><?php echo $product['producer']?></td>
    </tr>
    <tr>
        <th>Mô tả sản phẩm  </th>
        <td><?php echo $product['description']?></td>
    </tr>
    <tr>
        <th>Giá sản phẩm   </th>
        <td><?php echo $product['price']?></td>
    </tr>
    <tr >
        <td colspan="2" rowspan="2"><img class="img-fluid img-thumbnail" src="src/view/images/<?php echo $product['image'] ?>"></td>
    </tr>
</table>
</body>
</html>
