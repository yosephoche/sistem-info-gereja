@extends('pages.layouts.main')
@section('title-breadcrumb')
<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
        <div class="content_wrap">
            <h1 class="page_title">Grid Gallery</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="index.html">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Grid Gallery</span>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="page_content_wrap page_paddings_no">
    <div class="content_wrap">
        <div class="content">
            <article class="post_item post_item_single page">
                <section class="post_content tpl_gallery_section">
                    <!-- THE ESSENTIAL GRID -->
                    <!-- GRID WRAPPER FOR CONTAINER SIZING - HERE YOU CAN SET THE CONTAINER SIZE AND CONTAINER SKIN -->
                    <article class="myportfolio-container gallery" id="esg-grid-2-1-wrap">
                        <!-- THE GRID ITSELF WITH FILTERS, PAGINATION, SORTING ETC... -->
                        <div id="esg-grid-2-1" class="esg-grid">
                            <article class="esg-filters esg-singlefilters grid-filters margin_bottom_20">
                                <!-- THE FILTERING, SORTING AND WOOCOMMERCE BUTTONS -->
                                <!-- THE FILTER BUTTONS -->
                                <div class="esg-filter-wrapper esg-fgc-2 margin_right_3 margin_left_3">
                                    <div class="esg-filterbutton selected esg-allfilter" data-filter="filterall" data-fid="-1">
                                        <span>All</span>
                                    </div>
                                    <div class="esg-filterbutton" data-fid="123" data-filter="filter-{{GaleriModel::EVENT}}">
                                        <span>{{GaleriModel::EVENT}}</span>
                                        <span class="esg-filter-checked">
                                            <i class="eg-icon-ok-1"></i>
                                        </span>
                                    </div>
                                    <div class="esg-filterbutton" data-fid="121" data-filter="filter-{{GaleriModel::IBADAH}}">
                                        <span>{{GaleriModel::IBADAH}}</span>
                                        <span class="esg-filter-checked">
                                            <i class="eg-icon-ok-1"></i>
                                        </span>
                                    </div>
                                    <div class="esg-filterbutton" data-fid="124" data-filter="filter-{{GaleriModel::ORGANISASI}}">
                                        <span>{{GaleriModel::ORGANISASI}}</span>
                                        <span class="esg-filter-checked">
                                            <i class="eg-icon-ok-1"></i>
                                        </span>
                                    </div>
                                    <div class="esg-filterbutton" data-fid="122" data-filter="filter-{{GaleriModel::OTHER}}">
                                        <span>{{GaleriModel::OTHER}}</span>
                                        <span class="esg-filter-checked">
                                            <i class="eg-icon-ok-1"></i>
                                            </span>
                                    </div>
                                    <div class="eg-clearfix"></div>
                                </div>
                            </article>
                            <div class="esg-clear-no-height"></div>
                            <!-- ############################ -->
                            <!-- THE GRID ITSELF WITH ENTRIES -->
                            <!-- ############################ -->
                            <ul>
                                @foreach ($galeries as $image)
                                    <!-- PORTFOLIO ITEM -->
                                    <li class="filterall filter-gallery filter-events filter-{{$image->category}} eg-gallery-wrapper">
                                        <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
                                        <div class="esg-media-cover-wrapper">
                                            <!-- THE MEDIA OF THE ENTRY -->
                                            <div class="esg-entry-media">
                                                <img src="{{$image->full_path}}" alt="" width="2400" height="1220">
                                            </div>
                                            <!-- THE CONTENT OF THE ENTRY -->
                                            <div class="esg-entry-cover esg-fade" data-delay="0">
                                                <!-- THE COLORED OVERLAY -->
                                                <div class="esg-overlay esg-fade eg-gallery-container" data-delay="0"></div>
                                                <div class="esg-center eg-gallery-element-0-a esg-falldown" data-delay="0.1">
                                                    <a class="eg-gallery-element-0 esgbox" href="https://picsum.photos/2400/1220">
                                                        <i class="eg-icon-plus"></i>
                                                    </a>
                                                </div>
                                                <div class="esg-center eg-gallery-element-8 esg-none esg-clear"></div>
                                            </div>
                                            <!-- END OF THE CONTENT IN THE ENTRY -->
                                        </div>
                                        <!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->
                                    </li>
                                    <!-- END OF PORTFOLIO ITEM -->
                                @endforeach
                            </ul>
                            <!-- ############################ -->
                            <!--      END OF THE GRID         -->
                            <!-- ############################ -->
                            <article class="esg-filters esg-singlefilters margin_top_50 text_align_center">
                                <!-- THE PAGINATION CONTAINER. PAGE BUTTONS WILL BE ADDED ON DEMAND AUTOMATICALLY !! -->
                                <div class="esg-pagination esg-fgc-2 margin_left_3 margin_right_3"></div>
                                <!-- END OF THE PAGINATION -->
                            </article>
                            <div class="esg-clear-no-height"></div>
                        </div>
                        <!-- END OF THE GRID -->
                    </article>
                    <!-- END OF THE GRID WRAPPER -->
                    <div class="clear"></div>
                </section>
            </article>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
