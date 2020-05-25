<input type="button" value="Up" id="tombolScrollTop" onclick="scrolltotop()" style="cursor: pointer;
    position:fixed;
    left:95%;
    bottom:50px;
    border:3px solid red;
    background-image: ('<?= base_url('assets/users/');?>gambar/up.ico');
    color:black;
    border-radius:100%;
    height:40px;
    width:40px;
    font-size:15px;
    display:none;">
    
<script type="text/javascript">
    $(document).ready(function(){
    $(window).scroll(function(){
        if ($(window).scrollTop() > 100) {
            $('#tombolScrollTop').fadeIn();
        } else {
            $('#tombolScrollTop').fadeOut();
        }
    });
});

function scrolltotop()
{
    $('html, body').animate({scrollTop : 0},500);
}
</script>
<!--     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
    <!-- JS here -->
    <script src="<?= base_url('assets/users/');?>js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?= base_url('assets/users/');?>js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url('assets/users/');?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/users/');?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/users/');?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/users/');?>js/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets/users/');?>js/ajax-form.js"></script>
    <script src="<?= base_url('assets/users/');?>js/waypoints.min.js"></script>
    <script src="<?= base_url('assets/users/');?>js/jquery.counterup.min.js"></script>
    <script src="<?= base_url('assets/users/');?>js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url('assets/users/');?>js/scrollIt.js"></script>
    <script src="<?= base_url('assets/users/');?>js/jquery.scrollUp.min.js"></script>
    <script src="<?= base_url('assets/users/');?>js/wow.min.js"></script>
    <script src="<?= base_url('assets/users/');?>js/nice-select.min.js"></script>
    <script src="<?= base_url('assets/users/');?>js/jquery.slicknav.min.js"></script>
    <script src="<?= base_url('assets/users/');?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('assets/users/');?>js/plugins.js"></script>
    <script src="<?= base_url('assets/users/');?>js/gijgo.min.js"></script>
    <script src="<?= base_url('assets/users/');?>js/slick.min.js"></script>
    <!-- Select2 -->
    <script src="<?= base_url('assets/admin/');?>bower_components/select2/dist/js/select2.full.min.js"></script>

    
    <!--contact js-->
    <script src="<?= base_url('assets/users/');?>js/contact.js"></script>
    <script src="<?= base_url('assets/users/');?>js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url('assets/users/');?>js/jquery.form.js"></script>
    <script src="<?= base_url('assets/users/');?>js/jquery.validate.min.js"></script>
    <script src="<?= base_url('assets/users/');?>js/mail-script.js"></script>


    <script src="<?= base_url('assets/users/');?>js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>
    <!-- sweat alert -->

    <script src="<?= base_url('assets/sweetalert/');?>js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('assets/sweetalert/');?>js/myscript.js"></script>
   
</body>

</html>