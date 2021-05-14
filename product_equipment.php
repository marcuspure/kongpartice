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
        <img src="/images/Tooling_main.png" style="width:100%;">
        <h1 class="centered_tooling">Product Equipment</h1>
      </div>

      <!-- text -->
      <div class="container">
        <div class="inner">
          <div class="row py-4">
            <div class="col-lg-12 text-left font-l fon-weight-l l-h-30">
              <p class="machine_text ">We provide all sorts of manufacturing equipment, and the manufactue procedure is controlled with barcodes. Quality control is strictly demanded in the procedure to assure the high precision of the products. In each procedure, the product will not enter the next before its size is confirmed accurate and precise. </p>
              <p class="machine_text">Our production equipment is as follows:</p>
            </div>
          </div>
        </div>
      </div>

      <!-- //tab -->
      <div class="text-center bg-gray">
        <div class="inner_ul">
          <ul class="tabs list-unstyled m-auto">
            <li class="tabs_item btn-rectangle-black btn-outline m-2 p-2 active "><a data-tab="#tab_1">Lathes Machine</a></li>
            <li class="tabs_item btn-rectangle-black btn-outline m-2 p-2 "><a data-tab="#tab_2">Milling Machine</a></li>
            <li class="tabs_item btn-rectangle-black btn-outline m-2 p-2 "><a data-tab="#tab_3">Drilling Machine</a></li>
            <li class="tabs_item btn-rectangle-black btn-outline m-2 p-2 "><a data-tab="#tab_4">Grinding Machine</a></li>
            <li class="tabs_item btn-rectangle-black btn-outline m-2 p-2 "><a data-tab="#tab_5">Wire Cutting Machine</a></li>
            <li class="tabs_item btn-rectangle-black btn-outline m-2 p-2 "><a data-tab="#tab_6">CNC Milling Machine</a></li>
            <li class="tabs_item btn-rectangle-black btn-outline m-2 p-2 "><a data-tab="#tab_7">CNC Lathes Machine</a></li>
            <li class="tabs_item btn-rectangle-black btn-outline m-2 p-2 "><a data-tab="#tab_8">CNC Engraving Machine</a></li>
            <li class="tabs_item btn-rectangle-black btn-outline m-2 p-2 "><a data-tab="#tab_9">Electric discharge machine </a></li>
          </ul>
        </div>
      </div>


      <div class="tabCont home_tabCont mt-4">
        <div id="tab_1" class="tabCont_panel active">

          <!-- Lathes machine -->
          <h4 class="text-center">Lathes machine</h4>
          <div class="inner">
            <div class="container">
              <div class="row">
                <div class="col-12">
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

                <div class="col-12">
                  <div class="imgfit imgfit-3x2">
                    <img src="/images/轉動機械.gif" alt="">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- /#tab_1 -->

        <!-- Milling machine -->
        <div id="tab_2" class="tabCont_panel">
          <h4 class="text-center">Milling machine</h4>
          <div class="inner">
            <div class="container">
              <div class="row">
                <div class="col-12">
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

              </div>
            </div>
          </div>
          <!-- /#tab_3 -->
          <div id="tab_3" class="tabCont_panel">

          </div>
          <!-- /#tab_3 -->
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

    // tab
    $('[data-tab]').click(function(e) {
      e.preventDefault();
      var tabId = $(this).data('tab');
      $(this).parent('.tabs_item').toggleClass('active', true).siblings('.tabs_item').toggleClass('active', false);
      $(tabId).toggleClass('active', true).siblings('.tabCont_panel').toggleClass('active', false);
    });
  </script>
</body>

</html>