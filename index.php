<?php require_once('prototype.php'); ?>
<?php $page = new P; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/<?= $page->stylesheet ?>">
    <script src="js/vendor/modernizr-2.7.1.min.js"></script>
</head>
<body>

	<?php $page->layout($page); ?>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/script.min.js"></script>

    <?php if(DEV === true): ?>
        <script type="text/javascript" src="js/vendor/shCore.js"></script>
        <script type="text/javascript" src="js/vendor/shBrushPhp.js"></script>
        <script type="text/javascript">

            (function($){
                $('.view-code button').click(function() {
                    $(this).parent().find('.code').slideToggle();
                });
            })(jQuery);          

            SyntaxHighlighter.all()

        </script>
    <?php endif; ?>
</body>
</html>

