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
    <input type="text" name="search" size="60" placeholder="search with Name" >
    <button type="submit" class="btn btn-secondary" >Search</button>
</form>
<table class="table table-hover" >
    <?php foreach ($products as $key => $item): ?>
        <tr>
            <td><?php echo $item['productCode'] ?></td>
            <td><?php echo $item['productName'] ?></td>
            <td><?php echo $item['price'] ?></td>
            <td><?php echo $item['image'] ?></td>

        </tr>
    <?php endforeach; ?>

</table>
<?php if (empty($products)) echo "No Data" ?>


</body>
</html>

