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
<form method="post" action="index.php?page=search-product" style="float: right">
    <input type="text" name="search" size="60px" placeholder="search with Name">
    <button type="submit" class="btn btn-secondary">Search</button>
</form>
<table class="table table-hover">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th>productCode</th>
        <th>productName</th>
        <th>producer</th>
        <th>description</th>
        <th>Price</th>
        <th>Image</th>
        <th>quantityInStock</th>
        <th colspan="2"><a href="index.php?page=add-product" class="btn btn-success">ADD product</a></th>
    </tr>
    </thead>
    <?php foreach ($products as $key => $item): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $item['productCode'] ?></td>
            <td><?php echo $item['productName'] ?></td>
            <td><?php echo $item['producer'] ?></td>
            <td><?php echo $item['description'] ?></td>
            <td><?php echo $item['price'] ?></td>
<!--            <td>--><?php //echo $item['image'] ?><!--</td>-->
            <td><img style="width: 90px" src="src/view/<?php echo $item['image'] ?>"></td>
            <td><?php echo $item['quantityInStock'] ?></td>
            <td><a href="index.php?page=delete-product&id=<?php echo $item['productCode'] ?>" class="btn btn-danger">Delete</a></td>
            <td><a href="index.php?page=update-product&id=<?php echo $item['productCode'] ?>" class="btn btn-primary">Update</a></td>
        </tr>
    <?php endforeach; ?>

</table>
<?php if (empty($products)) echo "No Data" ?>


</body>
</html>

