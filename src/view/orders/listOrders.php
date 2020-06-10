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
<table border="1">
    <tr>
        <th>orderNumber</th>
        <th>orderDate</th>
        <th>shippedDate</th>
        <th>requiredDate</th>
        <th>status</th>
        <th>comment</th>
    </tr>
    <?php foreach ($orders as $key => $item): ?>
        <tr>
            <td><?php echo $item['orderNumber'] ?></td>
            <td><?php echo $item['orderDate'] ?></td>
            <td><?php echo $item['shippedDate'] ?></td>
            <td><?php echo $item['requiredDate'] ?></td>
            <td><?php echo $item['status'] ?></td>
            <td><?php echo $item['comment'] ?></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <th colspan="6"><?php if (empty($orders)) echo "No Data" ?></th>
    </tr>
</table>
</body>
</html>