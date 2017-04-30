<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title><?= $title ?></title>
        <?php foreach ($meta as $tag): ?>
            <meta <?php foreach ($tag as $key => $value): ?>
                <?= $key . '="' . $value . '"' ?>
                <?php endforeach; ?>>
            <?php endforeach; ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <?php foreach ($plugins["css"] as $plugin): ?>
            <?= plugin($plugin, "css"); ?>
        <?php endforeach; ?>
        <?php foreach ($plugins["scss"] as $plugin): ?>
            <?= plugin($plugin, "scss"); ?>
        <?php endforeach; ?>
        <?php foreach ($styles as $style): ?>
            <?= css($style); ?>
        <?php endforeach; ?>
    </head>

    <body>
        <!-- Site wrapper -->
        <div class="wrapper" style="background: #fff;">
            <?= $header ?>
            <?= $body ?>
            <?= $footer ?>
        </div>
        <!-- ./wrapper -->
    </body>

    <?php foreach ($plugins["js"] as $plugin): ?>
        <?= plugin($plugin, "js"); ?>
    <?php endforeach; ?>
    <!--<script src="https://maps.google.com/maps/api/js?sensor=true"></script>-->
    <?php foreach ($scripts as $script): ?>
        <?= js($script); ?>
    <?php endforeach; ?>
</html>