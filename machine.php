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
        <img src="/images/Machine_main.png" style="width:100%;">
        <h1 class="centered_tooling">Machine</h1>
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

    <!-- //tab -->
    <div class="text-center bg-gray">
      <!-- <div class="inner"> -->
      <ul class="tabs list-unstyled m-auto">
        <li class="tabs_item btn-rectangle-black btn-outline m-2 p-2 active "><a data-tab="#tab_1">Handing Machine</a></li>
        <li class="tabs_item btn-rectangle-black btn-outline m-2 p-2 "><a data-tab="#tab_2">Thread Rolling Machine</a></li>
        <li class="tabs_item btn-rectangle-black btn-outline m-2 p-2 "><a data-tab="#tab_3">Nut Former</a></li>
      </ul>
      <!-- </div> -->
    </div>

    <div class="tabCont home_tabCont mt-4">
      <div id="tab_1" class="tabCont_panel active">
        <div class="imgfit imgfit-3x2">
          <img src="/images/fa-15.jpeg" alt="">
        </div>

      </div>
      <!-- /#tab_1 -->

      <!-- tab_2 -->
      <div id="tab_2" class="tabCont_panel">
        <div class="imgfit imgfit-3x2">
          <img src="/images/震動盤.png" alt="">
        </div>
        <div class="imgfit imgfit-3x2">
          <img src="/images/搓牙機牙版.jpeg" alt="">
        </div>
      </div>
      <!-- /#tab_3 -->
      <div id="tab_3" class="tabCont_panel">

        <div class="imgfit imgfit-3x2">
          <img src="/images/machinetab01.png" alt="">
        </div>

        <div class="imgfit imgfit-3x2 d-flex">
          <img src="/images/machine02.jpeg " style="width:50%;">
          <img src="/images/machine03.jpeg" style="width:50%;">
        </div>
      </div>

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