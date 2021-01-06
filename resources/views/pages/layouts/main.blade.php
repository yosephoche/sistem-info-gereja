<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

    <head>
        <title>BPS Gereja Toraja</title>
        
        @include('pages.includes.meta')

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat:400,700|Lato:300,300i,400,400i,700,700i|Raleway:300,300i,400,400i,700,700i&amp;subset=latin-ext">
        
        @include('pages.includes.css')
        
        <link rel="icon" href="http://placehold.it/32x32" />
        <link rel="icon" href="http://placehold.it/32x32" />
        <link rel="apple-touch-icon-precomposed" href="http://placehold.it/32x32" />
    </head>

    <body class="home page body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide">
        <a id="toc_home" class="sc_anchor" title="Home" data-description="<i>Return to Home</i> - <br>navigate to home page of the site" data-icon="icon-home" data-url="index.html" data-separator="yes"></a>
        <a id="toc_top" class="sc_anchor" title="To Top" data-description="<i>Back to top</i> - <br>scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>
        <!-- Body wrap -->
        <div class="body_wrap">
            <!-- Page wrap -->
            <div class="page_wrap">
                <div class="top_panel_fixed_wrap"></div>
                {{-- Header Section --}}
                @include('pages.includes.header')
                
                {{-- Image Slider Section --}}
                
                @yield('slider')

                @yield('title-breadcrumb')

                <!-- Page Content Wrap -->
                <div class="page_content_wrap page_paddings_no">
                    @yield('content')
                </div>
                <!-- /Page Content Wrap -->

                <!-- Footer -->
                <footer class="footer_wrap widget_area scheme_original">
                   @include('pages.includes.footer')
                </footer>
                <!-- /Footer -->

                <!-- Copyright -->
                <div class="copyright_wrap copyright_style_text scheme_original">
                    <div class="copyright_wrap_inner">
                        <div class="content_wrap">
                            <div class="copyright_text">ThemeREX © 2017 All Rights Reserved <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Copyright -->
            </div>
            <!-- /Page wrap -->
        </div>
        <!-- /Body wrap -->

        @include('pages.includes.js')
        
        @yield('script')

    </body>

</html>