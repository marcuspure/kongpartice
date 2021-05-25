    <!-- jQuery -->
    <script src="js/jquery-3.0.0.min.js"></script>

    <!-- common JS -->
    <script>
        // function modal(id) {
        //     // modal
        //     $(id).click(function() {
        //         event.preventDefault();
        //         $('.modal').removeClass('open');
        //         var modalID = $(this).data('modal');
        //         $(modalID).addClass('open');
        //     });
        //     // click .modal_close 時關掉modal
        //     $('.modal').on('click', '.mask,.modal_close', function() {
        //         $(this).closest('.modal').removeClass('open');
        //     });
        //     // click [data-modal-close] 時關掉指定的modal，若沒填則關掉父層modal
        //     $('.modal').on('click', '[data-modal-close]', function() {
        //         var modalID = $(this).data('modal-close');
        //         if (!!modalID) {
        //             $(modalID).removeClass('open');
        //         } else {
        //             $(this).closest('.modal').removeClass('open');
        //         }
        //     });
        // }
        // $(document).ready(function() {

            // // modal
            // modal('[data-modal]');
            // $('#toggleNav').click(function() {
            //     $('#nav').toggleClass('open');
            // });
            // $('#nav_close, #nav_mask').click(function() {
            //     $('#nav').toggleClass('open', false);
            // });
            // $('.toast_close').click(function() {
            //     $(this).closest('.toast').toggleClass('hide', true);
            // });

            // // nav
            // $('#navToggle').click(function() {
            //     $(this).toggleClass('open');
            //     $('#nav').toggleClass('open');
            // });
            // $('#nav_close, #nav_mask').click(function() {
            //     $('#nav, #navToggle').toggleClass('open', false);
            // });

            // //goto btn click than scroll
            // if ($('.fixed_btns').length > 0) {
            //     $('#gotoTop').css('bottom', $('.fixed_btns').outerHeight());
            // }
            // $('#gotoTop').click(function() {
            //     $('body,html').animate({
            //         scrollTop: 0
            //     }, 500);
            // });
        // });

        // $(window).scroll(function() {
        //     var winScrollH = $(this).scrollTop();
        //     if (winScrollH > 150) {
        //         $('#header').addClass('fixed');
        //     } else {
        //         $('#header').removeClass('fixed');
        //     }
        // });
        // $(window).scroll();
    </script>