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
        <th>orderNumber</th>
        <th>orderDate</th>
        <th>shippedDate</th>
        <th>requiredDate</th>
        <th>status</th>
        <th>comment</th>
        <th>idCustomer</th>
        <th colspan="2"><a href="index.php?page=add-order" class="btn btn-success">ADD order</a></th>
    </tr>
    </thead>
    <?php foreach ($orders as $key => $item): ?>
        <tr>
            <td><?php echo $item['orderNumber'] ?></td>
            <td><?php echo $item['orderDate'] ?></td>
            <td><?php echo $item['shippedDate'] ?></td>
            <td><?php echo $item['requiredDate'] ?></td>
            <td><?php echo $item['status'] ?></td>
            <td><?php echo $item['comment'] ?></td>
            <td><?php echo $item['id'] ?> </td>
        </tr>
    <?php endforeach; ?>

</table>
<?php if (empty($orders)) echo "No Data" ?>
</body>
</html>