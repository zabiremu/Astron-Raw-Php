<?php
include_once('./inc/Header.php');
include "./inc/env.php";
// banner add 
$select = "SELECT * FROM banner";
$query = mysqli_query($conn, $select);
$fetch = mysqli_fetch_all($query, 1);
// service add
$serviceSel = "SELECT * FROM services";
$query1 = mysqli_query($conn, $serviceSel);
$fetch1 = mysqli_fetch_all($query1, 1);
// about add
$query2 = "SELECT * FROM about";
$about = mysqli_query($conn, $query2);
$aboutFetch = mysqli_fetch_all($about, 1);
// add features
$query3 = "SELECT * FROM addfeatures";
$features = mysqli_query($conn, $query3);
$featuresFetch = mysqli_fetch_all($features, 1);
// features header
$query4 = "SELECT * FROM featuresheader";
$features1 = mysqli_query($conn, $query4);
$featuresFetch1 = mysqli_fetch_assoc($features1);
?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
  <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <!-- Slide 1 -->


    <?php
    foreach ($fetch as $key => $data) {

    ?>
      <div class="carousel-item <?php
                                if ($key == 0) {
                                  echo "active";
                                }
                                ?>">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"><?= $data['tittle'] ?></h2>
          <p class="animate__animated animate__fadeInUp"><?= $data['details'] ?></p>
          <a href="<?= $data['ButtonLink'] ?>" class="btn-get-started animate__animated animate__fadeInUp"><?= $data['ButtonName'] ?></a>
        </div>
      </div>

    <?php
    }
    ?>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= Services Section ======= -->
  <section class="services" id="serv">
    <div class="container">

      <div class="row">
        <?php
        foreach ($fetch1 as $key => $data) {
        ?>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box <?php
                                  if ($key == 0) {
                                    echo "icon-box-pink";
                                  } elseif ($key == 1) {
                                    echo "icon-box-cyan";
                                  } elseif ($key == 2) {
                                    echo "icon-box-green";
                                  } elseif ($key == 3) {
                                    echo "icon-box-blue";
                                  }
                                  if ($key == 4) {
                                    echo "icon-box-pink";
                                  } elseif ($key == 5) {
                                    echo "icon-box-cyan";
                                  } elseif ($key == 6) {
                                    echo "icon-box-green";
                                  } elseif ($key == 7) {
                                    echo "icon-box-blue";
                                  }
                                  if ($key == 8) {
                                    echo "icon-box-pink";
                                  } elseif ($key == 9) {
                                    echo "icon-box-cyan";
                                  } elseif ($key == 10) {
                                    echo "icon-box-green";
                                  } elseif ($key == 11) {
                                    echo "icon-box-blue";
                                  }
                                  ?>">
              <div class="icon"><i class="<?= $data['icon'] ?>"></i></div>
              <h4 class="title"><a href=""><?= $data['title'] ?></a></h4>
              <p class="description"><?= $data['details'] ?></p>
            </div>
          </div>

        <?php
        }
        ?>
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Why Us Section ======= -->
  <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200" id="about">
    <div class="container">


      <?php
      foreach ($aboutFetch as $data) {
      ?>
        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="<?= './uploads/' . $data['img'] ?>" class="img-fluid" alt="" style="width:100%">
            <a href="<?= $data['anchor'] ?>" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="<?= $data['icon'] ?>"></i></div>
              <h4 class="title"><a href=""><?= $data['title'] ?></a></h4>
              <p class="description"><?= $data['details1'] ?></p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="<?= $data['icon2'] ?>"></i></div>
              <h4 class="title"><a href=""><?= $data['title1'] ?></a></h4>
              <p class="description"><?= $data['details1'] ?></p>
            </div>

          </div>
        </div>

      <?php
      }
      ?>

    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Features Section ======= -->
  <section class="features" id="feat">
    <div class="container">

      <div class="section-title">
        <h2><?= $featuresFetch1['heading'] ?></h2>
        <p><?= $featuresFetch1['details'] ?></p>
      </div>



      <?php
      foreach ($featuresFetch as $key=> $data) {
      ?>
        <div class="row <?php
          if($data['active'] == 0){
            echo "d-none";
          }else{
            echo "";
          }
        ?>" data-aos="fade-up">
          <div class="col-md-5 <?=$key % 2 == 0 ? 'order-1': 'order-2' ?>">
            <img src="<?= './uploads/' . $data['img'] ?>" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4 <?=$key % 2 == 0 ? 'order-2': 'order-1' ?>">
            <h3><?=$data['subHeading']?></h3>
            <p class="fst-italic">
              <?= $data['subHeading1'] ?>
            </p>
            <div class="col-lg-12 d-flex">
              <p style="width:40px;">
                <i class="<?=$data['icon']?>"></i>
                <i class="<?=$data['icon']?> d-block" style="margin-top: 10px;"></i>
                
              </p>
              <p class="d-inline-block w-70">
                <?= $data['list'] ?>
              </p>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </section><!-- End Features Section -->

</main><!-- End #main -->


<?php

include_once('./inc/Footer.php')

?>