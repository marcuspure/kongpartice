<?php
$pageTitle = '';
?>
<!DOCTYPE html>
<html lang="zh-Hant">

<head>
	<?php include("include/_meta.php"); ?>
</head>

<style>
	.swiper-slide img {
		display: block;
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
</style>

<body>
	<div id="wrap" class="wrap">
		<?php include("include/_header.php"); ?>

		<div id="main" class="main">
			<!-- content 從這裡開始 -->

			<!-- //title -->
			<div class="konfu_title swiper-container">
				<div class="swiper-wrapper ">
					<div class="swiper-slide imgfit imgfit-3x2">
						<img class="titlebgimg" src="" alt="">
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
				<div class="row no-gutters align-items-center">
					<div class="col-lg-6">
						<div class="imgfit imgfit-3x2">
							<img src="/images/移動清洗.gif" alt="">
						</div>
					</div>
					<div class="col-lg-6  text-center title_item">
						<h3 class="py-3">New Product Our Work</h3>
						<p class="py-3 font-l fon-weight-l">If you have a new product you nwat to develop,but encounter a problem with tooling desing. please study with us and we will provide the best solution.</p>
						<div class="more">
							<button class="btn w-8em py-1"><a href="./new_product.php">More</a></button>
						</div>
					</div>
				</div>
			</div>
			<!-- //Your Trouble Our Job -->
			<div class="newproduct_ourwork">
				<div class="row no-gutters  align-items-center title_item">
					<div class="col-lg-6 ">
						<h3 class="py-3">Your Trouble Our Job</h3>
						<p class="py-3 font-l fon-weight-l">Do you have the problem of poor life of existing tooling? Want to produce products of different materials, but encounter the problem of tooling breakage?
							We can provide appropriate tooling modification solutions.</p>
						<div class="more">
							<button class="btn w-8em py-1">More</button>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="imgfit imgfit-3x2">
							<img src="/images/轉動機械.gif" alt="">
						</div>
					</div>
				</div>
			</div>
			<!-- The Formula of Fasteners Manufacturing -->
			<div class="formula">
				<div class="formulatitle text-center">
					<h3 class="py-3 top_line text-white">The Formula of Fasteners Manufacturing</h3>
				</div>
				<div class="formula_allitem d-flex justify-content-center">
					<div class="formula_item text-center">
						<div class="img_outline">
							<div class="formula_itemimg d-flex ">
								<img class="img imgfit" src="/images/線圈.png" alt="">
							</div>
						</div>
						<p class="text-center my-1 font-m">Wire Rod / Wire</p>
						<button class="btn py-1 px-3 my-1 font-m">More ></button>
					</div>
					<div class="div">
						<div class="+">
							+
						</div>
					</div>
					<div class="formula_item text-center">
						<div class="img_outline">
							<div class="formula_itemimg d-flex font-m">
								<img class="img imgfit" src="/images/機台.png" alt="">
							</div>
						</div>
						<p class="text-center my-1 font-m">Wire Rod / Wire</p>
						<button class="btn py-1 px-3 my-1">More ></button>
					</div>
					<div class="+">
						+
					</div>
					<div class="formula_item text-center">
						<div class="img_outline">
							<div class="formula_itemimg d-flex ">
								<img class="img imgfit" src="./images/小零件.png" alt="">
							</div>
						</div>
						<p class="text-center my-1 font-m">Wire Rod / Wire</p>
						<button class="btn py-1 px-3 my-1">More ></button>
					</div>
					<div class="+">
						+
					</div>
					<div class="formula_item text-center">
						<div class="img_outline">
							<div class="formula_itemimg d-flex ">
								<img class="img imgfit" src="./images/index4機台.png" alt="">
							</div>
						</div>
						<p class="text-center my-1 font-m">Wire Rod / Wire</p>
						<button class="btn py-1 px-3 my-1">More ></button>
					</div>
					<div class="+">
						+
					</div>
					<div class="formula_item text-center">
						<div class="img_outline">
							<div class="formula_itemimg d-flex ">
								<img class="img imgfit" src="./images/index5.png" alt="">
							</div>
						</div>
						<p class="text-center my-1 font-m">Wire Rod / Wire</p>
						<button class="btn py-1 px-3 my-1">More ></button>
					</div>
					<div class="+">
						+
					</div>
				</div>
			</div>

			<!-- free_trial -->
			<div class="free_trial order project m-1 ">
				<div class="container">
					<div class="d-flex">
						<div class="img text-right m-2">
							<img src="https://fakeimg.pl/200x200" alt="">
						</div>
						<div class="trailtext m-2">
							<h4> <span class="text-red">FREE</span> TRIAL ORDER PROJECT</h4>
							<p class="font-l fon-weight-l">We have a special program that provides free trial samples to new customers. Welcome to provide the drawings of the tooling currently encountered with various problems, and we will provide our suggestion and offer free samples for you to try after the evaluation.</p>
							<button class="btn w-8em py-1 my-2">Contact Us</button>
						</div>
					</div>

				</div>
			</div>

			<!-- Production Equipment -->
			<div class="container production text-center">
				<div class="row no-gutters d-flex justify-content-center">
					<div class="col-lg-4 ">
						<div class="production_item">
							<p class="production_item_p">Production </p>
							<p class="production_item_p">Equipment</p>
							<div class="production_btn">
								<button class="btn py-1 px-4 my-3">More ></button>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="production_item">
							<p class="production_item_p">Qulaity Control</p>
							<p class="production_item_p">System</p>
							<div class="production_btn">
								<button class="btn py-1 px-4 my-3">More ></button>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="production_item">
							<p class="production_item_p">ESG</p>
							<div class="production_btn">
								<button class="btn py-1 px-4 my-3">More ></button>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
		<!-- /.inner -->


		<!-- news -->
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
												<div class="img_date d-flex p-1 justify-content-between">
													<button class="btn_black p-1 font-xs">Current activity</button>
													<p class="d-flex flex-column justify-content-center">2021-01-01</p>
												</div>
												<p class="font-m">HH-1538 loading </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-4 my-xl-6 text-center">
						<div class="row">
							<div class="col-lg-12">
								<h3 class="title font-serif text-center mt-0">
								</h3>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- business -->
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