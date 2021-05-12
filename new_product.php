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
            <h4 class="font-xxl l-h-30">Through the Toolings Designed by Us,
              Customers Save A Lot of Raw Material Costs and Time</h4>
            <p class="font-l fon-weight-l my-2 l-h-30">The client presumably wants to order a brand-new 5 Die 5 Blow Former to produce workpieces
              which need to be furtherly modified by lathe machine. With the die sets designed by KONFU, the workpieces can directly form after cold forging. In this way, scraps in previous procedure can be reduced. Moreover, both raw material cost and man-hour will be saved.
              The client’s competiveness in the market is therefore firmly established.
            </p>
          </div>
          <div class="col-lg-6 imgfit ">
            <img class="" src="/images/newproduct1.png" alt="">
          </div>


        </div>
      </div>
    </div>


    <div class="popup">
      <img src="/images/newproduct1.png">
    </div>
    <div class="show">
      <div class="overlay"></div>
      <div class="img-show">
        <span>X</span>
        <img src="">
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


    <!-- newproduct -->
    <div class="newproduct text-center d-flex justify-content-center flex-column font-l fon-weight-l l-h-30">
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

    $(function() {
      "use strict";

      $(".popup img").click(function() {
        var $src = $(this).attr("src");
        $(".show").fadeIn();
        $(".img-show img").attr("src", $src);
      });

      $("span, .overlay").click(function() {
        $(".show").fadeOut();
      });

    });
  </script>
</body>

</html>

<style>
  .popup {
    width: 900px;
    margin: auto;
    text-align: center
  }

  .popup img {
    width: 200px;
    height: 200px;
    cursor: pointer
  }

  .show {
    z-index: 999;
    display: none;
  }

  .show .overlay {
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, .66);
    position: absolute;
    top: 0;
    left: 0;
  }

  .show .img-show {
    width: 600px;
    height: 400px;
    background: #FFF;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    overflow: hidden
  }

  .img-show span {
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 99;
    cursor: pointer;
  }

  .img-show img {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
  }

  /*End style*/
</style>