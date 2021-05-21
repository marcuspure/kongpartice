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
        <div class="">
          <div class="newproduct1">
            <div class="newproduct1_box newproduct1_box-1">
              <a class="newproduct1_trigger"></a>
              <div class="newproduct1_target"><img class="bg-black " src="/images/new_product01.png"></div>
            </div>
            <div class="newproduct1_box newproduct1_box-2">
              <a class="newproduct1_trigger"></a>
              <div class="newproduct1_target"><img class="bg-black " src="/images/new_product01.png"></div>
            </div>  
          </div>
        </div>
      </div>




      <!-- </div> -->


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
    $('.newproduct1_trigger').click(function(){
      $(this).parent('.newproduct1_box').toggleClass('open')
        .siblings('.newproduct1_box').toggleClass('open',false);      
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

