<?= $this->include('layout/header') ?>
<?= $this->include('layout/nav') ?>
<?= $this->section('isi')?>

<!-- Feature #3
		============================================= -->
<section id="feature3" class="section feature feature-left feature-left-circle">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm text-center">
                            <h1 class="div-heading display-4 wow fadeInUp" data-wow-duration="1s">Contact US</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 wow fadeInUp" data-wow-duration="1s">
                            <h5>Facebook: <br> 
                                <a href="http://www.facebook.com/amd"> <small class="text-muted">AMD</small></a>
                            </h5>
                            <h5>Twitter: <br>
                                <a href="https://twitter.com/amd"> <small class="text-muted">AMD</small></h5></a>
                            <h5>Contact: <br>
                                <a href="https://twitter.com/amd"><small class="text-muted">AMD</small></h5></a>
                        </div>
                        <div class="col-md-9">

                            <!-- <p><iframe width="600" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtcNatvRsrjsRA38LEBPt_78&key=..." allowfullscreen></iframe></p> -->
                            <div class="text-center">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46254232.080225654!2d-42.71912674999998!3d44.96126425000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a2855555555%3A0x623e5b0a2201c413!2sAMD%20International%20Sales%20And%20Service!5e0!3m2!1sen!2sid!4v1651117607483!5m2!1sen!2sid" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- #feature3 end -->

<?= $this->endSection()?>
<?= $this->include('layout/footer') ?>