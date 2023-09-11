<footer class="main-footer">
    <strong>Copyright &copy; 2023-25 <a href="#">Keshav Naihani</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>





<script>
  (function(){
    var path = window.location.href;
    // console.log(path);
    $(".nav-link").each(function () {

      var href = $(this).attr('href');
      // console.log(href);
      if (path === decodeURIComponent(href)) 
      {
        $(this).addClass('active');
        var parent = $(this).closest('.has-treeview');
        parent.addClass('menu-open');
        $(parent).find('.nav-link').first().addClass('active');
        // console.log(parent);
      };
    });
  }());
</script>

</body>
</html>
