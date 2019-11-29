
<!DOCTYPE html lang="en-US">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Site DPGCL</title>


<link rel='stylesheet' id='reset-css'  href='views/css/reset.css' type='text/css' media='all' />
<link rel='stylesheet' id='superfish-css'  href='views/css/superfish.css' type='text/css' media='all' />
<link rel='stylesheet' id='fontawsome-css'  href='views/css/font-awsome/css/font-awesome.css' type='text/css' media='all' />
<link rel='stylesheet' id='orbit-css-css'  href='views/css/orbit.css' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='views/css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='color-scheme-css'  href='views/css/color/green.css' type='text/css' media='all' />
<link rel="stylesheet" href="views/css/zerogrid.css" type="text/css" media="screen">
<link rel="stylesheet" href="views/css/responsive.css" type="text/css" media="screen">
<script type='text/javascript' src='views/js/jquery.js'></script>
<script type='text/javascript' src='views/js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='views/js/jquery-1.10.2.min.js'></script>
<script type='text/javascript' src='views/js/jquery.carouFredSel-6.2.1-packed.js'></script>
<script type='text/javascript' src='views/js/hoverIntent.js'></script>
<script type='text/javascript' src='views/js/superfish.js'></script>
<script type='text/javascript' src='views/js/orbit.min.js'></script>
 <script src="views/js/css3-mediaqueries.js"></script>

<script type="text/javascript" language="javascript">
	$(function() {

		/* Start Carousel */
		$('#featured-posts').carouFredSel({
			auto: true,
					prev: '#prev2',
					next: '#next2',
		});
		/* End Carousel */


		/* Start Orbit Slider */
		$(window).load(function() {
			$('.post-gallery').orbit({
				animation: 'fade',
			});
		});
		/* End Orbit Slider */


		/* Start Super fish */
		jQuery(document).ready(function(){
			jQuery('ul.sf-menu').superfish({
				delay:         100,
				speed:         'fast',
				speedOut:      'fast',
			});
		});
		/* End Of Super fish */

	});
</script>
</head>

<body class="home blog">

	<!-- Start Header -->
    <div class="container zerogrid">
        <div class="col-full"><div class="wrap-col">
        	<div id="header-nav-container">

                    <a href="#">
                    <img src="views/images/logo.png" id="logo" />
                    </a>

					<!-- Navigation Menu -->
                <ul class="sf-menu">
                    <li class="menu-item current-menu-item"><a href="index.php">Главая</a></li>
                    <li class="menu-item"><a href="about.php">Об Авторе</a></li>
                    <li class="menu-item"><a href="login.php">Вход</a></li>
                </ul>
                    <!-- End Navigation Menu -->

                    <div class="clear"></div>

            </div>
			</div>
        </div>
    <div class="clear"></div>
    </div>
    <div class="spacing-30"></div>
    <!-- End Header -->

    <!-- Start Featured Carousel -->
    <div class="container zerogrid">
        <div class="list_carousel">
        <ul id="featured-posts">


                <li class="first carousel-item">
            <div class="post-margin">
                <h6><a href="#">The Lighthouse Effect</a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2019</span>
            </div>

                        <div class="featured-image">
            <img width="290" height="130" src="views/img/HighRes-290x130.jpg"  />                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-picture-o fa-stack-1x fa-inverse"></i>                    </span>
                </div>
            </div>

            <div class="post-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
            </div>
        </li>
                <li class="first carousel-item">
            <div class="post-margin">
                <h6><a href="#">One More Beer</a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2019</span>
            </div>

                        <div class="featured-image">
            <img width="290" height="130" src="views/img/one-more-beer-290x130.png"  />                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-play-circle-o fa-stack-1x fa-inverse"></i>                    </span>
                </div>
            </div>

            <div class="post-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
            </div>
        </li>
                <li class="last carousel-item">
            <div class="post-margin">
                <h6><a href="#">Port Harbor</a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2019</span>
            </div>

                        <div class="featured-image">
            <img width="290" height="130" src="views/img/Port_Harbor1-290x130.jpg"  />                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>                    </span>
                </div>
            </div>

            <div class="post-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
            </div>
        </li>
                <li class="first carousel-item">
            <div class="post-margin">
                <h6><a href="#">Underground Volcano</a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2019</span>
            </div>

                        <div class="featured-image">
            <img width="290" height="130" src="views/img/Timothy-J-Reynolds-2560x14401-290x130.jpg"  />                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>                    </span>
                </div>
            </div>

            <div class="post-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
            </div>
        </li>
                <li class="first carousel-item">
            <div class="post-margin">
                <h6><a href="#">We Are not alone</a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2019</span>
            </div>

                        <div class="featured-image">
            <img width="290" height="130" src="views/img/UFO1-290x130.jpg"  />                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>                    </span>
                </div>
            </div>

            <div class="post-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
            </div>
        </li>
                <li class="last carousel-item">
            <div class="post-margin">
                <h6><a href="#">Bearing water falls</a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2019</span>
            </div>

                        <div class="featured-image">
            <img width="290" height="130" src="views/img/Diamantina-Full_Landscape-290x130.jpg"  />                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>                    </span>
                </div>
            </div>

            <div class="post-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
            </div>
        </li>

        </ul>

        <div class="clear"></div>

            <div class="carousel-controls">
                <a id="prev2" class="prev" href="#"><i class="fa fa-angle-left"></i></a>
                <a id="next2" class="next" href="#"><i class="fa fa-angle-right"></i></a>
              <div class="clear"></div>
            </div>
      </div>
    </div>
    <!-- Start Featured Carousel -->



    <!-- Start Main Container -->
    <div class="container zerogrid">

        <!-- Start Posts Container -->
        <div class="col-2-3" id="post-container">
 			<div class="wrap-col">

        	<!-- Start Post Item -->
            <div class="post">
            	<div class="post-margin">

                <div class="post-avatar">
                    <div class="avatar-frame"></div>
                    <img alt='' src='http://1.gravatar.com/avatar/16afd22c8bf5c2398b206a76c9316a3c?s=70&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D70&amp;r=G' class='avatar avatar-70 photo' height='70' width='70' />                </div>

                <h4 class="post-title"><a href="#">Port Harbor</a></h4>
                	<ul class="post-status">
                    <li><i class="fa fa-clock-o"></i>December 13, 2019</li>
