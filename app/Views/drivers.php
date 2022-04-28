
<?= $this->include('layout/header') ?>
<?= $this->include('layout/nav') ?>
<?= $this->section('isi')?>
<section id="feature3" class="section feature feature-left feature-left-circle">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12">
            <div class="row">
                        <div class="col-sm text-center">
                            <h1 class="div-heading display-4 wow fadeInUp" data-wow-duration="1s">Drivers</h1>
                        </div>
                    </div>
<table id="example" class="table table-striped table-bordered wow fadeInUp" data-wow-duration="1s" style="width:100%">
        <thead>
            
            <tr>
                <th>No</th>
                <th>Model</th>
                <th>Type</th>
                <th>Series</th>
                <th>Product</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; foreach($drivers as $row):?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?php 
                                            if ($row['model'] == 1) {
                                                echo "Processors";
                                            } else if ($row['model'] == 2) {
                                                echo "Graphics";
                                            } else {
                                                echo "Accelerators";
                                            }
                                            ?></td>
                <td><?= $row['type']?></td>
                <td><?= $row['series']?></td>
                <td><?= $row['product']?></td>
            </tr>
            <?php endforeach?>
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Model</th>
                <th>Type</th>
                <th>Series</th>
                <th>Product</th>
            </tr>
        </tfoot>
    </table>
            </div></div></div></section>
    <?= $this->endSection()?>
<?= $this->include('layout/footer') ?>