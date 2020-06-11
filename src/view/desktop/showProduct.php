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
</table>
</body>
</html>
