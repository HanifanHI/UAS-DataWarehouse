<?php
include('config.php');
include('fungsi.php');

$jenis = $_GET['c'];

include('header.php');
?>

<div class="container">
	<section class="content">
		<h2 class="ui header">Perbandingan Alternatif -> <?php echo getKriteriaNama($jenis - 1) ?></h2>
		<?php showTabelPerbandingan($jenis, 'alternatif'); ?>
	</section>
</div>

<?php include('footer.php'); ?>