<?= $this->include('layout/header') ?>
<?= $this->include('layout/nav') ?>
<?= $this->section('isi')?>

<!-- Feature #3
		============================================= -->
		<section id="feature3" class="section feature feature-left feature-left-circle">
			<div class="container">
				<div class="row clearfix">
					<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
						<div class="heading heading-1 mb-60 text--center wow fadeInUp" data-wow-duration="1s">
							<h2 class="heading--title"><?= $products['model'] ?></h2>
							<h3 class="heading--title warna-amd"><?php 
                                            if ($products['tipe'] == 1) {
                                                echo "Processors";
                                            } else if ($products['tipe'] == 2) {
                                                echo "Graphics";
                                            } else {
                                                echo "Accelerators";
                                            }
                                            ?></h3>
							<p class="heading--desc"><?= $products['deskripsi']?></p>
						</div>
					</div>
					<!-- .col-md-6 end -->
				</div>
				<!-- .row end -->
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="center-block text-center mb-100 wow fadeInUp" data-wow-duration="1s">
							<img src="<?= base_url('assets/product') . "/" . $products['gambar']?>" alt="screenshots">
						</div>
					</div>
				</div>
				<!-- .row end -->
			</div>
			<!-- .container end -->
		</section>
		<!-- #feature3 end -->

<?= $this->endSection()?>
<?= $this->include('layout/footer') ?>