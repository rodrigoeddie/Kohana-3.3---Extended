<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <base href="<?php echo URL::base(); ?>">
    <title><?php echo (isset($title) ? $title. ' - ' : '') . Kohana::$config->load('site.title') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="<?php echo Kohana::$config->load('site.description') ?>">
    <meta name="keywords" content="<?php echo Kohana::$config->load('site.keywords') ?>">
    <meta name="author" content="<?php echo Kohana::$config->load('site.author') ?>">

    <!-- Le styles -->
    <?php Template::compile_css() ?>
    <link rel="stylesheet" href="media/css/print.css" type="text/css" media="print">

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="media/img/favicon.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="media/img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="media/img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="media/img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="media/img/apple-touch-icon-57-precomposed.png">

    
    <!-- cdn -->
    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.js"></script>-->
    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.4.1/less.min.js"></script>-->

    <!-- local -->
    <script src="media/js/vendor/modernizr.js"></script>
    <script src="media/js/vendor/less.min.js"></script>
    
</head>
<body>

    <?php echo $header ?>
    <?php echo $content ?>
    <?php echo $footer ?>

    <!-- cdn -->
    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
    <!-- local -->
    <script src="media/js/vendor/jquery.min.js"></script>

    <script>var PIE = null;</script>
    <!--[if lte IE 8]><script src="media/js/vendor/pie-min.js"></script><![endif]-->

    <?php Template::compile_js() ?>

    <?php if(Kohana::$environment === Kohana::PRODUCTION): ?>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        <?php echo Kohana::$config->load('site.GA') ?>
        ga('send', 'pageview');
    </script>
    <?php endif; ?>
</body>
</html>
