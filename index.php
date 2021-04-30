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
		content 從這裡開始
		<div class="item">
  <div class="item_header">
    <div class="addressList_tittle d-flex align-items-center">
    <p class="mr-auto title">續保件</p>
    <a class="btn btn-pill btn-outline btn-xsmall" 
              href="" 
              data-modal="#">編輯
            </a> 
    </div>
  </div>
  <div class="date">
    <div class="title">
      <label for="" class="date_title">全部</label>
      <label for="" class="date_title">本月到期</label>
      <label for="" class="date_title">7日到期</label>
    </div>
    <div class="expired">
      <label for="" class="date_number">100</label>
      <label for="" class="date_number">10</label>
      <label for="" class="date_number">5</label>
    </div>
  </div>
</div>
	<?php include("include/_body.php"); ?>
	</div><!--End of main-->

	<?php include("include/_footer.php"); ?>


</div><!--End of wrap-->

<?php include("include/_js.php"); ?>

</body>
</html>