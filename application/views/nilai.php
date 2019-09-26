<!DOCTYPE html>
<html lang="en-US">


<!-- Mirrored from education-html.themerex.net/not-existing-page-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jun 2018 23:42:40 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <title>Nilai | Education Center</title>

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
	<script src="<?php echo base_url('dst/chart/Chart.bundle.js'); ?>"></script>
	<script src="<?php echo base_url('dst/chart/utils.js'); ?>"></script>
	<style>
	canvas{
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	</style>

</head>

<body class="error404 body_style_wide body_filled article_style_stretch layout_excerpt top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_hide">
    <a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
	<!-- Body -->
    <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>
            <header class="top_panel_wrap bg_tint_dark">
				<?php include 'menud.php'; ?>
            </header>
			<!-- Content -->
            <div class="page_content_wrap">
                <div class="content_wrap">
                    <div class="content">
                        <!-- Tables section -->
                                <div class="sc_section" data-animation="animated fadeInUp normal">
									<h3>Daftar nilai</h3>
									<div class="sc_table width_100per">
										<table>
											<tbody>
												<tr>
													<th class="width_10per">#</th>
													<th>Tanggal</th>
													<th>Tryout</th>
													<th>salah</th>
													<th>benar</th>
													<th>kosong</th>
													<th>skor</th>
												</tr>
												<?php 
												$i = 1;
												$tpa = $saintek = $soshum = 0;
												$tpab = $saintekb = $soshumb = 0;
												foreach ($nilai as $key): ?>	
												
												<tr class="text_center">
													<td><?php echo $i ?></td>
													<td>Item #1</td>
													<td><?php echo $key->nama_tes ?></td>
													<td><?php echo $key->salah ?></td>
													<td><?php echo $key->benar ?></td>
													<td><?php echo $key->kosong ?></td>
													<td><?php echo $key->skor ?></td>
												</tr>
												<?php 
												if ($key->tipe==1) {
													$tpa += $key->skor;
													$tpab++;
												}
												elseif ($key->tipe==2) {
													$saintek += $key->skor;
													$saintekb++;
												}
												else{
													$soshum += $key->skor;
													$soshumb++;
												}
												$i++;
												endforeach ?>
											</tbody>
										</table>
									</div>
                                </div>
								<!-- /Tables section -->
								<!-- Skills section -->
                                <div class="sc_section" data-animation="animated fadeInUp normal">
                                    <div class="sc_line sc_line_style_solid"></div>                                    
                                    <h3>Rata-Rata nilai</h3>
									<div id="sc_skills_diagram_913070419" class="sc_skills sc_skills_bar sc_skills_horizontal" data-type="bar" data-subtitle="Skills" data-dir="horizontal">
										<?php if ($tpab!==0): ?>
										<div class="sc_skills_info">
											<div class="sc_skills_label">TPA</div>
										</div>
										<div class="sc_skills_item sc_skills_style_1 odd first">
											<div class="sc_skills_count sc_skills_bgc1 sc_skills_border_st1">
												<div class="sc_skills_total" data-start="0" data-stop="<?php echo $tpa/$tpab; ?>" data-step="1" data-max="100" data-speed="23" data-duration="2254" data-ed=" ">0%</div>
											</div>
										</div>
										<?php endif ?>
										<?php if ($saintekb!==0): ?>
										<div class="sc_skills_info">
											<div class="sc_skills_label">SAINTEK</div>
										</div>
										<div class="sc_skills_item sc_skills_style_1 odd">
											<div class="sc_skills_count sc_skills_bgc3 sc_skills_border_st1">
												<div class="sc_skills_total" data-start="0" data-stop="<?php echo $tpa/$tpab; ?>" data-step="1" data-max="100" data-speed="23" data-duration="2254" data-ed=" ">0%</div>
											</div>
										</div>
										<?php endif ?>
										<?php if ($soshumb!==0): ?>
										<div class="sc_skills_info">
											<div class="sc_skills_label">SOSHUM</div>
										</div>
										<div class="sc_skills_item sc_skills_style_1 odd">
											<div class="sc_skills_count sc_skills_bgc2 sc_skills_border_st1">
												<div class="sc_skills_total" data-start="0" data-stop="<?php echo $tpa/$tpab; ?>" data-step="1" data-max="100" data-speed="23" data-duration="2254" data-ed=" ">0%</div>
											</div>
										</div>
										<?php endif ?>
									</div>
									<div class="sc_line sc_line_style_solid"></div>
									

                                </div>
								<!-- /Skills section -->
								<!-- grafik -->
								<!-- <canvas id="canvas"></canvas> -->
								<!-- grafik -->
                    </div>
                </div>
            </div>
            <!-- /Content -->
			<?php include 'footer.php'; ?>

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
    
   <script>
		var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var config = {
			type: 'line',
			data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				datasets: [{
					label: 'My First dataset',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [
						80,
						70,
						87,
						89,
						56,
						78,
						90
					],
					fill: false,
				}]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'Chart.js Line Chart'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Month'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Value'
						}
					}]
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = new Chart(ctx, config);
		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			config.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});

			});

			window.myLine.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var colorName = colorNames[config.data.datasets.length % colorNames.length];
			var newColor = window.chartColors[colorName];
			var newDataset = {
				label: 'Dataset ' + config.data.datasets.length,
				backgroundColor: newColor,
				borderColor: newColor,
				data: [],
				fill: false
			};

			for (var index = 0; index < config.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());
			}

			config.data.datasets.push(newDataset);
			window.myLine.update();
		});

	</script>


</body>


<!-- Mirrored from education-html.themerex.net/not-existing-page-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jun 2018 23:42:40 GMT -->
</html>