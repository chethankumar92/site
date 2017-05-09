<section id="section-works" class="section appear clearfix">
    <div class="container">
        <div class="row mar-bot40">
            <div class="col-md-offset-1 col-md-10">
                <div class="section-header">
                    <?php $images = $event->getImages() ?>
                    <div id="event-image-arousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php foreach ($images as $key => $image): ?>
                                <li data-target="#event-image-arousel" data-slide-to="<?= $key ?>" class="<?= !$key ? 'active' : '' ?>"></li>
                            <?php endforeach; ?>
                        </ol>
                        <div class="carousel-inner" style="max-height: 400px;">
                            <?php foreach ($images as $key => $image): ?>
                                <div class="item <?= !$key ? 'active' : '' ?>">
                                    <img src="<?= $image->url ?>" alt="<?= $image->name ?>" class="img-responsive" style="margin: auto;">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <a class="left carousel-control" href="#event-image-arousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#event-image-arousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <h2 class="section-heading animated" data-animation="bounceInUp"><?= $event->getName() ?></h2>
                    <p><?= $event->getDescription() ?>&nbsp;</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <ul class="list-group text-right">
                    <li class="list-group-item list-header text-center">
                        Trek details
                    </li>
                    <li class="list-group-item">
                        <b class="pull-left">From date:</b>&nbsp;<?= date("d M, Y", strtotime($event->getFrom_date())) ?>
                    </li>
                    <li class="list-group-item">
                        <b class="pull-left">To date:</b>&nbsp;<?= date("d M, Y", strtotime($event->getTo_date())) ?>
                    </li>
                    <li class="list-group-item">
                        <b class="pull-left">Trek distance:</b>&nbsp;<?= $event->getTrek_distance() ?>
                    </li>
                    <li class="list-group-item">
                        <b class="pull-left">From bangalore:</b>&nbsp;<?= $event->getDistance_from_bangalore() ?>
                    </li>
                    <li class="list-group-item">
                        <b class="pull-left">Cost:</b>&nbsp;<?= $event->getCost() ?>
                    </li>
                    <li class="list-group-item">
                        <b class="pull-left">Grade:</b>&nbsp;<?= $event->getGrade()->getName() ?>
                    </li>
                </ul>
            </div>
            <?php if (trim($event->getCost_includes())): ?>
                <div class="col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item list-header text-center">
                            Cost includes
                        </li>
                        <li class="list-group-item">
                            <?= $event->getCost_includes() ?>&nbsp;
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if (trim($event->getCost_excludes())): ?>
                <div class="col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item list-header text-center">
                            Cost excludes
                        </li>
                        <li class="list-group-item">
                            <?= $event->getCost_excludes() ?>&nbsp;
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if (trim($event->getTentative_schedule())): ?>
                <div class="col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item list-header text-center">
                            Tentative schedule
                        </li>
                        <li class="list-group-item">
                            <?= $event->getTentative_schedule() ?>&nbsp;
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if (trim($event->getAccommodation())): ?>
                <div class="col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item list-header text-center">
                            Accommodation
                        </li>
                        <li class="list-group-item">
                            <?= $event->getAccommodation() ?>&nbsp;
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if (trim($event->getTransportation())): ?>
                <div class="col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item list-header text-center">
                            Transportation
                        </li>
                        <li class="list-group-item">
                            <?= $event->getTransportation() ?>&nbsp;
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if (trim($event->getFood())): ?>
                <div class="col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item list-header text-center">
                            Food
                        </li>
                        <li class="list-group-item">
                            <?= $event->getFood() ?>&nbsp;
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if (trim($event->getThings_to_carry())): ?>
                <div class="col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item list-header text-center">
                            Things to carry
                        </li>
                        <li class="list-group-item">
                            <?= $event->getThings_to_carry() ?>&nbsp;
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if (trim($event->getCancellation_policy())): ?>
                <div class="col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item list-header text-center">
                            Cancellation policy
                        </li>
                        <li class="list-group-item">
                            <?= $event->getCancellation_policy() ?>&nbsp;
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if (trim($event->getRefund_policy())): ?>
                <div class="col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item list-header text-center">
                            Refund policy
                        </li>
                        <li class="list-group-item">
                            <?= $event->getRefund_policy() ?>&nbsp;
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if (trim($event->getTerms_and_conditions())): ?>
                <div class="col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item list-header text-center">
                            Terms and conditions
                        </li>
                        <li class="list-group-item">
                            <?= $event->getTerms_and_conditions() ?>&nbsp;
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>