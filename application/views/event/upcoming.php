<section id="section-works" class="<?= isset($section) && $section ? 'section' : '' ?> appear clearfix">
    <div class="container">
        <div class="row mar-bot40">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <h2 class="section-heading animated" data-animation="bounceInUp">Upcoming Events</h2>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (isset($events) && is_array($events)): ?>
                <nav id="filter" class="col-md-12 text-center">
                    <ul>
                        <?php $classes = array(); ?>
                        <li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
                        <?php foreach ($events as $event): $class = date("M-Y", strtotime($event->getFrom_date())); ?>
                            <?php if (!in_array($class, $classes)): $classes[] = $class; ?>
                                <li><a href="#"  class="btn-theme btn-small" data-filter=".<?= $class ?>" ><?= date("M, Y", strtotime($event->getFrom_date())) ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </nav>
                <div class="col-md-12">
                    <div class="row">
                        <div class="portfolio-items isotopeWrapper clearfix">
                            <?php foreach ($events as $ekey => $event): ?>
                                <?php
                                $images = $event->getImages();
                                $image = is_array($images) ? reset($images) : NULL;
                                ?>
                                <article class="col-md-12 isotopeItem <?= date("M-Y", strtotime($event->getFrom_date())) ?>">
                                    <div class="row">
                                        <?php if ($ekey % 2 === 0): ?>
                                            <div class="col-md-6">
                                                <h2 class="text-uppercase text-center">
                                                    <a href="<?= site_url(Events::class . "/details/" . $event->getId() . "/" . str_replace(" ", "_", $event->getName())) ?>" class="btn btn-link"><?= $event->getName() ?></a>
                                                </h2>
                                                <p><?= $event->getDescription() ?></p>
                                            </div>
                                        <?php endif; ?>
                                        <div class="col-md-6">
                                            <div class="portfolio-item">
                                                <div class="wow rotateInUpLeft" data-animation-delay="4.8s">
                                                    <img src="<?= is_object($image) ? $image->url : '' ?>" alt="<?= is_object($image) ? $image->name : '' ?>" style="height: 250px;"/>
                                                </div>
                                                <div class="portfolio-desc align-center">
                                                    <div class="folio-info">
                                                        <h5>
                                                            <a href="<?= site_url(Events::class . "/details/" . $event->getId() . "/" . str_replace(" ", "_", $event->getName())) ?>" class="btn btn-link faa-float animated"><?= $event->getName() ?></a>
                                                        </h5>
                                                        <?php foreach ($images as $ikey => $image): ?>
                                                            <a href="<?= $image->url ?>" class="fancybox" rel="group-<?= $ekey ?>">
                                                                <?php if (!$ikey): ?>
                                                                    <i class="fa fa-image fa-2x"></i>
                                                                <?php endif; ?>
                                                            </a>
                                                        <?php endforeach; ?>
                                                    </div>										   
                                                </div>
                                            </div>
                                        </div>
                                        <?php if ($ekey % 2 === 1): ?>
                                            <div class="col-md-6">
                                                <h2 class="text-uppercase text-center">
                                                    <a href="<?= site_url(Events::class . "/details/" . $event->getId() . "/" . str_replace(" ", "_", $event->getName())) ?>" class="btn btn-link"><?= $event->getName() ?></a>
                                                </h2>
                                                <p><?= $event->getDescription() ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="col-md-12 text-center text-muted">
                    We are updating events. please be patient and visit us after some time..
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>