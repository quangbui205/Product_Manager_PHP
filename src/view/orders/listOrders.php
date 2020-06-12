<body>


<div class="row pt-4">
    <div class="col-12 col-md-12 pb-2">
        <div class="row">
            <div class="col-12 col-md-8">
            </div>
            <div class="col-12 col-md-4">
                <form method="post" action="index.php?page=search-customer" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" name="search" required
                           >
                    <button type="submit" class="btn btn-secondary"><span
                                class="btn btn-secondary"></span>Search
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 ">

        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th>OrderNumber</th>
                <th>OrderDate</th>
                <th>ShippedDate</th>
                <th>RequiredDate</th>
                <th>Status</th>
                <th>Comment</th>
                <th>IdCustomer</th>
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
    </div>
</div>


</body>

