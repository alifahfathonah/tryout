<!DOCTYPE html>
<html lang="en-US">


<!-- Mirrored from education-html.themerex.net/not-existing-page-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jun 2018 23:42:40 GMT -->
<head>
    <meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <title>TryOut - Bukakampus</title>

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

</head>

<body class="error404 body_style_wide body_filled article_style_stretch layout_excerpt top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_hide">
    <a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
	<!-- Body -->
    <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>
            <header class="top_panel_wrap bg_tint_dark">
				<!-- User menu -->
                <div class="menu_user_wrap">
                    <div class="content_wrap clearfix">
                        <div class="menu_user_area menu_user_right menu_user_nav_area">
                            <ul id="menu_user" class="menu_user_nav">
                            	<!-- user toogle-->
                            	<?php if (isset($_SESSION['nama'])) { ?>
                                <li class="menu_user_controls">
                                    <a href="#">
										<span class="user_avatar">
											<img alt="" src="http://1.gravatar.com/avatar/45e4d63993e55fa97a27d49164bce80f?s=16&amp;d=mm&amp;r=g" srcset="http://1.gravatar.com/avatar/45e4d63993e55fa97a27d49164bce80f?s=32&amp;d=mm&amp;r=g 2x" class="avatar avatar-16 photo" height="16" width="16" />
										</span>
										<span class="user_name"><?php echo $_SESSION['nama']; ?> </span></a>
                                    <ul>
                                        <li><a href="#" class="icon icon-doc-inv">profil</a></li>
                                        <li><a href="#" class="icon icon-cog-1">Settings</a></li>
                                    </ul>
                                </li>
                                <li class="menu_user_logout">
									<a href="logout" class="icon icon-logout">Logout</a>
								</li>
								<?php } 
								else{ ?>
								<li class="menu_user_logout">
									<a href="log" class="icon icon-logout">Login</a>
								</li>
								<?php } ?>
								<!--/user toogle -->
                            </ul>
                        </div>
                    </div>
				<!-- /User menu -->
				<!-- Main menu -->
                <div class="menu_main_wrap logo_left">                  
                    <div class="content_wrap clearfix">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="awal">
                                <img src="<?php echo base_url('dst/images/logo_dark.png'); ?>" class="logo_main" alt="">
                                <img src="<?php echo base_url('dst/images/logo_dark.png'); ?>" class="logo_fixed" alt="">
                            </a>
                        </div>
                        <!-- Logo -->					
                    </div>
                </div>
				<!-- /Main menu -->
            </header>
			<!-- Content -->
            <div class="page_content_wrap">
                <div class="content_wrap">
                    <div class="content">
                        <article class="post_item post_item_404">
                            <div class="post_content">
                                    <div class="sc_tabs sc_tabs_style_1" data-active="0">
                                        <ul class="sc_tabs_titles" >
                                        	<?php for ($i=1; $i <=$n ; $i++) { ?>

	                                            <li class="sc_tabs_title" style="font-size: 8.6px">
													<a href="#sc_tabs_1_<?php echo $i ?>" class="theme_button"><?php echo $i ?></a>
												</li>
											<?php } ?>
                                        </ul>
                                        <?php $i=1; foreach ($soal as $row) {   ?>
                                    <form action="hitung_nilai" method="post">
                                    	<input type="hidden" name="id_soal[]" value="<?php echo $row->ID_soal; ?>">
                                        <div id="sc_tabs_1_<?php echo $i ?>" class="sc_tabs_content odd first" style="height: 450px" >
                                            <div style="margin-bottom: 20px"><?php echo $i.". ".strip_tags($row->soal,'<img><span><i><b><u>'); ?></div>
	                                        <div class="radio">
											  <label>
											    <input type="radio" name="OP[<?php echo $row->ID_soal ?>]" id="optionsRadios1" value="A">
											    A. <?php echo strip_tags($row->a,'<img>'); ?>
											  </label>
											</div>
											<div class="radio">
											  <label>
											    <input type="radio" name="OP[<?php echo $row->ID_soal ?>]" id="optionsRadios2" value="B">
											    B. <?php echo strip_tags($row->b,'<img>'); ?>
											  </label>
											</div>
											<div class="radio">
											  <label>
											    <input type="radio" name="OP[<?php echo $row->ID_soal ?>]" id="optionsRadios3" value="C">
											    C. <?php echo strip_tags($row->c,'<img>'); ?>
											  </label>
											</div>
											<div class="radio">
											  <label>
											    <input type="radio" name="OP[<?php echo $row->ID_soal ?>]" id="optionsRadios4" value="D">
											    D. <?php echo strip_tags($row->d,'<img>'); ?>
											  </label>
											</div>
											<div class="radio">
											  <label>
											    <input type="radio" name="OP[<?php echo $row->ID_soal ?>]" id="optionsRadios5" value="E">
											    E. <?php echo strip_tags($row->e,'<img>'); ?>
											  </label>
											</div>
										</div>
										<?php $i++; } ?>
                                        <input type="hidden" name="id_tes" value="<?php echo $id_tes; ?>">
										<button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_medium alignleft sc_buttons_st1" type="submit" href="#" style="float: right;" onclick="return confirm('apakah benar akan di input?')">Sumbit soal</button>
										</form>
                                        
                                    </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <!-- /Content -->
			
			<!-- Copyright -->
            <div class="copyright_wrap">
                <div class="content_wrap">
                    <p>© 2018 All Rights Reserved codingin. <a href="#">Terms of use</a> and <a href="#">Privacy Policy</a></p>
                </div>
            </div>
			<!-- /Copyright -->
        </div>
    </div>
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


<!-- Mirrored from education-html.themerex.net/not-existing-page-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jun 2018 23:42:40 GMT -->
</html>