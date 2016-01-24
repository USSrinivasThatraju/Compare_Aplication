<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<style>
	.hm-feture {
	    width: 1240px;
	    border-top: 1px solid #dadada;
	    clear: both;
	}

	.hm-fetbox {
    width: 100%;
    margin: 2px auto;
    text-align: center;
    clear: both;
    height: 41px;
    float: left;
}

.hm-text {
    width: 177px;
    text-align: center;
    background: #fff;
    clear: both;
    font: 600 16px/18px "Segoe UI";
    color: #252525;
    position: relative;
    top: 7px;
    margin: 0 auto;
}
	</style>

	<!-- CSS for price comparison widget (Feel free to modify as per your needs) -->
<style type="text/css">
	table#priceTable { width: 300px; }
	table#priceTable #storeCol{ width: 45%; }
	table#priceTable #priceCol{ width: 30%; }
	table#priceTable #storeCol{ width: 25%; }
	table#priceTable { border: 1px solid #B3B3B3; border-collapse: collapse; border-spacing: 0; margin-top: 3px; text-align: center;}
	table#priceTable thead tr { background: repeat-x scroll left bottom #EFEFEF; font-weight: bold; height: 30px; margin: 0; padding: 0;}
	table#priceTable td { border-bottom: 1px solid #D3D3D3;}
	table#priceTable th { border-bottom: 1px solid #D3D3D3;}
	table#priceTable tbody tr { height: 40px; padding: 4px 0; vertical-align: middle;}
	.goButton { background-image: linear-gradient(to bottom, #32A3FF, #0559A0); background-repeat: repeat-x; border-radius: 4px; color: white; font-weight: bold; text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); padding: 2px 10px; text-decoration: none; }
	table#priceTable td img { padding: 10px 0px 5px 5px;}
	table#priceTable .price { color: #004C7D; font-weight: bold; margin: 3px 0 2px; font-size: 18px; }
	.storeOffer {color: red; font-size: 12px; font-weight: normal}
	.fStore{color: red; font-size: 10px; font-weight: bold;}
	.rupee { display: inline; font-family: "WebRupee"; font-weight: normal }
	@font-face{font-family: 'WebRupee';src: url('http://cdn.webrupee.com/WebRupee.V2.0.eot');src: local('WebRupee'), url('http://cdn.webrupee.com/WebRupee.V2.0.ttf') format('truetype'),  url('http://cdn.webrupee.com/WebRupee.V2.0.woff') format('woff'), url('http://cdn.webrupee.com/WebRupee.V2.0.svg') format('svg');font-weight: normal;font-style: normal;}
	.WebRupee{font-family: 'WebRupee';}
</style>


	<!-- Document Title
	============================================= -->
	<title>VERTEX5 ONLINE SHOP | India</title>

</head>

<body class="stretched">
<input type="hidden" id="category" value="<?=$_GET['category']?>"/>
<input type="hidden" id="model" value="<?=$_GET['model']?>"/>
<script src="js/search.js" type="text/javascript"></script>
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar">

			<div class="container clearfix">

				<div class="col_half nobottommargin hidden-xs">

					<p class="nobottommargin"><strong>Call:</strong> 1800-547-2145 | <strong>Email:</strong> prassu.tweety@gmail.com</p>

				</div>

				<div class="col_half col_last fright nobottommargin">

					<!-- Top Links
					============================================= -->
					<div class="top-links">
						<ul>
							<li><a href="#">USD</a>
								<ul>
									<li><a href="#">EUR</a></li>
									<li><a href="#">AUD</a></li>
									<li><a href="#">GBP</a></li>
								</ul>
							</li>
							<li><a href="#">EN</a>
								<ul>
									<li><a href="#"><img src="images/icons/flags/french.png" alt="French"> FR</a></li>
									<li><a href="#"><img src="images/icons/flags/italian.png" alt="Italian"> IT</a></li>
									<li><a href="#"><img src="images/icons/flags/german.png" alt="German"> DE</a></li>
								</ul>
							</li>
							<li><a href="#">Login</a>
								<div class="top-link-section">
									<form id="top-login" role="form">
										<div class="input-group" id="top-login-username">
											<span class="input-group-addon"><i class="icon-user"></i></span>
											<input type="email" class="form-control" placeholder="Email address" required="">
										</div>
										<div class="input-group" id="top-login-password">
											<span class="input-group-addon"><i class="icon-key"></i></span>
											<input type="password" class="form-control" placeholder="Password" required="">
										</div>
										<label class="checkbox">
										  <input type="checkbox" value="remember-me"> Remember me
										</label>
										<button class="btn btn-danger btn-block" type="submit">Sign in</button>
									</form>
								</div>
							</li>
						</ul>
					</div><!-- .top-links end -->

				</div>

			</div>

		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="sticky-style-2">

			<div class="container clearfix">

				<!-- Logo
				============================================= -->
				<div id="logo">
					<a href="index.html" class="standard-logo" data-dark-logo="images/logo.png"><img src="images/logo.png" alt="Canvas Logo"></a>
					<a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
				</div><!-- #logo end -->

				<ul class="header-extras">
					<li>
						<i class="i-medium i-circled i-bordered icon-thumbs-up2 nomargin"></i>
						<div class="he-text">
							OFFERS BY STORES
							<span>100% Guaranteed</span>
						</div>
					</li>
					<li>
						<i class="i-medium i-circled i-bordered icon-truck2 nomargin"></i>
						<div class="he-text">
							Free Shipping
							<span>for $20 or more</span>
						</div>
					</li>
					<li>
						<i class="i-medium i-circled i-bordered icon-undo nomargin"></i>
						<div class="he-text">
							30-Day Returns
							<span>Completely Free</span>
						</div>
					</li>
				</ul>

			</div>

			<div id="header-wrap">

				<!-- Primary Navigation
				============================================= -->
				<nav id="primary-menu" class="style-2">

					<div class="container clearfix">

						<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

							<ul>

								<!-- Mega Menu
								============================================= -->
								<li class="mega-menu"><a href="#"><div>Mobiles</div></a>

								</li><!-- .mega-menu end -->
								<li><a href="#"><div>Laptops</div></a>

								</li>
								<li><a href="#"><div>Tablets</div></a>

								</li>
								<li><a href="#"><div>Televisions</div></a>

								</li>
								<li><a href="#"><div>Desktops</div></a>

								</li>
								<li><a href="#"><div>Electrical Equipments</div></a>

								</li>
								<li><a href="#"><div>Blog</div><span>Latest News</span></a></li>
								<li><a href="#"><div>Videos</div><span>Latest News</span></a></li>
								<li><a href="#"><div>Contact</div><span>Get In Touch</span></a></li>
							</ul>


						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</div>

				</nav><!-- #primary-menu end -->

			</div>

		</header><!-- #header end -->


		<!-- Page Title
        ============================================= -->
        <section id="page-title" class="page-title-mini">

            <div class="container clearfix">
                <h1>Compare Price:</h1>
                <span>Everything you need to know about our Company</span>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Price Compare</li>
                </ol>
            </div>

        </section><!-- #page-title end -->



		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container">
					<div class="row">
          <div class="col_one_fourth">
				   <span id="dataImage"></span>
				  </div>
				  <div class="col_three_fourth col_last">
				   <h5>Model : <?= $_GET['brand']?> &nbsp; &nbsp; <?= $_GET['model']?></h5>
				   <p> Brand: <span><b><?=$_GET['brand']?></b></span> </p>
				   <p> Price range : <span><b id="smallPrice"> </b></span> to <span><b id="bigPrice">  </b></span>  </p>

				  </div>
				</div>

				</div>


				<div class="container">

					<!-- Post Content
					============================================= -->
					<div>
						<h4>Products from other Store:</h4>
						<center>
             <table class="table">
						  <thead>
							<tr>

							  <th class="text-center">Store</th>
							  <th class="text-center">Product Name</th>
							  <th class="text-center">Price</th>
								<th class="text-center">Details</th>
							</tr>
						  </thead>
						  <tbody id="table_content">

						  </tbody>
						</table>
					</center>




<div class="clear"></div><div class="line"></div>


				<div class="si-sticky si-sticky-right hidden-sm hidden-xs">
					<a href="#" class="social-icon si-colored si-facebook" data-animate="bounceInRight">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>
					<a href="#" class="social-icon si-colored si-twitter" data-animate="bounceInRight" data-delay="100">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>
					<a href="#" class="social-icon si-colored si-pinterest" data-animate="bounceInRight" data-delay="200">
						<i class="icon-pinterest"></i>
						<i class="icon-pinterest"></i>
					</a>
					<a href="#" class="social-icon si-colored si-instagram" data-animate="bounceInRight" data-delay="300">
						<i class="icon-instagram"></i>
						<i class="icon-instagram"></i>
					</a>
					<a href="#" class="social-icon si-colored si-gplus" data-animate="bounceInRight" data-delay="600">
						<i class="icon-gplus"></i>
						<i class="icon-gplus"></i>
					</a>
					<a href="#" class="social-icon si-colored si-rss" data-animate="bounceInRight" data-delay="700">
						<i class="icon-rss"></i>
						<i class="icon-rss"></i>
					</a>
				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">


			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2016 All Rights Reserved by Vertex5.com <br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> prassu.tweety@gmail.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91 998 542 4245 <span class="middot">&middot;</span> <i class="icon-skype2"></i> prasanna.vertex5
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>
