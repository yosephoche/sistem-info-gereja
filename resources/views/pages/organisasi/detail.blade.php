@extends('pages.layouts.main')
@section('title-breadcrumb')
<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
        <div class="content_wrap">
            <h1 class="page_title">Persekutuan Pemuda Gereja Toraja</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="index.html">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">PPGT</span>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="page_content_wrap page_paddings_yes">
    <div class="content_wrap">
        <!-- Content -->
        <div class="content">
            <article class="post_item post_item_single_team post_featured_right team">
                <section class="post_featured">
                    <div class="post_thumb" data-image="http://placehold.it/1200x800" data-title="Team Single">
                        <a class="hover_icon hover_icon_view" href="http://placehold.it/1200x800" title="Team Single">
                            <img alt="Team Single" src="http://placehold.it/770x434">
                        </a>
                    </div>
                </section>
                <section class="post_content">
                    <div id="sc_tabs_2" class="sc_tabs sc_tabs_style_2" data-active="2">
                        <ul class="sc_tabs_titles">
                            <li class="sc_tabs_title first">
                                <a href="#sc_tab_2-1" class="theme_button" id="sc_tab_2-1_tab">Visi</a>
                            </li>
                            <li class="sc_tabs_title">
                                <a href="#sc_tab_2-2" class="theme_button" id="sc_tab_2-2_tab">Misi</a>
                            </li>
                            <li class="sc_tabs_title last">
                                <a href="#sc_tab_2-3" class="theme_button" id="sc_tab_2-3_tab">Sejarah</a>
                            </li>
                        </ul>
                        @if ($organisasi)
                            <div id="sc_tab_2-1" class="sc_tabs_content odd first">
                                <div id="sc_tab_2-1_scroll" class="sc_scroll sc_scroll_vertical">
                                    <div class="sc_scroll_wrapper swiper-wrapper">
                                        <div class="sc_scroll_slide swiper-slide">
                                            <p>{{$organisasi->visi}}</p>
                                        </div>
                                    </div>
                                    <div id="sc_tab_2-1_scroll_bar" class="sc_scroll_bar sc_scroll_bar_vertical sc_tab_2-1_scroll_bar"></div>
                                </div>
                            </div>
                            <div id="sc_tab_2-2" class="sc_tabs_content even">
                                <div id="sc_tab_2-2_scroll" class="sc_scroll sc_scroll_vertical">
                                    <div class="sc_scroll_wrapper swiper-wrapper">
                                        <div class="sc_scroll_slide swiper-slide">
                                            <p>{{$organisasi->misi}}</p>
                                        </div>
                                    </div>
                                    <div id="sc_tab_2-2_scroll_bar" class="sc_scroll_bar sc_scroll_bar_vertical sc_tab_2-2_scroll_bar"></div>
                                </div>
                            </div>
                            <div id="sc_tab_2-3" class="sc_tabs_content odd">
                                <div id="sc_tab_2-3_scroll" class="sc_scroll sc_scroll_vertical">
                                    <div class="sc_scroll_wrapper swiper-wrapper">
                                        <div class="sc_scroll_slide swiper-slide">
                                            <p>{{$organisasi->sejarah}}</p>
                                        </div>
                                    </div>
                                    <div id="sc_tab_2-3_scroll_bar" class="sc_scroll_bar sc_scroll_bar_vertical sc_tab_2-3_scroll_bar"></div>
                                </div>
                            </div>
                        @endif
                    </div>
                    
                    <p>{{$organisasi->description}}</p>
                    
                </section>
            </article>
        </div>
        <!-- /Content -->
    </div>
</div>
@endsection

@section('script')

@endsection