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
      <div class="container">
        <div class="row">
          <div class="inner">
            <div class="col-12 col-lg-12">
              <div class="text-left  font-l fon-weight-l my-3">
                <p class="my-3">We currently supply wire drawing factories in Thailand with high-quality carbon steel and alloy steel wire rod. They supply Japanese car factories, based in Thailand, with fasteners specialized for exclusive use for cars once they have drawn the wire</p>
                <p class="my-3">Moreover, we also cooperate with wire drawing factories in Taiwan. In this way, we can supply you with all kinds of fine-quality carbon and stainless steel wires so that you can easily reach the stage of mass production.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center my-5 factory_img ">
      <img src="./images/廠區01.jpeg" alt="">
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-3">
          <div class="imgfit imgfit-3x2">
            <img src="/images/線材01.jpeg" alt="">
          </div>
        </div>
        <div class="col-12 col-lg-3">
          <div class="imgfit imgfit-3x2">
            <img src="/images/線材02.jpeg" alt="">
          </div>
        </div>
        <div class="col-12 col-lg-3">
          <div class="imgfit imgfit-3x2">
            <img src="/images/線材03.jpeg" alt="">
          </div>
        </div>
        <div class="col-12 col-lg-3">
          <div class="imgfit imgfit-3x2">
            <img src="/images/線材04.jpeg" alt="">
          </div>
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
    var swiper = new Swiper('.swiper-container', {
      // direction: 'horizontal',
      // loop: false,
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
  </script>
</body>

</html>