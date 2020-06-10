<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Cập nhật sản phẩm </h3>
<form method="post">
    <table class="table col-12 col-md-6">
        <tr>
            <td>productCode</td>
            <td><input class="col-12" type="text" disabled name="productCode" value="<?php echo $product['productCode'] ?>"></td>
        </tr>
        <tr>
            <td>productName</td>
            <td><input class="col-12" type="text" name="productName" value="<?php echo $product['productName'] ?>"></td>
        </tr>
        <tr>
            <td>producer</td>
            <td><input class="col-12" type="text" name="producer" value="<?php echo $product['producer'] ?>"></td>
        </tr>
        <tr>
            <td>description</td>
            <td><input class="col-12" type="text" name="description" value="<?php echo $product['description'] ?>"></td>
        </tr>
        <tr>
            <td>price</td>
            <td><input class="col-12" type="text" name="price" value="<?php echo $product['price'] ?>"></td>
        </tr>
        <tr>
            <td>image</td>
            <td><input class="col-12" type="text" name="image" value="<?php echo $product['image'] ?>"></td>
        </tr>
        <tr>
            <td>quantityInStock</td>
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

