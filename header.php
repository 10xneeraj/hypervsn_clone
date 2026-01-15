<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <header id="site-header" class="header-main">
        <!-- Tier 1: Top Bar (Logo and Become a Partner) -->
        <div class="header-main_top">
            <div class="container main-container">
                <a href="<?php echo home_url(); ?>" class="header-main_logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/logo-white.svg" alt="HYPERVSN">
                </a>
                <a href="#" class="btn-def partner-btn">
                    <svg class="icon-user" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Become a Partner
                </a>
            </div>
        </div>

        <!-- Tier 2: Main Navigation Bar -->
        <nav id="site-nav" class="header-main_nav">
            <div class="container nav-container">
                <ul class="main-nav_list">
                    <li class="main-nav_item has-mega" data-target="solutions-mega">
                        <a href="<?php echo home_url('/solutions'); ?>" class="main-nav_item-button">Solutions <i class="arrow-down"></i></a>
                    </li>
                    <li class="main-nav_item has-mega" data-target="industries-mega">
                        <span class="main-nav_item-button">Industries <i class="arrow-down"></i></span>
                    </li>
                    <li class="main-nav_item"><a href="#" class="navigation_link">Holograms for Events</a></li>
                    <li class="main-nav_item"><a href="#" class="navigation_link">Holographic Truck</a></li>
                    <li class="main-nav_item"><a href="#" class="navigation_link">OOH</a></li>

                    <li class="main-nav_item has-mega" data-target="tech-mega">
                        <span class="main-nav_item-button">Technology <i class="arrow-down"></i></span>
                    </li>
                    <li class="main-nav_item has-mega" data-target="company-mega">
                        <span class="main-nav_item-button">Company <i class="arrow-down"></i></span>
                    </li>
                    <li class="main-nav_item has-mega" data-target="partnership-mega">
                        <span class="main-nav_item-button">Partnership <i class="arrow-down"></i></span>
                    </li>
                </ul>

                <div class="main-nav_actions">
                    <a href="#" class="btn-pr demo-btn" data-modal-btn="Demo Request form">Demo Request</a>
                    <button class="mobile-menu-toggle" aria-label="Toggle Menu">
                        <span></span><span></span><span></span>
                    </button>
                </div>
            </div>
        </nav>

        <!-- --- MEGA MENUS --- -->
        
        <!-- Solutions Mega Menu -->
        <div class="mega-menu" id="solutions-mega">
            <div class="container mega-grid-layout">
                <div class="mega-col wide-col">
                    <div class="mega-rich-grid">
                        <!-- Column 1 -->
                        <div class="mega-rich-col">
                            <a href="#" class="mega-rich-item active">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-digital-avatar.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>Digital Avatar</h4>
                                    <p>Digital Avatar solution for any industry</p>
                                </div>
                            </a>
                            <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-holographic-human.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>Holographic Human</h4>
                                    <p>Life-size 3D holographic human</p>
                                </div>
                            </a>
                            <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-lift-learn.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>Lift & Learn</h4>
                                    <p>Interactive product discoveries</p>
                                </div>
                            </a>
                            <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-modeller.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>SmartV 3D Modeller</h4>
                                    <p>Interactive 3D holographic models</p>
                                </div>
                            </a>
                             <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-smartv-wall.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>HYPERVSN SmartV Wall</h4>
                                    <p>Scalable 3D Holographic display</p>
                                </div>
                            </a>
                        </div>
                        <!-- Column 2 -->
                        <div class="mega-rich-col">
                             <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-prime-edge.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>HYPERVSN Prime & Edge</h4>
                                    <p>Our new all-in-one solution</p>
                                </div>
                            </a>
                            <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-live-streaming.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>HYPERVSN Live Streaming</h4>
                                    <p>Broadcast Live Events in Real-time</p>
                                </div>
                            </a>
                            <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-catalogue.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>HYPERVSN 3D Catalogue</h4>
                                    <p>Controlled 3D products catalogue</p>
                                </div>
                            </a>
                             <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-slots.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>HYPERVSN Slots</h4>
                                    <p>3D Holographic Slot Machine</p>
                                </div>
                            </a>
                             <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-smartv-solo.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>HYPERVSN SmartV Solo</h4>
                                    <p>Interactive Holographic Display</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="mega-featured">
                    <div class="featured-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/solutions/digital-avatar.jpg'); min-height: 380px;">
                         <div class="featured-content">
                             <div class="featured-text-overlay">
                                <h3>SmartV Digital Avatar</h3>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Industries Mega Menu -->
        <div class="mega-menu" id="industries-mega">
            <div class="container mega-grid-layout">
                <div class="mega-col wide-col">
                    <div class="mega-rich-grid">
                        <div class="mega-rich-col">
                            <h5 class="mega-cat-title mb-3">By Sector</h5>
                            <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-catalogue.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>Retail</h4>
                                    <p>Engage customers with 3D product displays</p>
                                </div>
                            </a>
                            <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-lift-learn.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>Education</h4>
                                    <p>Interactive learning experiences</p>
                                </div>
                            </a>
                             <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-live-streaming.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>Events & Entertainment</h4>
                                    <p>Show-stopping holographic visuals</p>
                                </div>
                            </a>
                        </div>
                        <div class="mega-rich-col">
                             <h5 class="mega-cat-title mb-3"> &nbsp; </h5>
                             <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-smartv-wall.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>Experiential Marketing</h4>
                                    <p>Unforgettable brand activations</p>
                                </div>
                            </a>
                            <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-holographic-human.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>Healthcare</h4>
                                    <p>Medical visualization & detailed models</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mega-featured">
                    <div class="featured-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/solutions/prime-edge.jpg'); min-height: 380px;">
                        <div class="featured-content">
                            <div class="featured-text-overlay">
                                <h3>Industry Solutions</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Technology Mega Menu -->
         <div class="mega-menu" id="tech-mega">
            <div class="container mega-grid-layout">
                 <div class="mega-col wide-col">
                    <div class="mega-rich-grid">
                        <div class="mega-rich-col">
                            <h5 class="mega-cat-title mb-3">Products</h5>
                            <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-prime-edge.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>HYPERVSN Prime & Edge</h4>
                                    <p>Our new all-in-one solution</p>
                                </div>
                            </a>
                            <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-smartv-wall.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>HYPERVSN SmartV Wall</h4>
                                    <p>Scalable 3D Holographic display</p>
                                </div>
                            </a>
                             <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-smartv-solo.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>HYPERVSN SmartV Solo</h4>
                                    <p>Interactive Holographic Display</p>
                                </div>
                            </a>
                        </div>
                         <div class="mega-rich-col">
                            <h5 class="mega-cat-title mb-3">Creation</h5>
                            <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/3d-content-icon.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>3D Content</h4>
                                    <p>Creating holographic assets</p>
                                </div>
                            </a>
                             <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/smartv-solo-icon.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>Accessories</h4>
                                    <p>Protective covers & stands</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                 <div class="mega-featured">
                     <div class="featured-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/solutions/modeller.jpg'); min-height: 380px;">
                        <div class="featured-content">
                            <div class="featured-text-overlay">
                                <h3>Future Tech</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- Company Mega Menu -->
         <div class="mega-menu" id="company-mega">
            <div class="container mega-grid-layout">
                  <div class="mega-col wide-col">
                    <div class="mega-rich-grid">
                        <div class="mega-rich-col">
                             <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/categories-white.png" alt="" style="filter: invert(1);"></div> <!-- Reusing generic -->
                                <div class="rich-info">
                                    <h4>About Us</h4>
                                    <p>Our story & mission</p>
                                </div>
                            </a>
                             <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/use-cases-white.png" alt="" style="filter: invert(1);"></div>
                                <div class="rich-info">
                                    <h4>Events</h4>
                                    <p>Where to find us</p>
                                </div>
                            </a>
                        </div>
                         <div class="mega-rich-col">
                             <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-live-streaming.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>Press & Media</h4>
                                    <p>Latest news releases</p>
                                </div>
                            </a>
                             <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-catalogue.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>Blog</h4>
                                    <p>Insights & updates</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mega-featured">
                     <div class="featured-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/solutions/smartv-wall.jpg'); min-height: 380px;">
                        <div class="featured-content">
                            <div class="featured-text-overlay">
                                <h3>The Company</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Partnership Mega Menu -->
        <div class="mega-menu" id="partnership-mega">
             <div class="container mega-grid-layout">
                  <div class="mega-col wide-col">
                    <div class="mega-rich-grid">
                        <div class="mega-rich-col">
                             <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-modeller.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>Become a Partner</h4>
                                    <p>Join the revolution</p>
                                </div>
                            </a>
                        </div>
                         <div class="mega-rich-col">
                             <a href="#" class="mega-rich-item">
                                <div class="rich-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/solutions/icon-catalogue.png" alt=""></div>
                                <div class="rich-info">
                                    <h4>Find a Reseller</h4>
                                    <p>Locate a partner near you</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Featured Card -->
                <div class="mega-featured">
                    <div class="featured-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/solutions/lift-learn.jpg'); min-height: 380px;">
                        <div class="featured-content">
                             <div class="featured-text-overlay">
                                <h3>Partnership</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- END HEADER -->
