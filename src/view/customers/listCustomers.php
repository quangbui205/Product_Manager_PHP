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
        <th>STT</th>
        <th>name</th>
        <th>phone</th>
        <th>email</th>
        <th>address</th>
        <th colspan="2"><a href="index.php?page=add-customer" class="btn btn-success">ADD Customer</a></th>

    </tr>
    </thead>
    <?php foreach ($customers as $key => $item): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $item['name'] ?></td>
            <td><?php echo $item['phone'] ?></td>
            <td><?php echo $item['email'] ?></td>
            <td><?php echo $item['address'] ?></td>
            <td><a href="index.php?page=delete-customer&id=<?php echo $item['id'] ?>" class="btn btn-danger">Delete</a></td>
        </tr>
    <?php endforeach; ?>

</table>
<?php if (empty($customers)) echo "No Data" ?>
</body>
</html>
