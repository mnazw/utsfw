<?= $this->include('layout/header') ?>
<?= $this->include('layout/nav') ?>
<?= $this->section('isi')?>

<!-- Feature #3
		============================================= -->
		<section id="feature3" class="section feature feature-left feature-left-circle">
			<div class="container">
				<div class="row clearfix">
					<div class="col-xs-12 col-sm-12">
                    <div class="row">
                        <div class="col-sm text-center">
                            <h1 class="div-heading display-4 wow fadeInUp" data-wow-duration="1s">Technology</h1>
                        </div>
                    </div>
                    <table class="table table-striped wow fadeInUp" data-wow-duration="1s">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Teknologi</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Gambar</th>
                </tr>
            </thead>
            <tbody>
                 <?php
                    $url = 'http://devel.crissad.com/api/amd';
                    $data = json_decode(file_get_contents($url), true);
                    for ($x = 0; $x <= 9; $x++) {
                    $teknologi = $data[$x]['teknologi'];
                    $deskripsi = $data[$x]['deskripsi'];
                    $gambar = $data[$x]['thumbnail'];
                    // echo $sellorderprice;
                    $xi = $x+1;
                    
                ?>
                <tr>
                    <th scope="row"><?= $xi?></th>
                    <td><?= $teknologi ?></td>
                    <td><?= $deskripsi ?></td>
                    <td scope="row" style="width: fit-content;"><img src="<?= $gambar?>" alt="" style="width: 100%;"></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
                    </div>
                </div>
            </div>
		</section>
		<!-- #feature3 end -->

<?= $this->endSection()?>
<?= $this->include('layout/footer') ?>