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
            <h3 class="text-center">Machine</h3>
          </div>
        </div>
      </div>


      <!-- text -->
      <div class="container">
        <div class="row py-4">
          <div class="col-lg-12 text-center font-l fon-weight-l l-h-30">
            <p class="machine_text ">We have a professional team for comprehensive equipment consultation whenever you manage to enter the fastener field.
              As long as you propose a general concept for products, we can provide you with perfect solutions to related wires, dies, machines, heat treatment, electroplating and packing equipments.
            </p>
            <p class="machine_text">If you need a thourough know-how on machine operation,
              you can dispatch mechanics to Taiwan. We will conduct comprehensive lessons on operating the machines.
            </p>
            <p class="machine_text">Furthermore, if you intend to produce any kind of fastener and would like to evaluate which kind of machine is proper for mass production, we can also provide you with consultation service.
              For decades, we have sold numerous 1 die 2 blow heading machines, multi-stage heading machines, nut forming machines, tapping machines and thread rollinh machines worldwidely.
            </p>
            <p class="machine_text">If you want to develop new products, you can also present your needs at placing order. We can study how to make and produce them with dies on the machines you just order. In this way, you may stand out and win the leading role in the highly-competitive fasterner market. </p>
            <p class="machine_text">To help our clients deal with back-hand process problems, we also export superheat treatment equipments and packaging machines. </p>
            <p class="machine_text">KONFU, like a freely-speaking friend, always treats and serves every client/friend with a most humble heart. </p>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center">
      <button class="btn-rectangle-black btn-outline m-2 p-2">Handing Machine</button>
      <button class="btn-rectangle-black btn-outline m-2 p-2"><a href="/Performance.php">Thread Rolling Machine</a></button>
      <button class="btn-rectangle-black btn-outline m-2 p-2"><a href="">Nut Former</a></button>
    </div>


    <!-- //img -->
    <div class="imgfit imgfit-3x2">
      <img src="https://fakeimg.pl/520x348" alt="">
    </div>

    <div class="imgfit imgfit-3x2 ">
      <img src="https://fakeimg.pl/400x267" alt="">
      <img src="https://fakeimg.pl/400x267" alt="">
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