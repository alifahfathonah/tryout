<!DOCTYPE html>
<html lang="en-US">


<!-- Mirrored from education-html.themerex.net/courses-streampage.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jun 2018 23:42:40 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <title>Pembahasan | Education Center</title>

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

<body class="page body_style_wide body_filled article_style_boxed layout_courses_3 template_portfolio top_panel_style_light top_panel_opacity_solid top_panel_above menu_right sidebar_hide">
    <a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
	<!-- Body -->
    <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>
            <header class="top_panel_wrap bg_tint_light">
				<?php include 'menul.php'; ?>
            </header>
			<!-- Page title -->
            <div class="page_top_wrap page_top_title page_top_breadcrumbs sc_pt_st1">
                <div class="content_wrap">
                    <div class="breadcrumbs">
                        <a class="breadcrumbs_item home" href="index-2.html">Home</a>
						<span class="breadcrumbs_delimiter"></span>
						<span class="breadcrumbs_item current">All</span> 
					</div>
                    <h1 class="page_title">Semua pembahsan</h1>
                </div>
            </div>
			<!-- /Page title -->
			<!-- Content with sidebar -->
            <div class="page_content_wrap">
                <div class="content_wrap">
                    <div class="content">
						<!-- List section -->
                        <div class="sc_section" data-animation="animated fadeInUp normal">
                            <h3>Lists</h3>
							<div class="columns_wrap sc_columns sc_columns_count_3">
								<div class="sc_column_item sc_column_item_1 odd first">
									<ol class="sc_list sc_list_style_ol">
                                        <?php foreach ($soal as $key){ ?>
										<li class="sc_list_item even"><a href="pembahasan?id_pembahasan=<?php echo $key->id_pembahasan ?>" target="_blank"><?php echo strip_tags($key->soal); ?></a></li>
                                        <div class="sc_line sc_line_style_dotted margin_top_05em margin_bottom_1_5em sc_lines_st3"></div>
										
                                    <?php } ?>
									</ol>
								</div>
							</div>
                        </div>
								<!-- /List section -->
                    </div>
                </div>
            </div>
            <!-- /Content -->			
			<?php include 'footer.php'; ?>
    <a href="#" class="scroll_to_top icon-up-2" title="Scroll to top"></a>

		
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
	
    <script type="text/javascript" src="<?php echo base_url('dst/js/rs-plugin/jquery.themepunch.tools.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dst/js/rs-plugin/jquery.themepunch.revolution.min.js'); ?>"></script> 
	<script type="text/javascript" src="<?php echo base_url('dst/js/slider_init.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('dst/js/superfish.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dst/js/jquery.slidemenu.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('dst/js/mediaelement/mediaelement-and-player.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dst/js/mediaelement/wp-mediaelement.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('dst/js/core.messages/core.messages.min.js'); ?>"></script>
    
	<script type="text/javascript" src="<?php echo base_url('dst/js/jquery.isotope.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('dst/js/hover/jquery.hoverdir.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('dst/js/prettyPhoto/jquery.prettyPhoto.min.js'); ?>"></script>		
    <script type="text/javascript" src="<?php echo base_url('dst/js/swiper/idangerous.swiper-2.7.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dst/js/swiper/idangerous.swiper.scrollbar-2.4.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dst/js/diagram/chart.min.js'); ?>"></script>

</body>


<!-- Mirrored from education-html.themerex.net/courses-streampage.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jun 2018 23:42:44 GMT -->
</html>