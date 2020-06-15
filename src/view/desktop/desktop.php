<body>

<div class="row pt-4">
    <div class="col-12 col-md-12 pb-2">
        <div class="row">
            <div class="col-12 col-md-8">
            </div>
            <div class="col-12 col-md-4">
                <form method="post" action="index.php?page=search"  class="form-inline my-2 my-lg-0" >
                    <input class="form-control mr-sm-2" type="search" name="search" required placeholder="search">
                    <button type="submit" class="btn btn-secondary"><span
                                class="btn btn-secondary"></span>Search </button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 ">
        <table class="table table-hover">
            <tr>
                <th>Tên sản phẩm</th>
                <th>Giá </th>
                <th>Hình ảnh mô tả </th>
            </tr>
            <?php foreach ($products as $key => $item): ?>
                <tr>
                    <td><a href="index.php?page=show-product&id=<?php echo $item['productCode'] ?>">
                            <?php echo $item['productName'] ?>
                        </a></td>
                    <td><?php echo $item['price'] ?></td>
                    <td><a href="index.php?page=show-product&id=<?php echo $item['productCode'] ?>">
                            <img style="width: 90px" src="src/view/images/<?php echo $item['image'] ?>">
                        </a></td>

                </tr>
            <?php endforeach; ?>

        </table>
        <?php if (empty($products)) echo "No Data" ?>
    </div>
</div>
</body>