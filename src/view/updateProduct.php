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
<h3>cap nhat lai thong tin san pham</h3>
<form method="post" >
    <table>
        <tr>
            <td>productCode</td>
            <td><input type="text"  disabled name="productCode" value="<?php echo $product['productCode'] ?>"</td>
        </tr>
        <tr>
            <td>productName</td>
            <td><input type="text" name="productName" value="<?php echo $product['productName'] ?>"</td>
        </tr>
        <tr>
            <td>producer</td>
            <td><input type="text" name="producer" value="<?php echo $product['producer'] ?>"</td>
        </tr>
        <tr>
            <td>description</td>
            <td><input type="text" name="description" value="<?php echo $product['description'] ?>"</td>
        </tr>
        <tr>
            <td>price</td>
            <td><input type="text" name="price" value="<?php echo $product['price'] ?>"</td>
        </tr>
        <tr>
            <td>image</td>
            <td><input type="text" name="image" value="<?php echo $product['image'] ?>"</td>
        </tr>
        <tr>
            <td>quantityInStock</td>
            <td><input type="text" name="quantityInStock" value="<?php echo $product['quantityInStock'] ?>"</td>
        </tr>
        <tr>
            <td>
                <button type="submit">update</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>

