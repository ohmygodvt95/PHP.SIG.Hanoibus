<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Semantic Innovation Group - Nhóm nghiên cứu chuyên sâu về công nghệ ngữ nghĩa, xử lý dữ liệu internet và tính toán di động">
		<META NAME="keywords" CONTENT="Semantic Innovation Group, Semantic, Innovation, Group, icompation, ngữ nghĩa, easybus, bus, ha noi bus">
		<meta name="Author" content="LengKeng, E-mail: ohmygodvt95@gmail.com">
		<meta name="copyright" content="Copyright <?php echo date('Y');?> by Semantic Innovation Group">
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>asset/images/favicon.png" />
		<meta property="og:title" content="Semantic Innovation Group" />
        <meta property="og:locale" content="vi_VN" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>" />
        <meta property="og:image" content="<?php echo base_url();?>asset/images/img.jpg" />
        <meta property="og:description" content="Semantic Innovation Group - The team specializes in semantic technology, Internet-based data processing and mobile computing." />
        <meta property="og:site_name" content="Semantic Innovation Group" />
        <meta property="fb:admins" content="" />
		<title>Semantic Innovation Group</title>
		<!-- Load CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/reset.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/animate.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/media.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/owl.theme.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/owl.transitions.css">
		<!-- Load customize font -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500|Raleway:400,500' rel='stylesheet' type='text/css'>
		<!-- Style -->
		<style>
		ul{
			list-style: none;
		}
		.owl-wrapper-outer{
			width: 100%!important;
		}
		.slider{
			padding-left: 0px;
			width: 100%!important;
		}
		.owl-theme  .owl-prev{
			background-color: gray!important;
			position: absolute;
		 	left: -5px;
		 	top: 40%;
		 	background-color: gray;
		}
		.owl-theme .owl-controls .owl-buttons div{
			color: #000;
			height: 50px;
			width: 100px;
			line-height: 50px;
			text-align: center;
			border-radius: 5px;
			background-color: #fff;
		}
		.owl-theme  .owl-next{
			background-color: gray!important;
		 	position: absolute;
		 	right: -5px;
		 	top: 40%;
		}
		#owl-demo .item{
			z-index: 0;
		   display: block;
		   width: 100%;
		   height: auto;
		}
		#owl-product .owl-controls .owl-buttons div{
			background-color: gray;
		}
		li.item{
			width: 100%;
		}
		/*responsive 768*/
