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
<table class="table table-hover">
    <thead class="thead-dark">
    <tr>
        <th>productCode</th>
        <th>productName</th>
        <th>producr</th>
        <th>description</th>
        <th>price</th>
        <th>image</th>
        <th>quantityInStock</th>
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
