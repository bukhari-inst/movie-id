<?= $this->include('parts/head'); ?>
<!-- ***** Header Area Start ***** -->
<?= $this->include('parts/header'); ?>
<!-- ***** Header Area End ***** -->

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-content">

                <!-- ***** Banner Start ***** -->
                <div class="main-banner">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="header-text">
                                <h6>Welcome To Movie ID</h6>
                                <h4><em>Browse</em> Our Popular Movies Here</h4>
                                <div class="main-button">
                                    <a href="#most-popular">Browse Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Banner End ***** -->

                <!-- ***** Most Popular Start ***** -->
                <div class="most-popular" id="most-popular">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section">
                                <h4><em>Most Popular</em> Right Now</h4>
                            </div>
                            <div class="row">
                                <?php foreach ($movie as $mv) : ?>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="https://image.tmdb.org/t/p/w500<?= $mv->poster_path ?>" alt="">
                                            <?php $string = $mv->title ?>
                                            <h4><?= $string = character_limiter($string, 8); ?><br><span>Release: </span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> <?= $mv->vote_average ?></li>
                                                <?php
                                                $newDate = date("d-m-Y", strtotime($mv->release_date));
                                                ?>
                                                <li><?= $newDate ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <div class="col-lg-12">
                                    <div class="main-button">
                                        <a href="#">Discover Popular</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Most Popular End ***** -->
            </div>
        </div>
    </div>
</div>

<?= $this->include('parts/footer'); ?>
<?= $this->include('parts/end-footer'); ?>

</body>

</html>