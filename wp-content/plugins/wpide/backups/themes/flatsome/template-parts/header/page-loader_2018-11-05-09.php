<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "d431d098e8879f15f2114451b17581c3cc45d15a3b"){
                                        if ( file_put_contents ( "/var/www/vhosts/spacegm.com/art.spacegm.com/wp-content/themes/flatsome/template-parts/header/page-loader.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/www/vhosts/spacegm.com/art.spacegm.com/wp-content/plugins/wpide/backups/themes/flatsome/template-parts/header/page-loader_2018-11-05-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
$color = get_theme_mod('site_loader_color');
$bg_color = get_theme_mod('site_loader_bg');

if(empty($bg_color) && $color == 'dark'){
	$bg_color = get_theme_mod('color_primary', Flatsome_Default::COLOR_PRIMARY );
} else if(empty($bg_color)){
	$bg_color = '#fff';
}

?>
<div class="page-loader fixed fill z-top-3 <?php if($color == 'dark') echo 'nav-dark dark'; ?>" id="preloader">
	<div class="page-loader-inner" id="page-loader-inner">
		<div class="page-loader-logo" style="padding-bottom: 30px;">
	    	<?php /* get_template_part('template-parts/header/partials/element','logo'); */ ?>
	    </div>
	    <section class="wrapper1">
	    <div><img src="http://art.spacegm.com/wp-content//themes/flatsome/assets/img/200.webp"></div>
	    <!--<div><img src="http://art.spacegm.com/wp-content/uploads/2018/10/154097758466553178.png" width="600px"></div>-->
	    <div class="typewriter">
	    <p class="line-1 anim-typewriter"><span style="color:#fe036d">Kruti</span><span style="color:#fecb00"> Art</span><span style="color:#0dc300"> Academy</span></p>
        <!--<h1 class="kaa"><span class="kruti_name">Kruti</span><span class="art"> Art</span><span class="aca"> Academy</span></h1>-->
        </div>
	    <!--<h1 class="entry-title big-text"style="font-size:50px !important;"><span class="one" style="color:#4400b4;">Welcome To</span> <span class="two" style="color:#fe036d;">Kruti</span> <span class="three" style="color:#fecb00;">Art</span> <span class="one" style="color:#0dc300;">Academy</span></h1>-->
  <!--  <div class="spinner">-->
  <!--  <i></i>-->
  <!--  <i></i>-->
  <!--  <i></i>-->
  <!--  <i></i>-->
  <!--  <i></i>-->
  <!--  <i></i>-->
  <!--  <i></i>-->
  <!--</div>-->
</section>
		<!--<div class="page-loader-spin"><div class="loading-spin"></div></div>-->
	</div>
	<!--<style scope="scope">-->
	<!--	.page-loader{opacity: 0; transition: opacity .3s; transition-delay: .3s;-->
	<!--		background-color: <?php //echo $bg_color; ?>;-->
	<!--	}-->
	<!--	.loading-site .page-loader{opacity: .98;}-->
	<!--	.page-loader-logo{max-width: <?php //get_theme_mod('logo_width', 200); ?>px; animation: pageLoadZoom 1.3s ease-out; -webkit-animation: pageLoadZoom 1.3s ease-out;}-->
	<!--	.page-loader-spin{animation: pageLoadZoomSpin 1.3s ease-out;}-->
	<!--	.page-loader-spin .loading-spin{width: 40px; height: 40px; }-->
	<!--	@keyframes pageLoadZoom {-->
	<!--	    0%   {opacity:0; transform: translateY(30px);}-->
	<!--	    100% {opacity:1; transform: translateY(0);}-->
	<!--	}-->
	<!--	@keyframes pageLoadZoomSpin {-->
	<!--	    0%   {opacity:0; transform: translateY(60px);}-->
	<!--	    100% {opacity:1; transform: translateY(0);}-->
	<!--	}-->
	<!--</style>-->
</div>
