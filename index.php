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
			<div class="konfu_title swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide imgfit imgfit-3x2"><img src="./images/title.jpg" alt="">
					</div>
					<div class="swiper-slide">Slide 2</div>
					<div class="swiper-slide">Slide 3</div>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-pagination"></div>
			</div>
			<!-- newproduct_ourwork -->
			<div class="newproduct_ourwork">
				<div class="row">
					<div class="col-lg-6">
						<img class="imgfit " src="https://fakeimg.pl/720x500" alt="">
					</div>
					<div class="col-lg-6">
						<h3>New Product Our Work</h3>
						<p>If you have a new product you nwat to develop,but encounter a problem with tooling desing. please study with us and we will provide the best solution.</p>
						<button class="btn">More</button>
					</div>
				</div>
			</div>
	<!-- //newproduct_ourwork -->
			<div class="newproduct_ourwork">
				<div class="row align-items: center">
					<div class="col-lg-6">
						<h3>Your Trouble Our Job</h3>
						<p>Do you have the problem of poor life of existing tooling? Want to produce products of different materials, but encounter the problem of tooling breakage? We can provide appropriate tooling modification solutions.</p>
						<button class="btn">More</button>
					</div>
					<div class="col-lg-6">
						<img class="imgfit " src="https://fakeimg.pl/720x500" alt="">
					</div>
				</div>
			</div>


			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="footer_item">
							<p class="footer_title font-thin">Production Equipment</p>
							
						</div>
					</div>
					<div class="col-lg-4">
						<div class="footer_item">
							<p class="footer_title font-thin">KOGI Headquarter</p>
							<ul class="footer_info list-unstyled">
								<li class="mb-2"><i class="fas fa-fw fa-phone-alt"></i>+886-2-2799-8808
								<li>
								<li class="mb-2"><i class="fas fa-fw fa-map-marker-alt"></i>7F-1, No.335 Ruiguang Road., Neihu Dist., Taipei, Taiwan R.O.C.
								<li>
								<li class="mb-2"><i class="far fa-fw fa-clock"></i>09:00 – 18:00 GMT+8
								<li>
								<li class="mb-2"><i class="far fa-fw fa-envelope"></i>inquiry@kogiconsulting.com</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="footer_item">
							<p class="footer_title font-thin">KOGI Headquarter</p>
							<ul class="footer_info list-unstyled">
								<li class="mb-2">ANF TOOL&MACHINE LTD
								<li>
								<li class="mb-2">CHIN FU HARDWARE CO.LTD
								<li>
							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- /.row -->
		</div>
		<!-- /.inner -->



		<div class="indexArticles gutter">
			<div class="News_inner">
				<div class="mb-4 my-xl-6 text-center">
					<div class="row">
						<div class="col-lg-6">
							<h3 class="title font-serif text-center mt-0">
								<span class="title_en">News</span>
							</h3>
						</div>
						<div class="col-lg-6">
							<a href="article_list.php" class="btn btn-color btn-large">See All - <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="tabCont">
				<!-- /全部文章 -->
					<div id="indexActivity_slider" class="indexActivity_slider swiper-container">
						<div class="swiper-wrapper">
							<div class="container">
								<div class="row">

									<div class="col-lg-4">
										<div class="swiper-slide ">
											<img class="imgfit " src="https://fakeimg.pl/480x360" alt="">
											<button class="btn">Current activity</button>
											<p>2021-01-01</p>
											<p class="d-inline-block">HH-1538 loading </p>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- /.indexAnews -->


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
		//title
		var swiper = new Swiper(".konfu_title", {
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

		// mutiple items scroll
		var indexActivity_slider = new Swiper('#indexActivity_slider', {
			slidesPerView: 1, //水平數量
			slidesPerColumn: 2, //垂直數量
			slidesPerGroup: 1, //一次捲動幾排
			spaceBetween: 32,
			slidesPerColumnFill: 'row',

			navigation: {
				nextEl: '.indexActivity-next',
				prevEl: '.indexActivity-prev',
			},
			breakpoints: {
				768: {
					slidesPerView: 2,
					slidesPerColumn: 1,
					slidesPerGroup: 2,
				},
				1024: {
					slidesPerView: 3,
					slidesPerColumn: 1,
					slidesPerGroup: 3,
				}
			}
		});
	</script>
</body>

</html>