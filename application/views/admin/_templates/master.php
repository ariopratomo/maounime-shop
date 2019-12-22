<!-- Content Wrapper. Contains page content -->
<?php
$this->load->view('admin/_templates/header');
$this->load->view('admin/_templates/nav');
$this->load->view('admin/_templates/side');
?>
<div class="content-wrapper">
	<?=$contents?>
</div>
<!-- /.content-wrapper -->

<?php
$this->load->view('admin/_templates/footer');
$this->load->view('admin/_templates/js');
?>
