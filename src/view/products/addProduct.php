<body>
<form method="post" enctype="multipart/form-data">
    <table class="table table-hover col-12 col-md-6">
        <tr>
    <th>Mã sản phẩm :</th>
    <td><input type="text" name="productCode" required autofocus class="col-12"></td>
        </tr>
        <tr>
    <th>Tên sản phẩm :</th>
    <td><input type="text" name="productName" required autofocus class="col-12"></td>
        </tr>
        <tr>
    <th>Nhà cung cấp :</th>
    <td><input type="text" name="producer" required autofocus class="col-12"></td>
        </tr>
        <tr>
    <th>Mô tả :</th>
    <td><input type="text" name="description" required autofocus class="col-12"></td>
        </tr>
        <tr>
    <th>Giá :</th>
    <td><input type="text" name="price" required autofocus class="col-12"></td>
        </tr>
        <tr>
    <th>Hình ảnh:</th>
    <td><input type="file" name="image" required autofocus class="col-12"></td>
        </tr>
        <tr>
    <th>Số lượng tồn kho :</th>
    <td><input type="text" name="quantityInStock" required autofocus class="col-12"></td>
        </tr>
        <tr>
            <td colspan="2">
    <button type="submit" class="btn btn-success">ADD</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
