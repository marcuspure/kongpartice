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
        <div class="row py-4">
          <div class="col-12 col-lg-6">
            <h4 class="font-xxl l-h-30 my-3 ">Through the Toolings Designed by Us,
              Customers Save A Lot of Raw Material Costs and Time</h4>
            <p class="font-l fon-weight-l my-3 l-h-30">The client presumably wants to order a brand-new 5 Die 5 Blow Former to produce workpieces
              which need to be furtherly modified by lathe machine. With the die sets designed by KONFU, the workpieces can directly form after cold forging. In this way, scraps in previous procedure can be reduced. Moreover, both raw material cost and man-hour will be saved.
              The client’s competiveness in the market is therefore firmly established.
            </p>
          </div>
          <div class="col-12 col-lg-6 imgfit ">
            <img class="" src="/images/newproduct1.png" alt="">
          </div>
        </div>
      </div>


      <div class="pic">
        <div class="row mx-0 justify-content-center align-items-center ">
          <div class="col imgfit imgfit-3x2 newproduct1">
          </div>
        </div>
      </div>



      <div class="btn1">
        <button class="toggle1 btn  p-3 ">+</button>
        <div id="target1" class="close"><img class="bg-black " src="/images/new_product01.png"></div>
      </div>
      <div class="btn2">
        <button class="toggle2 btn p-3 ">+</button>
        <div id="target2" class="close"><i><img class="bg-black " src="/images/new_product01.png"></i></div>
      </div>
      <div class="btn3">
        <button class="toggle3 btn p-3 ">+</button>
        <div id="target3" class="close"><i><img class="bg-black " src="/images/new_product01.png"></i></div>
      </div>


      <!-- //輪波圖 -->
      <div class="swiper-container mySwiper newproduct_swiper">
        <div class="swiper-wrapper my-5">
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
    $('.toggle1').click(function() {
      $('.close').hide('', )
      $('#target1').toggle('', );

    });
    $('.toggle2').click(function() {
      $('.close').hide('', );
      $('#target2').toggle('', false);
    });
    $('.toggle3').click(function() {
      $('.close').hide('', );
      $('#target3').toggle('', false);
    });

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
  .newproduct1 {
    background-image: url('./images/new_product1.png');
    background-size: cover;
  }

  #target1 {
    /* background: #0099cc; */
    /* width: 300px;
    height: 300px;
    padding: 5px; */
    display: none;
    z-index: 2;
  }

  #target2 {
    display: none;
  }

  #target3 {
    display: none;
  }


  .Hide {
    display: none;
  }

  .btn1 {
    position: absolute;
    top: 30%;
    left: 24%;
    z-index: 4;
  }

  .btn2 {
    position: absolute;
    top: 35%;
    left: 24%;
    z-index: 3;
  }

  .btn3 {
    position: absolute;
    top: 50%;
    left: 24%;
    z-index: 2;
  }

  #target1 img {
    width: 400px;
    height: 267px;
    z-index: 1;
  }

  #target2 img {
    width: 400px;
    height: 267px;
    z-index: 1;
  }

  #target3 img {
    width: 400px;
    height: 267px;
    z-index: 1;
  }
</style>