
<body>
<h3>Cập nhật sản phẩm </h3>
<form method="post">
    <table class="table col-12 col-md-6">
        <tr>
            <td>Mã sản phẩm </td>
            <td><input class="col-12" type="text" disabled name="productCode" value="<?php echo $product['productCode'] ?>"></td>
        </tr>
        <tr>
            <td>Tên sản phẩm </td>
            <td><input class="col-12" type="text" name="productName" value="<?php echo $product['productName'] ?>"></td>
        </tr>
        <tr>
            <td>Nhà cung cấp </td>
            <td><input class="col-12" type="text" name="producer" value="<?php echo $product['producer'] ?>"></td>
        </tr>
        <tr>
            <td>Mô tả </td>
            <td><input class="col-12" type="text" name="description" value="<?php echo $product['description'] ?>"></td>
        </tr>
        <tr>
            <td>Giá </td>
            <td><input class="col-12" type="text" name="price" value="<?php echo $product['price'] ?>"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input class="col-12" type="text" name="image" value="<?php echo $product['image'] ?>"></td>
        </tr>
        <tr>
            <td>Số lượng tồn kho </td>
            <td><input class="col-12" type="text" name="quantityInStock" value="<?php echo $product['quantityInStock'] ?>"></td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-success" type="submit">update</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>

