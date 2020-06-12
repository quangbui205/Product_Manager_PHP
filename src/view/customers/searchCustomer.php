
<body>
<table class="table table-hover">
    <thead class="thead-dark">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
    </tr>
    </thead>
    <?php foreach ($customer as $key => $item): ?>
        <tr>
            <td><?php echo $item['id'] ?></td>
            <td><?php echo $item['name'] ?></td>
            <td><?php echo $item['phone'] ?></td>
            <td><?php echo $item['email'] ?></td>
            <td><?php echo $item['address'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>