@media (max-width: 768px) {
	.owl-theme .owl-controls .owl-buttons div {
		height: 30px;
		width: 50px;
		font-size: 16px;
		line-height: 30px;
	}
	.owl-theme .owl-controls .owl-buttons i{
		font-size: 16px;
	}
}
		</style>
	</head>
	<body class="particle">
		<!-- Preloader -->
		<div id="loader-wrapper">
			<div id="loader"></div>
		</div>
		<!-- Preloader End -->
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll scroll" href="#page-top" scroll="intro" title="Semantic Innovation Group">S . I . G</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a class=""  href="#top" scroll="top" title="Home"><?php echo $this->lang->line('menu_home');?></a>
						</li>
						<li>
							<a class="page-scroll scroll"  href="#products" scroll="products" title="Product"><?php echo $this->lang->line('menu_product');?></a>
						</li>
						<li>
							<a class="page-scroll scroll" href="#about" scroll="about" title="About"><?php echo $this->lang->line('menu_about');?></a>
						</li>
						<li>
							<a class="page-scroll scroll" href="#contact" scroll="contact" title="Contact"><?php echo $this->lang->line('menu_contact');?></a>
						</li>
						<li><a class="lang" title="Language" href="<?php if($lang == "en") echo site_url().'?lang=vi'; else echo site_url().'?lang=en';?>"><img src="<?php echo base_url("asset/images/"); if($lang == 'vi') echo "/en.gif"; else echo "/vi.gif";?>" height="20" alt="" style="margin-top: -2px"></a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		<div class="top hidden"></div>
		<section id="intro">
			<div id="intro-bg">
			</div>
			<div class="intro">
				<div class="container">
					<div class="intro-header">
						<h1 class="text-center wow fadeInDown" data-wow-delay="0.5s"><span class="text-bold wow fadeIn" data-wow-delay="1.5s">S</span>emantic <span class="text-bold wow fadeIn" data-wow-delay="1.7s">I</span>nnovation <span class="text-bold wow fadeIn" data-wow-delay="2s">G</span>roup</h1>
						<h4 class="text-center wow fadeInDown" data-wow-delay="1s"><?php echo $this->lang->line('home_sologan');?></h4>
					</div>
					<div class="intro-body" >
						<h2 class="text-center">
						<a href="#products" class="scroll" scroll="products" title="Product">
							<span class="fa-stack fa-lg wow fadeIn" data-wow-delay="1.5s">
								<i class="fa fa-circle fa-stack-2x ground"></i>
								<i class="fa fa-angle-double-down fa-stack-1x fa-inverse click" style="color: black;" title="Click me!"></i>
							</span>
						</a>
						</h2>
					</div>
				</div>
			</div>
		</section>
		<section  id="products"  style="background-color:#EBE9E9">
			<div class="banner">
				<div class="outside">
					<h3 class="text-center wow fadeInDown" data-wow-delay="0.5s"><?php echo $this->lang->line('product_header');?></h3>
				</div>
				<ul class="slider" >
					<li class="item">
						<div class="products-body">
							<!-- products One -->
							<div class="products">
								<!-- Overlay -->
								<div class="container">
									<div class="row">
										<!-- productss Content -->
										<div class="col-sm-6 col-sm-push-6 col-md-6 col-md-push-6">
											<!-- Heading -->
											<div class="heading">
												<h2 class="text-center"><a href="#" title="Nhiều thông tin hơn">Easy Bus</a></h2>
												<p class="subheadline text-center">
												<?php echo $this->lang->line('easybus_h1');?>
													<br><a href="http://172.245.22.156:8080/EasyBusWS/"><?php echo $this->lang->line('see_more');?></a>
												</p>
											</div>
											<!-- Heading End -->
											<hr>
											<!-- productss List -->
											<div class="products-block">
												<i class="fa fa-rocket i"></i>
												<h3><?php echo $this->lang->line('prosuct_feature');?></h3>
												<ul class="features">
													<li><?php echo $this->lang->line('easybus_h2');?></li>
													<li><?php echo $this->lang->line('easybus_h3');?></li>
													<li><?php echo $this->lang->line('easybus_h4');?></li>
													<li><?php echo $this->lang->line('easybus_h5');?></li>
													<li><?php echo $this->lang->line('easybus_h6');?></li>
												</ul>
											</div>
											<div class="products-block">
												<i class="fa fa-gamepad i"></i>
												<h3><?php echo $this->lang->line('product_download');?></h3>
												<ul class="dw-btns">
													<li class="hidden"><a title="Download for iOS"><i class="fa fa-apple"></i></a></li>
													<li><a title="Download for Android" href="https://play.google.com/store/apps/details?id=com.hieund"><i class="fa fa-android"></i></a></li>
													<li><a title="Download for Windows" href="https://www.microsoft.com/en-us/store/apps/easy-bus/9nblgggzn8c9"><i class="fa fa-windows"></i></a></li>
												</ul>
											</div>
											<!-- productss List End -->
										</div>
										<div class="col-sm-6 col-sm-pull-6 col-md-6 col-md-pull-6">
											<img class="img-responsive first" src="https://store-images.s-microsoft.com/image/apps.53135.13510798883405828.2c5d05c3-bd67-42bf-b30f-29f507d62a40.9e0a8031-733b-409f-b972-9f93a98ebe1f?w=712&h=400" width="200">
											<img class="img-responsive second"  src="https://store-images.s-microsoft.com/image/apps.38431.13510798883405828.8f045328-e8b6-456c-9dcd-aa2b442e722f.d1395dc5-b3cd-4ef0-a4cb-b39178b0c6a9?w=712&h=400" width="200">
											<img class="img-responsive three"  src="https://store-images.s-microsoft.com/image/apps.21200.13510798883405828.e219dd16-4780-4690-80c2-b1101c0cb814.9ac8b861-d3a8-4bee-a8af-4912893ed434?w=712&h=400" width="200">
										</div>
										<!-- productss Content End -->
									</div>
									<!-- .row End -->
								</div>
								<!-- .container End -->
							</div>
							<!-- products One End -->
						</div>
					</li>
					<li class="item">
						<div class="products-body">
							<!-- products One -->
							<div class="products">
								<!-- Overlay -->
								<div class="container">
									<div class="row">
										<!-- productss Content -->
										<div class="col-sm-6 col-sm-push-6 col-md-6 col-md-push-6">
											<!-- Heading -->
											<div class="heading">
												<h2 class="text-center"><a href="#" title="Nhiều thông tin hơn">Diem Den Viet(iCompanion)</a></h2>
												<p class="subheadline text-center">Diem den Viet (<?php echo $this->lang->line('icompanion_h1');?>
													<br><a href=""><?php echo $this->lang->line('see_more');?></a>
												</p>
											</div>
											<!-- Heading End -->
											<hr>
											<!-- productss List -->
											<div class="products-block">
												<i class="fa fa-rocket i"></i>
												<h3><?php echo $this->lang->line('product_feature');?></h3>
												<ul class="features">
													<li><?php echo $this->lang->line('icompanion_h2');?></li>
													<li><?php echo $this->lang->line('icompanion_h3');?></li>
													<li><?php echo $this->lang->line('icompanion_h4');?></li>
													<li><?php echo $this->lang->line('icompanion_h5');?></li>
													<li><?php echo $this->lang->line('icompanion_h6');?></li>
												</ul>
											</div>
											<div class="products-block">
												<i class="fa fa-gamepad i"></i>
												<h3><?php echo $this->lang->line('product_download');?></h3>
												<ul class="dw-btns">
													<li><a title="Download for iOS" href="https://itunes.apple.com/bh/app/diem-den-viet/id782438041"><i class="fa fa-apple"></i></a></li>
													<li><a title="Download for Android" href="https://play.google.com/store/apps/details?id=hust.se.vtio.icompanion"><i class="fa fa-android"></i></a></li>
													<li><a title="Download for Windows" href="https://www.microsoft.com/en-us/store/apps/%C4%91iem-%C4%91en-viet/9nblggh09f9w"><i class="fa fa-windows"></i></a></li>
												</ul>
											</div>
											<!-- productss List End -->
										</div>
										<div class="col-sm-6 col-sm-pull-6 col-md-6 col-md-pull-6">
											<img class="img-responsive first" src="https://store-images.s-microsoft.com/image/apps.62586.13510798882877394.ff5c24f2-0a83-4860-8709-00fcd30c5509.c2cfd47b-eff4-4f3e-b58a-8fcdbffb6645?w=712&h=400" width="200">
											<img class="img-responsive second"  src="https://store-images.s-microsoft.com/image/apps.26014.13510798882877394.3e606fd8-445c-4e7b-a94c-a971e107f0bf.c0da7d81-1a39-4300-b39c-b3786adc6f46?w=712&h=400" width="200">
											<img class="img-responsive three"  src="http://a1.mzstatic.com/us/r30/Purple1/v4/7f/42/90/7f42908b-617f-f5a9-4d13-8d019264c756/screen568x568.jpeg" width="200">
										</div>
										<!-- productss Content End -->
									</div>
									<!-- .row End -->
								</div>
								<!-- .container End -->
							</div>
							<!-- products One End -->
						</div>
					</li>
				</ul>
			</div>
		</section>
		<section id="about">
			<div class="about container">
				<div class="about-intro">
					<h1 class="text-center wow fadeIn"  data-wow-delay="0.25s" title="About"><?php echo $this->lang->line('about_header');?></h1>
					<h4 class="text-center wow fadeIn" data-wow-delay="0.5s"><?php echo $this->lang->line('about_sologan');?></h4>
				</div>
				<div class="row about-info  wow fadeIn" data-wow-delay="0.5s">
					<div class="col-sm-4">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="text-center"><i class="fa fa-fw fa-phone fa-2x"></i></h3>
								<p class="text-center" title="Phone">+84 xxx xxx xxx</p>
							</div>
							<div class="col-sm-12">
								<h3 class="text-center"><i class="fa fa-fw fa-send fa-2x"></i></h3>
								<p class="text-center" title="Email">caotuandung@gmail.com</p>
							</div>
							<div class="col-sm-12">
								<h3 class="text-center"><i class="fa fa-fw fa-map-marker fa-2x"></i></h3>
								<p class="text-center" title="Address">1 Dai Co Viet Road, Hanoi, Viet Nam</p>
							</div>
						</div>
					</div>
					<div class="col-sm-8 introduction  wow fadeIn" data-wow-delay="0.5s">
						<h2 class="text-center" title="Introduction"><?php echo $this->lang->line('about_introduction');?></h2>
						<p class="" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;text-shadow:0 1px 1px rgba(0,0,0,.3);"><?php echo $this->lang->line('about_intro_h1');?>
						<ul style="list-style: outside; font-size: 16px" class="about-more-info">
							<li><?php echo $this->lang->line('about_intro_h2');?></li>
							<li><?php echo $this->lang->line('about_intro_h3');?></li>
							<li><?php echo $this->lang->line('about_intro_h4');?></li>
							<li><a href="#" title="see more"><?php echo $this->lang->line('see_more');?></a></li>
						</ul></p>
					</div>
				</div>
			</div>
		</section>
		<!-- Contact -->
		<section id="contact">
			<div class="contact container">
				<div class="contact-intro">
					<h1 class="text-center wow fadeInDown"  data-wow-delay="0.25s"><?php echo $this->lang->line('contact_header');?></h1>
					<h4 class="text-center wow fadeInDown"  data-wow-delay="0.25s"><?php echo $this->lang->line('contact_sologan');?></h4>
					<h2 class="text-center">x</h2>
				</div>
				<div class="col-sm-4 wow fadeInDown"  data-wow-delay="0.5s">
					<div class="row">
						<div class="col-sm-12">
							<label for=""><?php echo $this->lang->line('contact_name');?> *</label>
							<br>
							<input type="text" class="" placeholder="Your name">
						</div>
						<div class="col-sm-12">
							<label for=""><?php echo $this->lang->line('contact_email');?> *</label>
							<br>
							<input type="email" class="" placeholder="Your email">
						</div>
						<div class="col-sm-12">
							<label for=""><?php echo $this->lang->line('contact_phone');?></label>
							<br>
							<input type="text" class="" placeholder="Your phone">
						</div>
					</div>
				</div>
				<div class="col-sm-8 wow fadeInDown" data-wow-delay="0.5s">
					<label for=""><?php echo $this->lang->line('contact_message');?> *</label>
					<br>
					<textarea class="" rows="9" placeholder="Type something"></textarea>
				</div>
				<div class="col-sm-12 wow fadeInDown" data-wow-delay="0.5s">
					<div class="col-sm-2 col-sm-offset-5">
						<button><?php echo $this->lang->line('contact_submit');?></button>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer -->
		<footer>
			<div class="container">
				<h3 class="col-sm-6 text-right">All Rights Reserved - Copyright &copy 2015</h3>
				<h3 class="col-sm-6 text-left"><span class="text-bold wow fadeIn" data-wow-delay="0.25s">S</span>emantic <span class="text-bold wow fadeIn" data-wow-delay="0.5s">I</span>nnovation <span class="text-bold wow fadeIn" data-wow-delay="0.75s">G</span>roup</h3>
			</div>
		</footer>
		<!-- / end footer -->
		<!-- JQUERY -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<!-- BOÓTTRAP -->
		<script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
		<!-- PLUGIN -->
		<script src="<?php echo base_url();?>asset/js/wow.js"></script>
		<script src="<?php echo base_url();?>asset/js/classie.js"></script>
		<script src="<?php echo base_url();?>asset/js/cbpAnimatedHeader.js"></script>
		<script src="<?php echo base_url();?>asset/js/jquery.particleground.min.js"></script>
		<script src="<?php echo base_url();?>asset/js/owl.carousel.min.js"></script>
		<script>
			document.addEventListener('DOMContentLoaded', function () {
			particleground(document.getElementById('intro-bg'), {
			dotColor: '#C5DCAC',
			lineColor: '#C5DCAC'
			});
			}, false);
			$(document).ready(function() {
				$('a.scroll').click(function(){
					var element = document.getElementById($(this).attr('scroll'));
					var rect = element.getBoundingClientRect();
					var elementTop; //x and y
					var scrollTop = document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop;
			elementTop = rect.top+scrollTop;
			$("html, body").animate({ scrollTop: elementTop }, 800);
			return false;
			});
				// Highlight the top nav as scrolling occurs
				$('body').scrollspy({
					target: '.navbar-fixed-top'
				})
				// Closes the Responsive Menu on Menu Item Click
				$('.navbar-collapse ul li a').click(function() {
					$('.navbar-toggle:visible').click();
				});
				new WOW().init();
			$(".slider").owlCarousel({
			        navigation : true, // Show next and prev buttons
			        slideSpeed : 300,
			        paginationSpeed : 400,
			        singleItem:true,
			        navigationText: [
			        "<i class='fa fa-2x fa-chevron-left'></i>",
			        "<i class='fa fa-2x fa-chevron-right'></i>"
			        ],
			        autoPlay : 8000
			        });
			$(document).on('click', '.lang', function(event) {
				var lang = $(this).attr('lang');
				$.post('<?php echo site_url();?>', {lang: lang}, function(data, textStatus, xhr) {
					if(textStatus == "success"){
						$('html').html(data);
					}
				});
			});
			});
		</script>
		<script>
			// jQuery for page scrolling products - requires jQuery Easing plugin
			// Preloader Website
		$(window).load(function() {
		$('#loader-wrapper').delay(250).fadeOut();
		$('#loader').delay(400).fadeOut('slow');
		});
		</script>
	</body>
</html>