<?php
$baseUrl = Yii::app()->request->baseUrl;
//echo $baseUrl;
$clientRes = Yii::app()->getClientScript();
//$clientRes->registerCoreScript('jquery');
$clientRes->registerCoreScript('site_resource');

//$clientRes->registerScriptFile($baseUrl.'/js/main.js');
//$clientRes->registerCssFile($baseUrl.'/css/reset.css');
//$clientRes->registerCssFile($baseUrl.'/css/template-free.css');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content=""/>
	<!-- <link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/template-free.css">
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script> -->
</head>
<body>

	<header class="trasparent_nav">
		<div class="wrapper">
			<div class="logo">
				<a href="<?php echo Yii::app()->createUrl('/freeTemplate/index'); ?>"><img src="<?php echo $baseUrl;?>/img/logo.png" alt="Fertile"></a>
			</div>

			<nav>
				<ul>
                    <li><a href="<?php echo Yii::app()->createUrl('/site/index'); ?>">Back Old</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('/freeTemplate/ourStory'); ?>">Our Story</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">Journal</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header><!-- End trasparent_nav -->

	<header class="fixed_nav">
		<div class="wrapper">
			<div class="logo">
				<a href="#"><img src="<?php echo $baseUrl;?>/img/logo_small.png" alt="Fertile"></a>
			</div>

			<nav>
				<ul>
                    <li><a href="<?php echo Yii::app()->createUrl('/site/index'); ?>">Back Old</a></li>
					<li><a href="<?php echo Yii::app()->createUrl('/freeTemplate/ourStory'); ?>">Our Story</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">Journal</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header><!-- End fixed_nav -->

	<?php echo $this->renderPartial("//partials/topImg", array()); ?>

	<?php echo $content; ?>

	<?php echo $this->renderPartial("//partials/logos", array()); ?>

	<footer>
		<div class="wrapper">
			<section class="cta cta_footer">
				<p>Have a project in mind?  We would love to hear from you!</p>
				<a href="#">Get in touch with us</a>
			</section>

			<div class="footer_widget">
					<div class="f_cols">
						<h3>Location</h3>
						<p>3301 New Mexico Avenue Washington, DC 20016 <span class="phone">(202) 537-0787</span></p> 	
						<ul class="sm">
							<li><a class="fb" href="#"></a></li>
							<li><a class="twitter" href="#"></a></li>
							<li><a class="dribbble" href="#"></a></li>
						</ul>
					</div>	

					<div class="f_cols">
						<h3>Company</h3>
						<ul>
							<li><a href="#">Our Story</a></li>
							<li><a href="#">Mission</a></li>
							<li><a href="#">Journal</a></li>
							<li><a href="#">Careers</a></li>
						</ul>	
					</div>	

					<div class="f_cols">
						<h3>Support</h3>
						<ul>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Policies</a></li>
						</ul>	
					</div>	

					<div class="f_cols">
						<h3>Fertile</h3>
						<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia est eserunt mollit anim laborum.</p>
					</div>
			</div>

			<p class="rights">© 2014 Fertile  -  All Rights Reserved  -  Find more free Templates at <a href="http://pixelhint.com">Pixelhint.com</a></p>	

		</div>
	</footer><!-- End Footer -->

	        <script src='../ga.js'></script>
	</body>
</html>
