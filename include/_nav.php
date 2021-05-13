<nav id="nav" class="nav">
  <!-- <div class="mask" id="navWrap_mask"></div> -->
  <ul class="nav list_unstyled ">
    <li class="nav_item"><a href="/aboutus.php">About Us</a></li>
    <li class="nav_item"><a href="/tooling.php">Tooling</a></li>
    <li class="nav_item"><a href="/machine.php">Machine</a></li>
    <li class="nav_item"><a href="/fastener.php">Fasteners</a></li>
    <li class="nav_item"><a href="">Equipment</a></li>
    <li class="nav_item"><a href="/new.php">News</a></li>
    <li class="nav_item"><a href="">Contacts Us</a></li>
  </ul>
</nav>


<nav id="nav" class="nav">
  <div id="nav_mask" class="nav_mask mask"></div>
  <a id="nav_close" class="nav_close icon-close" title="關閉選單"></a>
  <div class="nav_cont">
    <div class="nav_user d-flex align-items-center mb-4">
      <div class="nav_avster mr-3">
        <div class=" avster">
          <img src="{{asset('assets/web/images/default_user.svg')}}" alt="Charlie Chueh">
        </div>
      </div>
      <div>Charlie Chueh</div>
    </div>

    <p class="nav_topTitle">享受您的美好食光</p>
    <a data-modal="#login" class="btn btn-block tracking-1 mb-2">登入/註冊</a>


    <ul class="nav_menu list-unstyled mb-4">

      <li class="nav_item"><a class="nav_trigger" href="/ui/order_history">訂單紀錄</a></li>
      <li class="nav_item"><a class="nav_trigger" href="">帳戶資料</a></li>
      <li class="nav_item"><a class="nav_trigger" href="">常用外送地址</a></li>

      <hr class="hr my-4">
      <li class="nav_item"><a class="nav_trigger" href="">關於我們</a></li>
      <li class="nav_item"><a class="nav_trigger" href="">隱私權政策</a></li>
      <li class="nav_item"><a class="nav_trigger" href="">服務條款</a></li>
      <li class="nav_item"><a class="nav_trigger" href="">登出</a></li>
    </ul>
    <div class="nav_btm mt-auto">
      <select name="" id="" class="form-control form-control-small w-100">
        <option value="">繁體中文</option>
      </select>
    </div>

  </div>
</nav>

<script>
   // nav
   $('#navToggle').click(function() {
    $(this).toggleClass('open');
    $('#nav').toggleClass('open');
  });
  $('#nav_close, #nav_mask').click(function() {
    $('#nav, #navToggle').toggleClass('open', false);
  });
</script>