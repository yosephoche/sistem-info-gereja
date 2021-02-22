@extends('pages.layouts.main')
@section('title-breadcrumb')
<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
        <div class="content_wrap">
            <h1 class="page_title">About Us</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="/">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">About Us</span>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="page_content_wrap page_paddings_no">
    <div class="content">
        <article class="post_item post_item_single page">
            <section class="post_content">
                <div class="content_wrap">
                    <h2 class="sc_title sc_title_underline_dark sc_align_center margin_top_huge margin_bottom_small text_align_center">Sejarah BPS</h2>
                    {!! $about->description !!}

                </div>
                <!-- Services section -->
                <div class="tpl_bg_1">
                    <div class="sc_services_wrap content_wrap padding_top_7_1429em padding_bottom_2_1429em">
                        <div class="sc_services sc_services_style_services-5 sc_services_type_images sc_slider_pagination sc_slider_pagination_bottom sc_slider_nocontrols sc_slider_swiper swiper-slider-container width_100_per" data-interval="7711" data-slides-per-view="2" data-slides-space="40" data-slides-min-width="250">
                            <div class="slides swiper-wrapper">
                                <!-- Service item -->
                                <div class="swiper-slide width_100_per" data-style="width:100%;">
                                    <div class="sc_services_item_wrap">
                                        <div class="sc_services_item sc_services_item_2 even">

                                            <div class="sc_services_item_content">
                                                <h4 class="sc_services_item_title">
                                                    <a href="service-single.html">Visi</a>
                                                </h4>
                                                <div class="sc_services_item_description">
                                                    <p>&#8220;{!! $about->visi !!} &#8230;</p>
                                                    <a href="service-single.html" class="sc_services_item_readmore">Learn more
                                                        <span class="icon-right-1"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Service item -->
                                <!-- Service item -->
                                <div class="swiper-slide width_100_per" data-style="width:100%;">
                                    <div class="sc_services_item_wrap">
                                        <div class="sc_services_item sc_services_item_3 odd">

                                            <div class="sc_services_item_content">
                                                <h4 class="sc_services_item_title">
                                                    <a href="service-single.html">Misi</a>
                                                </h4>
                                                <div class="sc_services_item_description">
                                                   <p>&#8220;{!! $about->misi !!} &#8230;</p>
                                                    <a href="service-single.html" class="sc_services_item_readmore">Learn more
                                                        <span class="icon-right-1"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Service item -->

                        </div>
                    </div>
                </div>
                <!-- /Services section -->

                <!-- General Info Section -->
                <div class="general_info_section">
                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3 margin_bottom_large">
                        <div class="column-1_3 sc_column_item sc_column_item_1 odd first">
                            <div class="gi_block">
                                <h3 class="sc_title sc_title_regular tpl_light">Sunday Gatherings</h3>
                                <p class="tpl_light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                <a href="#" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_4 sc_button_size_large margin_top_medium">READ MORE</a>
                            </div>
                        </div><div class="column-1_3 sc_column_item sc_column_item_2 even">
                             <div class="gi_block">
                                <h3 class="sc_title sc_title_regular tpl_light">Looking for a church?</h3>
                                <p class="tpl_light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                <a href="#" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_4 sc_button_size_large margin_top_medium">READ MORE</a>
                             </div>
                        </div><div class="column-1_3 sc_column_item sc_column_item_3 last">
                            <div class="gi_block">
                                <h3 class="sc_title sc_title_regular tpl_light">Service to Others</h3>
                                <p class="tpl_light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                <a href="#" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_4 sc_button_size_large margin_top_medium">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /General Info Section -->
                <!-- Team section -->
                <div class="sc_team_wrap scheme_original padding_top_2_5em padding_bottom_7_1429em">
                    <div class="content_wrap">
                        <div class="sc_team sc_team_style_team-1 sc_slider_nopagination sc_slider_nocontrols aligncenter width_100_per" data-interval="7176" data-slides-per-view="3" data-slides-min-width="250">
                            <h6 class="sc_team_subtitle sc_item_subtitle">Pengurus Organisasi</h6>
                            <h2 class="sc_team_title sc_item_title">Pengurus BPS Periode 2020-2024</h2>
                            <div class="sc_team_descr sc_item_descr">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa</div>
                            <div class="sc_columns columns_wrap">
                                <!-- Team item -->
                                <div class="column-1_3 column_padding_bottom">
                                    <div class="sc_team_item sc_team_item_1 odd first">
                                        <div class="sc_team_item_avatar">
                                            <a class="sc_team_item_avatar_link" href="#">
                                                <img alt="" src="http://placehold.it/370x226">
                                            </a>
                                        </div>
                                        <div class="sc_team_item_info">
                                            <h5 class="sc_team_item_title">
                                                <a href="team-single.html">Elmer Black</a>
                                            </h5>
                                            <div class="sc_team_item_position">Ketua Umum</div>
                                            <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                <div class="sc_socials_item">
                                                    <a href="#" target="_blank" class="social_icons social_twitter">
                                                        <span class="icon-twitter"></span>
                                                    </a>
                                                </div>
                                                <div class="sc_socials_item">
                                                    <a href="#" target="_blank" class="social_icons social_facebook">
                                                        <span class="icon-facebook"></span>
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
                                </div><!-- /Team item --><!-- Team item --><div class="column-1_3 column_padding_bottom">
                                    <div class="sc_team_item sc_team_item_2 even">
                                        <div class="sc_team_item_avatar">
                                            <a class="sc_team_item_avatar_link" href="#">
                                                <img alt="" src="http://placehold.it/370x226">
                                            </a>
                                        </div>
                                        <div class="sc_team_item_info">
                                            <h5 class="sc_team_item_title">
                                                <a href="team-single.html">Herbert Wright</a>
                                            </h5>
                                            <div class="sc_team_item_position">Ketua Bidang I</div>

                                            <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                <div class="sc_socials_item">
                                                    <a href="#" target="_blank" class="social_icons social_twitter">
                                                        <span class="icon-twitter"></span>
                                                    </a>
                                                </div>
                                                <div class="sc_socials_item">
                                                    <a href="#" target="_blank" class="social_icons social_facebook">
                                                        <span class="icon-facebook"></span>
                                                    </a>
                                                </div>
                                                <div class="sc_socials_item">
                                                    <a href="#" target="_blank" class="social_icons social_instagramm">
                                                        <span class="icon-instagramm"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /Team item --><!-- Team item --><div class="column-1_3 column_padding_bottom">
                                    <div class="sc_team_item sc_team_item_3 odd">
                                        <div class="sc_team_item_avatar">
                                            <a class="sc_team_item_avatar_link" href="#">
                                                <img alt="" src="http://placehold.it/370x226">
                                            </a>
                                        </div>
                                        <div class="sc_team_item_info">
                                            <h5 class="sc_team_item_title">
                                                <a href="team-single.html">Elijah Douglas</a>
                                            </h5>
                                            <div class="sc_team_item_position">Ketua Bidang II</div>
                                            <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                <div class="sc_socials_item">
                                                    <a href="#" target="_blank" class="social_icons social_twitter">
                                                        <span class="icon-twitter"></span>
                                                    </a>
                                                </div>
                                                <div class="sc_socials_item">
                                                    <a href="#" target="_blank" class="social_icons social_facebook">
                                                        <span class="icon-facebook"></span>
                                                    </a>
                                                </div>
                                                <div class="sc_socials_item">
                                                    <a href="#" target="_blank" class="social_icons social_instagramm">
                                                        <span class="icon-instagramm"></span>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Team section -->
            </section>
        </article>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
jQuery(document).ready(function ($) {
    $("body").removeClass("home");
});
</script>
@endsection
