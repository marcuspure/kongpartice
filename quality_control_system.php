<?php
$pageTitle = '';
?>
<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <?php include("include/_meta.php"); ?>
</head>



<body>
  <div id="wrap" class="wrap">
    <?php include("include/_header.php"); ?>

    <div id="main" class="main">
      <!-- content 從這裡開始 -->
      <!-- //title -->
      <div class="Toolstitle_img title_img text-center">
        <img src="/images/New-product_main.png" style="width:100%;">
        <h1 class="centered_tooling">New Product Our Work</h1>
      </div>


      <!-- text -->
      <div class="container">
        <div class="inner">
          <div class="row py-4">
            <div class="col-12 col-lg-12">
              <p class="font-l fon-weight-l my-3 l-h-30">We have inspection equipments to examine all molded dimensions before the machines go out. A proper examination report will be submitted to make sure all the sizes are in the tolerance zone.</p>
              <p class="font-l fon-weight-l my-3 l-h-30">Our inspection equipment is as follows:</p>
            </div>
          </div>
        </div>
      </div>


      <!-- //輪波圖 -->
      <div class="swiper-container mySwiper newproduct_swiper">
        <div class="swiper-wrapper my-5">

          <div class="swiper-slide">
            <div class="card">
              <h3 class="text-center my-3">2.5D Video Measurement System</h3>
              <div class="imgfit imgfit-3x2">
                <img class="" src="./images/new product_slider2.png" alt="">
              </div>
            </div>
          </div>

          <div class="swiper-slide imgfit imgfit-3x2">
            <img class="" src="./images/new product_slider2.png" alt="">
          </div>
          <div class="swiper-slide imgfit imgfit-3x2">
            <img class="" src="./images/ournewproduct.png" alt="">
          </div>
          <div class="swiper-slide imgfit imgfit-3x2">
            <img class="" src="./images/newproduct3.png" alt="">
          </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
    <!-- newproduct -->
    <div class="newproduct text-center d-flex justify-content-center flex-column font-l fon-weight-l l-h-30 bg bg-gray">
      <p class="font-l fon-weight-l m-1 ">If you want to develop or design any new product,
        please don’t hesitate to contact</p>
      <p class="font-l fon-weight-l m-1">KONFU for advice. We are always there to make steps forward with you.</p>
      <div class="product_btn my-3 ">
        <button class="btn m-2 px-6 py-2">Contacts Us</button>
      </div>
    </div>

  </div>

  <!--End of main-->

  <?php include("include/_footer.php"); ?>


  </div>
  <!--End of wrap-->

  <?php include("include/_js.php"); ?>
  <!-- plugin js -->
  <!-- Swiper Slider -->
  <script src="js/swiper/swiper-bundle.min.js"></script>


  <script>
    var swiper = new Swiper(".mySwiper", {
      cssMode: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
      },
      mousewheel: true,
      keyboard: true,
    });
  </script>
</body>

</html>

<style>



</style>