<!DOCTYPE html>
<html lang="en-US">


<!-- Mirrored from education-html.themerex.net/courses-streampage.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jun 2018 23:42:40 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <title>All courses | Education Center</title>

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
				<!-- /Main menu -->
            </header>
			<!-- Page title -->
            <div class="page_top_wrap page_top_title page_top_breadcrumbs sc_pt_st1">
                <div class="content_wrap">
                    <div class="breadcrumbs">
                        <a class="breadcrumbs_item home" href="index-2.html">Home</a>
						<span class="breadcrumbs_delimiter"></span>
						<span class="breadcrumbs_item current">All</span> 
					</div>
                    <h1 class="page_title">Semua tes</h1>
                </div>
            </div>
			<!-- /Page title -->
			<!-- Content with sidebar -->
            <div class="page_content_wrap">
                <div class="content_wrap">
                    <div class="content">
                        <div class="isotope_filters isotope-courses-streampage"></div>
                        <div class="isotope_wrap" data-columns="3">
                            <?php foreach ($tes as $test) { ?>
							<!-- Courses item -->
                            <div class="isotope_item isotope_item_courses isotope_column_3 <?php if($test->tipe==1) echo "flt_55"; elseif($test->tipe==2) echo "flt_43"; else echo "flt_57"; ?>">
                                <article class="post_item post_item_courses odd">
                                    <div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">									
                                        <div class="post_featured img">
                                            <a href="paid-course.html">
												<img alt="Principles of Written English, Part 2" src="<?php echo base_url('dst/images/masonry_15-400x400.jpg'); ?>"></a>
                                            <h4 class="post_title">
												<a href="#"><?php echo strtoupper($test->nama_tes); ?></a>
											</h4>
                                            <div class="post_descr">
                                                <div class="post_price">
													<span class="post_price_value"><?php echo $test->start; ?></span>
												</div>
                                                <div class="post_category">
													<a href="#">TPA</a>
												</div>
                                            </div>
                                        </div>
                                        <div class="post_info_wrap info">
                                            <div class="info-back">
                                                <h4 class="post_title">
													<a href="#"><?php echo strtoupper($test->nama_tes); ?></a>
												</h4>
                                                <div class="post_descr">
                                                    <p>
														<a href="#">dimulai pada : <?php echo $test->start." <br><br>berakhir pada :".$test->end; ?></a>
													</p>
                                                    <div class="post_buttons">
                                                        <div class="post_button">
                                                            <form method="post" action="soal">
                                                                <input type="hidden" name="id_tes" value="<?php echo $test->id_tes; ?>">
														        <button type="submit" id="submt" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">IKUTI TES</button>
                                                            </form>
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <?php } ?> 
                            <!-- /Courses item -->
							
                        </div>
                        <div id="viewmore" class="pagination_wrap pagination_viewmore">
                            <a href="#" id="viewmore_link" class="theme_button viewmore_button">
								<span class="icon-spin3 animate-spin viewmore_loading"></span>
								<span class="viewmore_text_1">LOAD MORE</span>
								<span class="viewmore_text_2">Loading ...</span>
							</a>
                            <span class="viewmore_loader"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Content -->			
			<!-- Contacts Footer  -->
            <footer class="contacts_wrap bg_tint_dark contacts_style_dark">
                <div class="content_wrap">
                    <div class="logo">
                        <a href="index-2.html">
							<img src="images/logo_footer.png" alt="">
						</a>
                    </div>
                    <div class="contacts_address">
                        <address class="address_right">
							Phone: 1.800.123.4567<br>
							Fax: 1.800.123.4566
						</address>
                        <address class="address_left">
							San Francisco, CA 94102, US<br>	
							1234 Some St
						</address>
                    </div>
                    <div class="sc_socials sc_socials_size_big">
                        <div class="sc_socials_item">
							<a href="#" target="_blank" class="social_icons social_facebook">
								<span class="sc_socials_hover social_facebook"></span>
							</a>
						</div>
                        <div class="sc_socials_item">
							<a href="#" target="_blank" class="social_icons social_pinterest">
								<span class="sc_socials_hover social_pinterest"></span>
							</a>
						</div>
                        <div class="sc_socials_item">
							<a href="#" target="_blank" class="social_icons social_twitter">
								<span class="sc_socials_hover social_twitter"></span>
							</a>
						</div>
                        <div class="sc_socials_item">
							<a href="#" target="_blank" class="social_icons social_gplus">
								<span class="sc_socials_hover social_gplus"></span>
							</a>
						</div>
                        <div class="sc_socials_item">
							<a href="#" target="_blank" class="social_icons social_rss">
								<span class="sc_socials_hover social_rss"></span>
							</a>
						</div>
                        <div class="sc_socials_item">
							<a href="#" target="_blank" class="social_icons social_dribbble">
								<span class="sc_socials_hover social_dribbble"></span>
							</a>
						</div>
                    </div>
                </div>
            </footer>
            <!-- /Contacts Footer -->
			<!-- Copyright -->
            <div class="copyright_wrap">
                <div class="content_wrap">
                    <p>© 2015 All Rights Reserved. <a href="#">Terms of use</a> and <a href="#">Privacy Policy</a></p>
                </div>
            </div>
			<!-- /Copyright -->
        </div>
    </div>
    <!-- /Body -->
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