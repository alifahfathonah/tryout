<!DOCTYPE html>
<html lang="en-US">


<!-- Mirrored from education-html.themerex.net/post-formats.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jun 2018 23:44:40 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <title>Post | Education Center</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&amp;subset=latin%2Clatin-ext&amp;ver=4.3.1" type="text/css" media="all" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,700,700italic&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" type="text/css" media="all" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister:400&amp;subset=latin" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url('dst/css/fontello/css/fontello.css'); ?>" type="text/css" media="all" />
	
    <link rel="stylesheet" href="<?php echo base_url('dst/js/rs-plugin/settings.css'); ?>" type="text/css" media="all" />

    <link rel="stylesheet" href="<?php echo base_url('dst/css/woocommerce/woocommerce-layout.css'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url('dst/css/woocommerce/woocommerce-smallscreen.css'); ?>" type="text/css" media="only screen and (max-width: 768px)" />
    <link rel="stylesheet" href="<?php echo base_url('dst/css/woocommerce/woocommerce.css'); ?>" type="text/css" media="all" />

    <link rel="stylesheet" href="<?php echo base_url('dst/css/style.css'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url('dst/css/shortcodes.css'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url('dst/css/core.animation.css'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url('dst/css/tribe-style.css'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url('dst/css/skins/skin.css'); ?>" type="text/css" media="all" />

	<link rel="stylesheet" href="<?php echo base_url('dst/css/core.portfolio.css'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url('dst/js/mediaelement/mediaelementplayer.min.css'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url('dst/js/mediaelement/wp-mediaelement.css'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url('dst/js/prettyPhoto/css/prettyPhoto.css'); ?>" type="text/css" media="all" />	
    <link rel="stylesheet" href="<?php echo base_url('dst/js/core.customizer/front.customizer.css'); ?>" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url('dst/js/core.messages/core.messages.css'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url('dst/js/swiper/idangerous.swiper.min.css'); ?>" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url('dst/css/responsive.css'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url('dst/css/skins/skin-responsive.css'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url('dst/css/slider-style.css'); ?>" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url('dst/css/custom-style.css'); ?>" type="text/css" media="all" />
	

</head>

<body class="archive category body_style_wide body_filled article_style_stretch layout_excerpt top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_hide">
    <a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
	<!-- Body -->
    <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>
            <header class="top_panel_wrap bg_tint_dark">
				<?php include 'menud.php'; ?>
            </header>
			<!-- Page title -->
            <div class="page_top_wrap page_top_title page_top_breadcrumbs">
                <div class="content_wrap">
                    <div class="breadcrumbs">
                        <a class="breadcrumbs_item home" href="index-2.html">Home</a>
						<span class="breadcrumbs_delimiter"></span>
						<span class="breadcrumbs_item current">Blog</span>
					</div>
                    <h1 class="page_title">Blog</h1>
                </div>
            </div>
			<!-- /Page title -->
			<!-- Content -->
			<div class="page_content_wrap">
				<div class="content_wrap">
					<div class="content">
						<?php foreach ($post as $blog) { ?>
						<!-- Video Post -->
						<article class="post_item post_item_excerpt post_featured_right odd post type-post">
							<div class="post_featured">
								<div class="sc_video_player">
									<div class="sc_video_frame sc_video_play_button hover_icon hover_icon_play" data-width="750" data-height="422" data-video="&lt;iframe class=&quot;video_frame&quot; src=_http_/player.vimeo.com/video/704113765782.html?autoplay=1%22 width=&quot;750&quot; height=&quot;422&quot; frameborder=&quot;0&quot; webkitAllowFullScreen=&quot;webkitAllowFullScreen&quot; mozallowfullscreen=&quot;mozallowfullscreen&quot; allowFullScreen=&quot;allowFullScreen&quot;&gt;&lt;/iframe&gt;">
										<img alt="post_video-750x422.jpg&quot;&gt;" src="<?php echo $blog->cover; ?>">
									</div>
								</div>
							</div>
							<div class="post_content clearfix">
								<h3 class="post_title">
									<a href="blog?id_post=<?php echo $blog->id_blog ?>"><?php echo $blog->title; ?></a>
								</h3>
								<div class="post_info">
									<span class="post_info_item post_info_posted">Posted 
										<a href="#" class="post_info_date"><?php echo $blog->tanggal; ?></a>
									</span>
									<span class="post_info_item post_info_posted_by">by 
										<a href="#" class="post_info_author"><?php echo $blog->oleh; ?></a>
									</span>
								</div>
								<div class="post_descr">
									<?php echo substr($blog->isi, 0,300)."...<br><br>"; ?>
									<a href="blog?id_post=<?php echo $blog->id_blog ?>" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">READ MORE</a> 
								</div>
							</div>
						</article>
						<!-- /Video Post -->
						<?php } ?>
					</div>
				</div>
			</div>		
            <!-- /Content -->			
			<!-- Contacts Footer -->
            <?php include 'footer.php'; ?>
    <!-- /Body -->
    <a href="#" class="scroll_to_top icon-up-2" title="Scroll to top"></a>

    <div class="custom_html_section"></div>
		
	<script type="text/javascript" src="<?php echo base_url('dst/js/jquery/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dst/js/jquery/jquery-migrate.min.js'); ?>"></script>	
	<script type="text/javascript" src="<?php echo base_url('dst/js/jquery/ui/core.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dst/js/jquery/ui/widget.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dst/js/jquery/ui/tabs.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('dst/js/jquery/ui/accordion.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dst/js/jquery/ui/effect.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dst/js/jquery/ui/effect-fade.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('dst/js/jquery/jquery.blockUI.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dst/js/jquery/jquery.cookie.min.js'); ?>"></script>
	
	<script type="text/javascript" src="<?php echo base_url('dst/js/global.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dst/js/core.utils.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dst/js/core.init.min.js'); ?>"></script>	
    <script type="text/javascript" src="<?php echo base_url('dst/js/shortcodes/shortcodes.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('dst/js/superfish.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dst/js/jquery.slidemenu.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('dst/js/mediaelement/mediaelement-and-player.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dst/js/mediaelement/wp-mediaelement.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('dst/js/core.messages/core.messages.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('dst/js/swiper/idangerous.swiper-2.7.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dst/js/swiper/idangerous.swiper.scrollbar-2.4.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('dst/js/prettyPhoto/jquery.prettyPhoto.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('dst/js/jquery.isotope.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('dst/js/hover/jquery.hoverdir.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dst/js/diagram/chart.min.js'); ?>"></script>

</body>


<!-- Mirrored from education-html.themerex.net/post-formats.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jun 2018 23:44:40 GMT -->
</html>