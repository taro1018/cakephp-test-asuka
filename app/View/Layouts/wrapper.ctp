<!DOCTYPE html>
<html lang="ja">
    <head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!--<meta charset="UTF-8" />-->
		<?php echo $this->Html->charset(); ?>
        <title><?php echo $title_for_layout; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="kohei okuda" />
        <meta name="generator" content="" />

		<!--[if lt IE 9]>
		<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="icon/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="icon/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="icon/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="icon/favicon.png">

        <!-- styles -->
		<?php echo $this->Html->css('reset'); ?>
		<?php echo $this->Html->css('base'); ?>
        <!--<link href="css/reset.css" rel="stylesheet" type="text/css" />-->
        <!--<link href="css/base.css" rel="stylesheet" type="text/css" />-->

        <!-- javascript -->
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<?php echo $scripts_for_layout; ?>
        <!--<script src="js/base.js" type="text/javascript"></script>-->
    </head>

    <body>
		<!--.wrapper-->
		<div class=".wrapper">
			
			<!--#.header-->
			<header id="header" class="header">
				header
			</header>
			<!--/#.header-->

			<div class="content">
				<main id="main" class="main">
					<?php echo $content_for_layout; ?>
				</main>
			</div>

			<!--#.footer-->
			<footer id="footer" class="fotter">
				footer
			</footer>
			<!--/#.footer-->
			
		</div>
		<!--/.wrapper-->
    </body>
</html>
