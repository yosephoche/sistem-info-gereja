@extends('pages.layouts.main')
@section('title-breadcrumb')
<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg4">
        <div class="content_wrap">
            <h1 class="page_title">Organisasi</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="index.html">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Organisasi</span>
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
            <article class="post_item post_item_single page">
                <section class="post_content">
                <article class="myportfolio-container newlife-church" id="esg-grid-6-1-wrap">
                    <div id="esg-grid-6-1" class="esg-grid" style="">
                        
                        <div class="esg-clear-no-height"></div>
                        
                        <ul>
                            <!-- PORTFOLIO ITEM -->
                            @foreach ($organisasi as $oig)
                                <li class="filterall filter-popular eg-lorem-ipsum-wrapper">
                                    <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
                                    <div class="esg-media-cover-wrapper">
                                        <!-- THE MEDIA OF THE ENTRY -->
                                        <div class="esg-entry-media">
                                            <img src="http://placehold.it/370x288" alt="">
                                        </div>
                                        <!-- THE CONTENT OF THE ENTRY -->
                                        <div class="esg-entry-cover">
                                            <!-- THE COLORED OVERLAY -->
                                            <div class="esg-overlay esg-slide eg-lorem-ipsum-container" data-delay="0"></div>
                                            <div class="esg-center eg-lorem-ipsum-element-25-a esg-slide" data-delay="0.2">
                                                <a class="eg-lorem-ipsum-element-25 esgbox" href="http://placehold.it/2400x1600">SHOW IMAGE</a>
                                            </div>
                                            <div class="esg-center esg-click-to-play-video eg-lorem-ipsum-element-28 esg-slide" data-delay="0.2">PLAY VIDEO</div>
                                        </div>
                                        <!-- END OF THE CONTENT IN THE ENTRY -->
                                        <!-- THE CONTENT PART OF THE ENTRIES -->
                                        <div class="esg-entry-content eg-lorem-ipsum-content">
                                            <div class="esg-content eg-lorem-ipsum-element-0-a">
                                                <a class="eg-lorem-ipsum-element-0" href="{{ route('oig.detail', ['id'=>$oig->id]) }}" target="_self">{{$oig->name}}</a>
                                            </div>
                                            <div class="esg-content eg-lorem-ipsum-element-6">{{$oig->description}}</div>
                                            <div class="esg-content eg-lorem-ipsum-nostyle-element-38">
                                                <a class="custom_field_link" href="https://drive.google.com">
                                                    <span class="icon-iconmonstr-download-11-icon"></span>
                                                </a>
                                            </div>
                                            <div class="esg-content eg-lorem-ipsum-nostyle-element-41">
                                                <a class="custom_field_link" href="media/AxiomthemesblankPDF.pdf">
                                                    <span class="icon-iconmonstr-pdf-file-2-icon"></span>
                                                </a>
                                            </div>
                                            <div class="esg-content eg-post-1304 eg-lorem-ipsum-nostyle-element-42">
                                                <a class="custom_field_link" href="https://vimeo.com/34767613">
                                                    <span class="icon-iconmonstr-video-camera-icon"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->
                                </li>
                            @endforeach
                            <!-- END OF PORTFOLIO ITEM -->
                        </ul>
                        <article class="esg-filters esg-singlefilters text_align_center margin_top_20">
                            <div class="esg-navigationbutton esg-left esg-fgc-6" style="margin-left: 10px !important; margin-right: 10px !important; display: none;">
                                <i class="eg-icon-left-open"></i></div>
                            <!-- THE PAGINATION CONTAINER. PAGE BUTTONS WILL BE ADDED ON DEMAND AUTOMATICALLY !! -->
                            <div class="esg-pagination  esg-fgc-6 margin_left_10 margin_right_10"></div>
                            <!-- END OF THE PAGINATION -->
                            <div class="esg-navigationbutton esg-right esg-fgc-6" style="margin-left: 10px !important; margin-right: 10px !important; display: none;">
                                <i class="eg-icon-right-open"></i></div>
                        </article>
                        <div class="esg-clear-no-height"></div>
                    </div>
                </article>
                <div class="clear"></div>
                </section>
            </article>
        </div>
        <!-- /Content -->
    </div>
</div>
@endsection

@section('script')

@endsection