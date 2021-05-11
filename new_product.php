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
      <div class="newproduction">
        <div class="">
          <div class="title_img imgfit imgfit-3x2">
            <img src="" alt="">
          </div>
        </div>
      </div>


      <!-- text -->
      <div class="container">
        <div class="row py-4">
          <div class="col-lg-6">
            <h4>Through the Toolings Designed by Us,
              Customers Save A Lot of Raw Material Costs and Time</h4>
            <p>The client presumably wants to order a brand-new 5 Die 5 Blow Former to produce workpieces
              which need to be furtherly modified by lathe machine. With the die sets designed by KONFU, the workpieces can directly form after cold forging. In this way, scraps in previous procedure can be reduced. Moreover, both raw material cost and man-hour will be saved.
              The client’s competiveness in the market is therefore firmly established.
            </p>
          </div>
          <div class="col-lg-6">
            <img class="imgfit" src="https://fakeimg.pl/585x389" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="pic">
      <div class="row mx-0 justify-content-center align-items-center w-100">
        <div class="col imgfit imgfit-3x2 ">
          <img src="./images/new_product1.png" alt="">
        </div>
      </div>
    </div>

    <!-- //輪波圖 -->
    <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img class="imgfit" src="./images/new product_slider2.png" alt=""></div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>


    <!-- newproduct -->
    <div class="newproduct text-center d-flex justify-content-center flex-column">
      <p class="font-l fon-weight-l m-1">If you want to develop or design any new product,
        please don’t hesitate to contact</p>
      <p class="font-l fon-weight-l m-1">KONFU for advice. We are always there to make steps forward with you.</p>
      <div class="product_btn">
        <button class="btn m-2 px-5 py-2">Contacts Us</button>
      </div>
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