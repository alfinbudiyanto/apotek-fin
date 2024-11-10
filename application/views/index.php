<!-- Header -->
<?php $this->load->view('template/header'); ?>

<div class="wrapper">

  <!-- Navbar -->
  <?php $this->load->view('template/navbar'); ?>

  <!-- Sidebar  -->
  <?php $this->load->view('template/sidebar'); ?>

  <!-- Content -->
  <?php $this->load->view('template/content.php') ?>

  <!-- Footer -->
  <?php $this->load->view('template/sidebar'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php $this->load->view('template/js'); ?>

</body>

</html>