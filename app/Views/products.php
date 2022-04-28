<?= $this->include('layout/header') ?>
<?= $this->include('layout/nav') ?>
<?= $this->section('isi')?>

<!-- reviews
		============================================= -->
		<section id="reviews" class="section reviews bg-white">
			<div class="container">
				<div class="row clearfix">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
						<div class="heading heading-1 mb-60 text--center wow fadeInUp bg-gray" data-wow-duration="1s">
                        <br>
							<h2 class="heading--title">Product List</h2>
							<p class="heading--desc">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p><hr>
                            <form method="GET" action="">
                            <center><input type="text" class="form-control" style="width: 70%;" placeholder="Cari product" name="katakunci"></center>
                            </form>
                            <br>
						</div>
					</div>
					<!-- .col-md-6 end -->
				</div>
				<!-- .row end -->
                <h5>
                <?= $text ?>
                </h5>
				<div class="row">
					<!--  Product #1  -->
                    <?php foreach($products as $list):?>
					<div class="col-xs-12 col-sm-4 col-md-4">
                        <a href="<?= base_url('products/detail/'.$list['id'])?>">
						<div class="testimonial-panel wow fadeInUp" data-wow-duration="1s">
							<div class="testimonial-body">
								<div class="testimonial--body">
									<!-- <p>We have worked with appify.As we have grown and evolved, appfiy has created all of our profit.What I value most about our relationship is that appfiy knows us and our business.</p> -->
                                    <!-- <img src="<?= base_url('assets/product')?>/<?= $list['gambar']?>"> -->
								</div>
								<div class="testimonial--meta">
									<div class="testimonial--author pull-left">
										<h5><?= $list['model']?></h5>
									</div>
									<div class="testimonial--rating pull-right">
										<h5>
                                            <?php 
                                            if ($list['tipe'] == 1) {
                                                echo "Processors";
                                            } else if ($list['tipe'] == 2) {
                                                echo "Graphics";
                                            } else {
                                                echo "Accelerators";
                                            }
                                            ?>
                                        </h5>
									</div>
								</div>
							</div>
						</div>
					</div>
                    </a>
                    <?php endforeach?>
				</div>
				<!-- .row end -->
			</div>
			<!-- .container End -->
		</section>
		<!-- #reviews End-->

<?= $this->endSection()?>
<?= $this->include('layout/footer') ?>