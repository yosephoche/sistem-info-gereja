@extends('pages.layouts.main')
@section('title-breadcrumb')
<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg5">
        <div class="content_wrap">
            <h1 class="page_title">Post formats</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="index.html">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Post formats</span>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="page_content_wrap page_paddings_no">
    <div class="content_wrap">
        <div class="content">
            @foreach ($articles as $post)
                <!-- Image Post -->
                <article class="post_item post_item_excerpt post_format_image odd post">
                    <div class="post_featured">
                        <div class="post_thumb" data-title="Image Post">
                            <a class="hover_icon hover_icon_link" href="#">
                                <img alt="Image Post" src="{{ URL::to('/') }}/images/{{$post->image}}"></a>
                        </div>
                    </div>
                    <div class="post_content clearfix">
                        <h3 class="post_title">
                            <a href="{{ route('blog.detail', ['id'=>$post->id]) }}">{{$post->title}}</a>
                        </h3>
                        <div class="post_info">
                            <span class="post_info_item post_info_posted_by">Posted by {{$post->user->name}}</span>
                            <span class="post_info_item post_info_tags">in
                                <a class="category_link" href="#">{{$post->kategori->name}}</a>
                            </span>
                            <span class="post_info_item post_info_counters">{{$post->published_at}}</span>
                        </div>
                        <div class="post_descr">
                            <p>{{\Illuminate\Support\Str::limit($post->content, 300, $end='...')}}</p>
                            <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_2 sc_button_size_large">Read more</a>
                        </div>
                    </div>
                </article>
                <!-- /Image Post -->
            @endforeach

            {{$articles->onEachSide(2)->links('vendor.pagination.custom')}}
            
        </div>
        <div class="sidebar widget_area scheme_original">
            <div class="sidebar_inner widget_area_inner">
                <!-- Widget: Search -->
                <aside class="widget widget_search">
                    <form method="get" class="search_form" action="#">
                        <input type="text" class="search_field" placeholder="Search" value="" name="s" title="Search for:" />
                        <button type="submit" class="search_button icon-search"></button>
                    </form>
                </aside>
                
                <aside class="widget widget_recent_posts">
                    <h5 class="widget_title">Latest Post</h5>
                    @foreach ($latest_article as $item)
                        <article class="post_item with_thumb first">
                            <div class="post_thumb">
                                <img alt="" src="http://placehold.it/75x75">
                            </div>
                            <div class="post_content">
                                <h6 class="post_title">
                                    <a href="post-single.html">{{$item->title}}</a>
                                </h6>
                                <div class="post_info">
                                        <span class="post_info_item">
                                            <a href="#" class="post_info_date">Tuesday, April 26, 2016</a>
                                        </span>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </aside>
                <aside class="widget widget_categories">
                    <h5 class="widget_title">Categories</h5>
                    <ul>
                        <li>
                            <a href="#">Blogger</a> (7)
                        </li>
                        <li>
                            <a href="#">Gallery</a> (25)
                        </li>
                        <li>
                            <a href="#">Mission</a> (3)
                        </li>
                        <li>
                            <a href="#">Portfolio (2 columns)</a>
                        </li>
                        <li>
                            <a href="#">Post formats</a> (11)
                        </li>
                        <li>
                            <a href="#">Sermons</a> (6)
                        </li>
                    </ul>
                </aside>
                
                <aside class="widget widget_tag_cloud">
                    <h5 class="widget_title">Tags</h5>
                    <div class="tagcloud">
                        <a href="#" title="4 topics">change</a>
                        <a href="#" title="3 topics">christian</a>
                        <a href="#" title="3 topics">church</a>
                        <a href="#" title="7 topics">conferences</a>
                        <a href="#" title="9 topics">events</a>
                        <a href="#" title="4 topics">family</a>
                        <a href="#" title="4 topics">god</a>
                </aside>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
jQuery(document).ready(function ($) {
    $("body").removeClass("sidebar_hide");
    $("body").addClass("sidebar_show");
    $("body").addClass("sidebar_right");
});
</script>
@endsection