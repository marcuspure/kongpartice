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
      <div class="indexArticles gutter">
			<div class="News_inner">
				<div class="mb-4 my-xl-6 text-center">
					<div class="row no-gutters">
						<div class="col-lg-12">
							<h3 class="title font-serif text-center mt-0">
								<span class="title_en top_line">News</span>
							</h3>
							<a href="article_list.php" class="btn btn-color btn-large btn_seeall">See All - <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				
				<div class="tabCont">
					<div id="indexActivity_slider" class="indexActivity_slider swiper-container">
						<div class="swiper-wrapper">
							<div class="container">
								<div class="row">
									<div class="col-lg-4">
										<div class="swiper-slide ">
											<div class="active_text">
												<img class="imgfit " src="https://fakeimg.pl/480x360" alt="">
												<div class="img_date d-flex p-1">
													<button class="btn my-2">Current activity</button>
													<p>2021-01-01</p>
												</div>
												<p class="">HH-1538 loading </p>
											</div>
										</div>
									</div>
								</div>
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