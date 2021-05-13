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
        <h1 class="centered_tooling">Tooling</h1>
      </div>


      <!-- //tab -->
      <div class="text-center bg-gray">
        <!-- <div class="inner"> -->
        <ul class="tabs list-unstyled m-auto">
          <li class="tabs_item btn-rectangle-black btn-outline m-2 p-2 active "><a data-tab="#tab_1">Japanese Case Name</a></li>
          <li class="tabs_item btn-rectangle-black btn-outline m-2 p-2 "><a data-tab="#tab_2">Belgian Case Name</a></li>
        </ul>
        <!-- </div> -->
      </div>

      <div class="tabCont home_tabCont mt-4">
        <div id="tab_1" class="tabCont_panel active">

          <!-- Carbide Tools -->
          <h4 class="text-center">Design tools for Japanese customers, </h4>
          <h4 class="text-center"> increase production and reduce costs</h4>
          <div class="container">
            <div class="row no-gutters">
              <div class="col">
                <div class="font-l fon-weight-l l-h-30">
                  <div class="text-center toolings_text font-l fon-weight-l l-h-30">
                    <p>The workpiece shown above is the flagship product and an all-year-round seller of our client. To reduce the high cost of the applied tools, the client demands KONFU to make a trial run for the expensive 25kg die. KONFU suggests to change the die design from 1 -piece to 3-piece close up type. Whenever the die is close to the end of its lifecycle, we only have to change the NIB and thus we save half of the tool cost every time. </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="font-l fon-weight-l l-h-30">
                  <div class="text-center toolings_text font-l fon-weight-l l-h-30">
                    <p>The lifecycle of our first model is 50% lower than the upgraded dies utilized by our client now. KONFU does not stop improving and fixing the inner angle, chamfer, material and polish. KONFU’s second model, compared to the client’s tools at the moment, has doubled the lifecycle. </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="font-l fon-weight-l l-h-30">
                  <div class="text-center toolings_text font-l fon-weight-l l-h-30">
                    <p>With KONFU’s adaptation, the dies have at least 3 NIB changes and their lifecycle is therefore prolonged as 2 times longer. The annual piece consumption drops from 180 pieces to 90 pieces. The total cost of the dies is reduced to merely 25% of the original cost. </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="font-l fon-weight-l l-h-30">
                  <div class="text-center toolings_text font-l fon-weight-l l-h-30">
                    <p>With KONFU’s efficient modification, the client saves nearly up to 75% of the original expense. KONFU does help the client to save a huge amount of tool cost, and eventually turns this special product into a profitable one. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /#tab_1 -->

        <div id="tab_2" class="tabCont_panel">

        </div>
        <!-- /#tab_2 -->

      </div><!-- /#tab_結尾 -->

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
    $(document).ready(function() {
      // tab
      $('[data-tab]').click(function(e) {
        e.preventDefault();
        var tabId = $(this).data('tab');
        $(this).parent('.tabs_item').toggleClass('active', true).siblings('.tabs_item').toggleClass('active', false);
        $(tabId).toggleClass('active', true).siblings('.tabCont_panel').toggleClass('active', false);
      });
    });
  </script>

</body>

</html>