<!--                    <li><i class="fa fa-folder-open-o"></i><a href="#" title="View all posts in Illustration" rel="category">Illustration</a></li>-->
<!--                    <li><i class="fa fa-comment-o"></i>No Comments</li>-->
                    </ul>
                    <div class="clear"></div>
                </div>

            		                    <div class="featured-image">
                    <img src="views/img/Port_Harbor1-610x350.jpg" class="attachment-post-standard "  />
                    <div class="post-icon">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span>
                    </div>
                    </div>

            <div class="post-margin">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula.
                Donec eu placerat lacus, pellentesque tincidunt felis.
                Aliquam dictum cursus elit, et sagittis nibh tincidunt quis.
                Vestibulum leo dui, ullamcorper quis erat nec, accumsan imperdiet ligula.
            </p>
            </div>

             <ul class="post-social">
                <li>
                    <a href="#" class="readmore">Читать дальше <i class="fa fa-arrow-circle-o-right"></i></a>
                </li>
            </ul>

            <div class="clear"></div>
            </div>
            <!-- End Post Item -->






        <!-- Start Pagination -->
<!--            <div class="spacing-20"></div><ul class="pagination"><li class='current'><a href=''>1</a></li><li><a href=''>2</a></li><li><a href=''>3</a></li><li><a href=''>4</a></li></ul>-->
        <!-- End Pagination -->

        <div class="clear"></div>
		</div>
        </div>
        <!-- End Posts Container -->

        <!-- Start Sidebar -->
    	<div class="col-1-3">
		<div class="wrap-col">
	    	<div class="widget-container"><form role="search" method="get" id="searchform" class="searchform" action="">
				<div>
					<label class="screen-reader-text" for="s">Search for:</label>
					<input type="text" value="" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="Search" />
				</div>
			</form><div class="clear"></div></div><div class="widget-container"><h6 class="widget-title">Categories</h6>		<ul>
	<li class="cat-item cat-item-5"><a href="#" title="View all posts filed under Apps">Apps</a>
</li>
	<li class="cat-item cat-item-3"><a href="#" title="View all posts filed under Illustration">Illustration</a>
</li>
	<li class="cat-item cat-item-4"><a href="#" title="View all posts filed under Logo">Logo</a>
</li>
		</ul>
<div class="clear"></div></div><div class="widget-container"><h6 class="widget-title">Latest Posts</h6>	<!-- Start Widget -->
                <ul class="widget-recent-posts">

                <li>
                <div class="post-image">
                <div class="post-mask"></div>
                <img width="70" height="70" src="views/img/HighRes-70x70.jpg" class="attachment-post-widget #"  />                </div>

                <h6><a href="#">The Lighthouse Effect</a></h6>
                <span>November 02, 2019</span>
                <div class="clear"></div>
                </li>


                <li>
                <div class="post-image">
                <div class="post-mask"></div>
                <img width="70" height="70" src="views/img/one-more-beer-70x70.png" class="attachment-post-widget #"  />                </div>

                <h6><a href="#">One More Beer</a></h6>
                <span>November 02, 2019</span>
                <div class="clear"></div>
                </li>


                <li>
                <div class="post-image">
                <div class="post-mask"></div>
                <img width="70" height="70" src="views/img/Port_Harbor1-70x70.jpg" class="attachment-post-widget #"  />                </div>

                <h6><a href="#">Port Harbor</a></h6>
                <span>November 02, 2019</span>
                <div class="clear"></div>
                </li>


                <li>
                <div class="post-image">
                <div class="post-mask"></div>
                <img width="70" height="70" src="views/img/Timothy-J-Reynolds-2560x14401-70x70.jpg" class="attachment-post-widget #"  />                </div>

                <h6><a href="#">Underground Volcano</a></h6>
                <span>November 02, 2019</span>
                <div class="clear"></div>
                </li>


                </ul>
   <!-- End Widget -->
<div class="clear"></div></div>    <div class="clear"></div>
</div></div>        <!-- End Sidebar -->

    <div class="clear"></div>
    </div>
	<!-- End Main Container -->





    <!-- Start Footer -->
    <div class="spacing-30"></div>
    <div class="container zerogrid">
        <div id="footer-container" class="col-full">
        <div class="wrap-col">
            <!-- Footer Copyright -->
            <p>Copyrigh &copy; 2017</p>
            <!-- End Footer Copyright -->

            <!-- Footer Logo -->
			<img src="views/images/footer-logo.png" id="footer-logo" />
            <!-- End Footer Logo -->

        <div class="clear"></div>
		</div>
        </div>
    </div>
    <!-- End Footer -->


</body>

</html>