<div class="row pt-4">
    <div class="col-12 col-md-12 pb-2">
        <div class="row">
            <div class="col-12 col-md-8">
            </div>
            <div class="col-12 col-md-4">
                <form method="post" action="index.php?page=search-customer" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" name="search" required placeholder="search">
                    <button type="submit" class="btn btn-secondary"><span
                                class="btn btn-secondary"></span>Search</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 ">

        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>ID</th>
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
                    <td><?php echo $item['id'] ?></td>
                    <td><?php echo $item['name'] ?></td>
                    <td><?php echo $item['phone'] ?></td>
                    <td><?php echo $item['email'] ?></td>
                    <td><?php echo $item['address'] ?></td>
                    <td><a href="index.php?page=delete-customer&id=<?php echo $item['id'] ?>" class="btn btn-danger">Delete</a></td>
                    <td><a href="index.php?page=update-customer&id=<?php echo $item['id'] ?>" class="btn btn-primary">Update</a></td>
                </tr>
            <?php endforeach; ?>

        </table>
        <?php if (empty($customers)) echo "No Data" ?>
    </div>
</div>

<body>
</body>

