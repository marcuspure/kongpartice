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
        <img src="/images/title.jpg" alt="Snow" style="width:100%;">
        <h1 class="centered">Wire Rod/Wire</h1>
      </div>

      <!-- text -->

      <div class="d-flex no-gutters align-items-center justify-content-center ">
        <div class="text-center wire_text font-l fon-weight-l">
          <p>
            We currently supply wire drawing factories in Thailand with high-quality carbon steel and alloy steel wire rod. They supply Japanese car factories, based in Thailand, with fasteners specialized for exclusive use for cars once they have drawn the wire
          </p>
          <p>
            Moreover, we also cooperate with wire drawing factories in Taiwan. In this way, we can supply you with all kinds of fine-quality carbon and stainless steel wires so that you can easily reach the stage of mass production.
          </p>
        </div>
      </div>

      <div class="text-center w-100 my-5 factory_img ">
        <img src="./images/廠區01.jpeg" alt="">
      </div>


      <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="imgfit imgfit-3x2">
              <img src="/images/線材01.jpeg" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="imgfit imgfit-3x2">
              <img src="/images/線材02.jpeg" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="imgfit imgfit-3x2">
              <img src="/images/線材03.jpeg" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="imgfit imgfit-3x2">
              <img src="/images/線材04.jpeg" alt="">
            </div>
          </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
         <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
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
    var swiper = new Swiper('.swiper-container', {
      direction: 'horizontal',
      loop: false,
      slidesPerView: 1, //手機版一排一張
      spaceBetween: 16,
      // RWD
      breakpoints: {
        // 640以上的option
        640: {
          slidesPerView: 4,
          spaceBetween: 32, //間距
        },
      },
    });

    var mySwiper = new Swiper('.swiper-container1', {
      direction: 'horizontal',
      loop: false,
      navigation: {
        nextEl: '.swiper-button-next1',
        prevEl: '.swiper-button-prev1',
      },

    });
  </script>
</body>

</html>