<!-- Content Wrapper. Contains page content -->
<?php
$this->load->view('front/_templates/header');
$this->load->view('front/_templates/nav-web');
$this->load->view('front/_templates/nav-mobile');
?>
<div class="content-wrapper">
    <?= $contents ?>
</div>
<!-- /.content-wrapper -->

<?php
$this->load->view('front/_templates/nav-bottom');
$this->load->view('front/_templates/footer');
$this->load->view('front/_templates/js');
?>