<section id="header" class="appear header">
    <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(65, 118, 48, 0.8);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="fa fa-bars color-white"></span>
            </button>
            <h1>
                <a class="navbar-brand" href="<?= site_url("home") ?>" data-0="line-height:90px;" data-300="line-height:50px;">
                    Mountain Trekkers
                </a>
            </h1>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
                <li class="active"><a href="<?= site_url(Home::class) ?>">Home</a></li>
                <li><a href="<?= site_url(Events::class) ?>">Upcoming Events</a></li>
                <li><a href="<?= site_url(Pages::class . "/1/about_us") ?>">About Us</a></li>
                <li><a href="<?= site_url(Contacts::class) ?>">Contact Us</a></li>
            </ul>
        </div>
    </div>
</section>