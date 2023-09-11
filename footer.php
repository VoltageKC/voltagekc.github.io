    <footer class="p-4 mt-5 bg-light border-top">
        Copyright <?php echo date('Y'); ?> Voltage
    </footer>

</div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $(this).text(function(i, text){
          return text === "Hide Menu" ? "Show Menu" : "Hide Menu";
      });
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>