<?php
include "./inc/Header.php";
include_once "./inc/SideMenu.php";
include_once "../inc/env.php";
$select = "SELECT * FROM addfeatures";
$query = mysqli_query($conn, $select);
$fetch = mysqli_fetch_all($query, 1);
// print_r($fetch);
// exit();
$select1 = "SELECT * FROM featuresheader";
$query1 = mysqli_query($conn, $select1);
$fetch1 = mysqli_fetch_all($query1, 1);
?>
<!--  header section start-->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Features Details Show</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    Share
                </button>
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    Export
                </button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar" class="align-text-bottom"></span>
                This week
            </button>
        </div>
    </div>
    <!--  header section end  -->

    <!--  table section start-->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Features image</th>
                <th scope="col">Features Heading</th>
                <th scope="col">Features Sub Heading </th>
                <th scope="col">Features List</th>
                <th scope="col">Features icon </th>
                <th scope="col">Active</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($fetch as $item => $data) {
            ?>
                <tr>
                    <td><?= ++$item ?></td>
                    <td> 
                        <img style="width: 60px;" src="<?= $path . 'uploads/' . $data['img'] ?>" alt="">
                    </td>
                    <td>
                        <?php
                        if (strlen($data['subHeading']) > 80) {
                            echo substr($data['subHeading'], 0, 50) . "...";
                        } else {
                            echo $data['subHeading'];
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if (strlen($data['subHeading1']) > 80) {
                            echo substr($data['subHeading1'], 0, 50) . "...";
                        } else {
                            echo $data['subHeading1'];
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if (strlen($data['list']) > 80) {
                            echo substr($data['list'], 0, 50) . "...";
                        } else {
                            echo $data['list'];
                        }
                        ?>
                    </td>
                    <td>
                        <?= $data['icon'] ?>
                    </td>
                    <td>
                        <a href="./controller/FeaturesActive.php?id=<?= $data['id'] ?>&active=<?= $data['active'] ?>" class="btn btn-sm">
                            <?php
                            if ($data['active'] == 0) {
                            ?>
                                <span class="btn btn-danger btn-sm">
                                    Deactive
                                </span>
                            <?php
                            } else {
                            ?>
                                <span class="btn btn-success btn-sm">
                                    Active
                                </span>
                            <?php
                            }

                            ?>
                        </a>
                    </td>
                    <td>
                        <a href="./featuresEdit.php?id=<?= $data['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td>
                        <a href="./controller/featuresDelete.php?id=<?= $data['id'] ?>&img=<?= $data['img'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <!-- table section end -->
    <!--  2nd table  section start-->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Features Heading</th>
                <th scope="col">Features Title </th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($fetch1 as $item => $data) {
            ?>
                <tr>
                    <td><?= ++$item ?></td>
                    <td>
                        <?php
                        if (strlen($data['heading']) > 80) {
                            echo substr($data['heading'], 0, 50) . "...";
                        } else {
                            echo $data['heading'];
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if (strlen($data['details']) > 80) {
                            echo substr($data['details'], 0, 50) . "...";
                        } else {
                            echo $data['details'];
                        }
                        ?>
                    </td>
                    <td>
                        <a href="./FeaturesHeaderEdit.php?id=<?= $data['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td>
                        <a href="./controller/featuresHeaderDel.php?id=<?= $data['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <!--  2nd table  section end  -->
    <?php
    require_once "./inc/footer.php";
    ?>