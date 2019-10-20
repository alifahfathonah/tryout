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
									<a href="logout" class="icon icon-logout" onclick="return confirm('apakah anda akan logout?')">Logout</a>
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
                </div>
				<!-- /User menu -->
				<!-- Main menu -->
                <div class="menu_main_wrap logo_left">					
                    <div class="content_wrap clearfix">
						<!-- Logo -->
                        <div class="logo">
                            <a href="awal">
								<img src="<?php echo base_url('dst/images/logo_light.png'); ?>" class="logo_main" alt="">
								<img src="<?php echo base_url('dst/images/logo_light.png'); ?>" class="logo_fixed" alt="">
							</a>
                        </div>
						<!-- Logo -->
						<!-- Navigation -->
                        <a href="#" class="menu_main_responsive_button icon-menu-1"></a>
						<nav class="menu_main_nav_area">
							<ul id="menu_main" class="menu_main_nav">
								<li class="menu-item"><a href="awal">Home</a></li>
								<li class="menu-item"><a href="dftr_blog">Blog</a></li>
                                <li class="menu-item"><a href="lihat_tes">tryout</a></li>
                                <li class="menu-item"><a href="listpembahasan">Pembahasan</a></li>
								<li class="menu-item menu-item-has-children"><a href="#">Informasi</a>
									<ul class="sub-menu">
										<li class="menu-item"><a href="lihatnilai">Nilai</a></li>
									</ul>
								</li>
                                <li class="menu-item"><a href="<?= site_url('admin')?>">Admin</a></li>
							</ul>
						</nav>
						<!-- /Navigation -->
                    </div>
                </div>
				<!-- /Main menu -->