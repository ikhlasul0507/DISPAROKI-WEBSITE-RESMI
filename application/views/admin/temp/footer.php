
<!-- jQuery 3 -->
<script src="<?= base_url('assets/admin/');?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('assets/admin/');?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url('assets/admin/');?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
<!-- sweat alert -->

<script src="<?= base_url('assets/sweetalert/');?>js/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets/sweetalert/');?>js/myscript.js"></script>
</body>
</html>
