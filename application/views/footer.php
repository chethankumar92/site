<section id="footer" class="section footer" style="bottom: 0px;">
    <div class="container">
        <div class="row text-center">
            <?php if (isset($pages) && is_array($pages)): $count = count($pages); ?>
                <?php foreach ($pages as $page): ?>
                    <div class="col-sm-<?= floor(12 / $count) ?>">
                        <a href="<?= site_url(Pages::class . "/" . $page->getId() . "/" . str_replace(" ", "_", strtolower(trim($page->getTitle())))) ?>"><?= ucwords(strtolower(trim($page->getTitle()))) ?></a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
            <div class="col-sm-12 align-center">
                <ul class="social-network social-circle">
                    <li>
                        <a href="https://www.facebook.com/Trekkmountain/" target="_blank" class="icoFacebook" title="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="icoTwitter" title="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/108283276011745058332" target="_blank" class="icoGoogle" title="Google +">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                </ul>				
            </div>
        </div>
        <div class="row align-center copyright">
            <div class="col-sm-12">
                <p>&copy; Mountain Trekkers</p>
                <div class="credits">
                    Developed by <a href="https://remote.com/chethan_kumar" target="_blank">Chethan Kumar</a>
                </div>
            </div>
        </div>
    </div>
    <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>	
</section>