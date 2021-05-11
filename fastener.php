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
      <div class="Carbide_Tools_text">
        <div class="">
          <div class="imgfit imgfit-3x2 text-center">
            <img src="" alt="123">
            <h3 class="text-center">Fastener</h3>
          </div>
        </div>
      </div>
      <!-- text -->
      <div class="text-center">
        <p class="fastener_text">If you find outsourcing certain products might be more profitable than producing them, or you have difficulties delivering a successful production, please send us letters of quotation. </p>
        <p class="fastener_text">KONFU, an expert in making dies, also reinvests another screw factory which specializes in producing exclusive screws. </p>
        <p class="fastener_text">Our range of production extends from M3 to M16 in size, 5mm to 200mm in length. In the factory, we have 1 die 2 blow, 2 die 3 blow, 2 die 4 blow, 3 die 3 blow, 4 die 4 blow bolt former and various kinds of threading machines. </p>
      </div>

      <div class="swiper-container components">
        <div class="swiper-wrapper">
          <div class="swiper-slide imgfit"><img class="imgfit" src="./images/fastener_1.jpeg" alt=""></div>
          <div class="swiper-slide">Slide 2</div>
          <div class="swiper-slide">Slide 3</div>
          <div class="swiper-slide">Slide 4</div>
          <div class="swiper-slide">Slide 5</div>
          <div class="swiper-slide">Slide 6</div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>


      <div class="text-center">
        <p class="fastener_text">You may provide us with the fastener drawings you plan to make, and we will access a swift evaluation and propose an ideal quotation. If you hope to develop new products, we can also help to consult and join the development together. </p>
        <p class="fastener_text">We can pack the finished products as clients demand and label them with clients’ tags. Our clients can directly send the packages to the selling racks of local retailers on arrival. </p>
        <p class="fastener_text">If you have any specific demand for packaging, we can always find a way to fulfill it. Chose KONFU, and we believe you can enter the local market as a leading role. </p>
      </div>



      <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide imgfit imgfit-3x2">
            <img class="" src="/images/工廠照全景.jpeg" alt="">
          </div>
          <div class="swiper-slide">Slide 2</div>
          <div class="swiper-slide">Slide 3</div>
          <div class="swiper-slide">Slide 4</div>
          <div class="swiper-slide">Slide 5</div>
          <div class="swiper-slide">Slide 6</div>
          <div class="swiper-slide">Slide 7</div>
          <div class="swiper-slide">Slide 8</div>
          <div class="swiper-slide">Slide 9</div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
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
      var swiper = new Swiper(".components", {
        slidesPerView: 4,
        spaceBetween: 20,
        slidesPerGroup: 4,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 20,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
</body>

</html>