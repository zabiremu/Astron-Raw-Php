<?php
include "./inc/Header.php";
include_once "./inc/SideMenu.php";
include_once "../inc/env.php";
$select = "SELECT * FROM services";
$query = mysqli_query($conn, $select);
$fetch = mysqli_fetch_all($query, 1);
?>
<!--  header section start-->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Services Details Show</h1>
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
                <th scope="col">Banner tilte</th>
                <th scope="col">Banner Desc</th>
                <th scope="col">Action</th>
                <th scope="col">icon</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($fetch as $item => $data) {
            ?>
                <tr>
                    <td><?= ++$item ?></td>
                    <td><?= $data['title'] ?></td>
                    <td>
                        <?php
                        if (strlen($data['details']) > 80) {
                            echo substr($data['details'], 0, 50) . "...";
                        } else {
                            echo $data['details'];
                        }
                        ?>
                    </td>
                    <td><?=$data['time']?></td>
                    <td><?=$data['icon']?></td>
                    <td>
                         <a href="./Edit.php?id=<?=$data['id']?>" class="btn btn-info btn-sm">Edit</a>
                    </td>
                    <td>
                    <a href="./controller/Delete.php?id=<?=$data['id']?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>        
        <!-- table section end -->

        <?php
        require_once "./inc/footer.php";
        ?>