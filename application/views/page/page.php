<section id="section-contact" class="section appear clearfix">
    <div class="container">
        <div class="row mar-bot40">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <h2 class="section-heading animated" data-animation="bounceInUp"><?= $page->getTitle() ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?= html_entity_decode($page->getContent()) ?>
        </div>
    </div>
</section>