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
        <th>STT</th>
        <th>name</th>
        <th>phone</th>
        <th>email</th>
        <th>address</th>
    </tr>
    <?php foreach ($customers as $key => $item): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $item['name'] ?></td>
            <td><?php echo $item['phone'] ?></td>
            <td><?php echo $item['email'] ?></td>
            <td><?php echo $item['address'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
