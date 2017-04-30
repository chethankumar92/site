<section class="slider">		
    <div id="about-slider">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators visible-xs">
                <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-slider" data-slide-to="1"></li>
                <li data-target="#carousel-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">						
                    <img src="<?= img_url() ?>/one.jpg" class="img-responsive" alt="">
                </div>
                <div class="item">
                    <img src="<?= img_url() ?>/two.jpg" class="img-responsive" alt="">
                </div>
                <div class="item">
                    <img src="<?= img_url() ?>/three.jpg" class="img-responsive" alt="">
                </div>
                <div class="item">
                    <img src="<?= img_url() ?>/four.jpg" class="img-responsive" alt="">
                </div>
                <div class="item">
                    <img src="<?= img_url() ?>/five.jpg" class="img-responsive" alt="">
                </div>
            </div>
            <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                <i class="fa fa-angle-left"></i> 
            </a>
            <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
                <i class="fa fa-angle-right"></i> 
            </a>
        </div>
    </div>
</section>