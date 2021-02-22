<!-- Header -->
<header class="top_panel_wrap top_panel_style_3 scheme_original">
    <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_above">
        <!-- Menu area -->
        <div class="top_panel_middle">
            <div class="content_wrap">
                <!-- Contact logo -->
                <div class="contact_logo">
                    <div class="logo">
                        <a href="/">
                            <img src={{asset("images/logo-gt-small.png")}} class="logo_main" alt="">
                            <img src={{asset("images/logo-gt-small.png")}} class="logo_fixed" alt="">
                        </a>

                        <h3 style="margin-top: -65px; margin-left: 75px;">{{$title != null ? $title->value : "BPS-Demo"}}</h3>
                    </div>
                </div>
                <!-- /Contact logo -->
                <!-- Main Menu -->
                <div class="menu_main_wrap">
                    <nav class="menu_main_nav_area">
                        <ul id="menu_main" class="menu_main_nav">
                            <!-- Home -->
                            <li class="menu-item">
                                <a href="/">Home</a>
                            </li>
                            <!-- /Home -->
                            <li class="menu-item">
                                <a href="/profil">Profil</a>
                            </li>
                            <!-- Events -->
                            <li class="menu-item">
                                <a href="/events">Events</a>
                            </li>
                            <!-- /Events -->
                            <!-- OIG -->
                            <li class="menu-item">
                                <a href="/oig">OIG</a>
                                {{-- <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="#">PKBGT</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">PPGT</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">PWGT</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">SMGT</a>
                                    </li>
                                </ul> --}}
                            </li>
                            <!-- /Sermons -->
                            <!-- Gallery -->
                            <li class="menu-item">
                                <a href="/gallery">Gallery</a>
                            </li>
                            <!-- /Gallery -->
                            <!-- Blog -->
                            <li class="menu-item">
                                <a href="/blog">Blog</a>
                            </li>
                            <!-- /Blog -->
                            <!-- Donate -->
                            {{-- <li class="donate-btn menu-item">
                                <a href="donate-now.html">Give</a>
                            </li> --}}
                            <!-- /Donate -->
                        </ul>
                    </nav>
                </div>
                <!-- /Main Menu -->
            </div>
        </div>
        <!-- /Menu area -->
    </div>
</header>
<!-- /Header -->
<!-- Header Mobile -->
<div class="header_mobile">
    <div class="content_wrap">
        <div class="menu_button icon-menu"></div>
        <div class="logo">
            <a href="index.html">
                <img src="http://placehold.it/122x60" class="logo_main" alt="">
            </a>
        </div>
    </div>
    <div class="side_wrap">
        <div class="close">Close</div>
        <div class="panel_top">
            <nav class="menu_main_nav_area">
                <ul id="menu_main_mobile" class="menu_main_nav">
                    <!-- Home -->
                    <li class="menu-item current-menu-ancestor current-menu-parent menu-item-has-children">
                        <a href="#">Home</a>
                        <ul class="sub-menu">
                            <li class="menu-item current-menu-item">
                                <a href="index.html">Home 1</a>
                            </li>
                            <li class="menu-item">
                                <a href="homepage-2.html">Home 2</a>
                            </li>
                            <li class="menu-item">
                                <a href="homepage-3.html">Home 3</a>
                            </li>
                        </ul>
                    </li>
                    <!-- /Home -->
                    <!-- Pages -->
                    <li class="menu-item menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="about-us.html">About Us</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Tools</a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="support.html">Support</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="customization.html">Customization</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Features</a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="typography.html">Typography</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="shortcodes.html">Shortcodes</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="page-404.html">404 Page</a>
                            </li>
                            <li class="menu-item">
                                <a href="events-calendar.html">Events Calendar</a>
                            </li>
                            <li class="menu-item">
                                <a href="shop.html">Shop</a>
                            </li>
                            <li class="menu-item">
                                <a href="contacts.html">Contacts</a>
                            </li>
                        </ul>
                    </li>
                    <!-- /Pages -->
                    <!-- Events -->
                    <li class="menu-item">
                        <a href="events.html">Events</a>
                    </li>
                    <!-- /Events -->
                    <!-- Sermons -->
                    <li class="menu-item menu-item-has-children">
                        <a href="#">Sermons</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="sermons.html">All Sermons</a>
                            </li>
                            <li class="menu-item">
                                <a href="sermons-boxed.html">Sermons Boxed</a>
                            </li>
                            <li class="menu-item">
                                <a href="sermons-fullscreen.html">Sermons Fullscreen</a>
                            </li>
                        </ul>
                    </li>
                    <!-- /Sermons -->
                    <!-- Gallery -->
                    <li class="menu-item menu-item-has-children">
                        <a href="#">Gallery</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="gallery-grid.html">Grid Gallery</a>
                            </li>
                            <li class="menu-item">
                                <a href="gallery-cobbles.html">Cobbles Gallery</a>
                            </li>
                            <li class="menu-item">
                                <a href="gallery-masonry.html">Masonry Gallery</a>
                            </li>
                        </ul>
                    </li>
                    <!-- /Gallery -->
                    <!-- Blog -->
                    <li class="menu-item">
                        <a href="post-formats.html">Blog</a>
                    </li>
                    <!-- /Blog -->
                    <!-- Donate -->
                    <li class="donate-btn menu-item">
                        <a href="donate-now.html">Give</a>
                    </li>
                    <!-- /Donate -->
                </ul>
            </nav>
            <!-- Search -->
            <div class="search_wrap search_style_regular search_state_fixed">
                <div class="search_form_wrap">
                    <form role="search" method="get" class="search_form" action="#">
                        <button type="submit" class="search_submit icon-search" title="Start search"></button>
                        <input type="text" class="search_field" placeholder="Search" value="" name="s" />
                    </form>
                </div>
                <div class="search_results widget_area scheme_original">
                    <a class="search_results_close icon-cancel"></a>
                    <div class="search_results_content"></div>
                </div>
            </div>
            <!-- /Search -->
            <!-- Login -->
            <div class="login">
                <a href="#popup_login" class="popup_link popup_login_link icon-user">Login</a>
            </div>
            <!-- /Login -->
        </div>
        <!-- Socials panel -->
        <div class="panel_bottom">
            <div class="contact_socials">
                <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_facebook">
                            <span class="icon-facebook"></span>
                        </a>
                    </div>
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_twitter">
                            <span class="icon-twitter"></span>
                        </a>
                    </div>
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_gplus">
                            <span class="icon-gplus"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Socials panel -->
    </div>
    <div class="mask"></div>
</div>
<!-- /Header Mobile -->
