<div class="row pt-4">
    <div class="col-12 col-md-12 pb-2">
        <div class="row">
            <div class="col-12 col-md-8">
            </div>
            <div class="col-12 col-md-4">
                <form method="post" action="index.php?page=search-product" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" name="search" required placeholder="search">
                    <button type="submit" class="btn btn-secondary"><span
                                class="btn btn-secondary"></span>Search </button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 ">
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>Code</th>
                <th>Name</th>
                <th>Producer</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Quantity</th>
                <th colspan="2"><a href="index.php?page=add-product" class="btn btn-success">ADD product</a></th>
            </tr>
            </thead>
            <?php if (empty($products)): ?>
                <tr>
                    <th colspan="10">
                        No Data
                    </th>
                </tr>
            <?php else: ?>
                <?php foreach ($products as $key => $item): ?>
                    <tr>
                        <td><?php echo ++$key ?></td>
                        <td><?php echo $item['productCode'] ?></td>
                        <td><?php echo $item['productName'] ?></td>
                        <td><?php echo $item['producer'] ?></td>
                        <td><?php echo $item['description'] ?></td>
                        <td><?php echo $item['price'] ?></td>
                        <td><img style="width: 90px" src="src/view/images/<?php echo $item['image'] ?>"></td>
                        <td><?php echo $item['quantityInStock'] ?></td>
                        <td><a href="index.php?page=delete-product&id=<?php echo $item['productCode'] ?>"
                               class="btn btn-danger">Delete</a></td>
                        <td><a href="index.php?page=update-product&id=<?php echo $item['productCode'] ?>"
                               class="btn btn-primary">Update</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>
</div>




