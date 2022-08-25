<?php
include "./inc/Header.php";
include_once "./inc/SideMenu.php";
include_once "../inc/env.php";
$select = "SELECT * FROM about";
$query = mysqli_query($conn, $select);
$fetch = mysqli_fetch_all($query, 1);
?>
<!--  header section start-->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">About Details Show</h1>
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
                <th scope="col">About image</th>
                <th scope="col">About tilte</th>
                <th scope="col">About title 1</th>
                <th scope="col">About Desc</th>
                <th scope="col">About Desc 1</th>
                <th scope="col">About icon</th>
                <th scope="col">About icon 1</th>
                <th scope="col">About link</th>
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
                    <td> <img style="width: 60px;" src="<?= $path . 'uploads/' . $data['img'] ?>" alt=""></td>
                    <td><?= $data['title'] ?></td>
                    <td><?= $data['title1'] ?></td>
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
                        <?php
                        if (strlen($data['details1']) > 80) {
                            echo substr($data['details1'], 0, 50) . "...";
                        } else {
                            echo $data['details1'];
                        }
                        ?>
                    </td>
                    <td><?= $data['icon'] ?></td>
                    <td><?= $data['icon2'] ?></td>
                    <td><?= $data['anchor'] ?></td>
                    <td>
                        <a href="./AboutEdit.php?id=<?= $data['id'] ?>" class="btn btn-info btn-sm">Edit</a>
                    </td>
                    <td>
                        <a href="./controller/AboutDelete.php?id=<?=$data['id']?>&img=<?=$data['img']?>" class="btn btn-danger btn-sm">Delete</a>
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