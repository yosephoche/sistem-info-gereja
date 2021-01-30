@extends('pages.layouts.main')

@section('title-breadcrumb')
<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
        <div class="content_wrap">
            <h1 class="page_title">{{$article->title}}</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="index.html">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item cat_post" href="#">Category</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">{{$article->title}}</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="page_content_wrap page_paddings_no">
    <div class="content_wrap">
        <!-- Content -->
        <div class="content">
            <article class="post_item post_item_single post">
                <section class="post_featured">
                    <div class="post_thumb" data-image="http://placehold.it/2400x1600" data-title="The Answer Is God">
                        <a class="hover_icon hover_icon_view" href="http://placehold.it/2400x1600" title="The Answer Is God">
                            <img alt="The Answer Is God" src="http://placehold.it/1170x659">
                        </a>
                    </div>
                </section>
                <section class="post_content">
                    <div class="post_info">
                        <span class="post_info_item post_info_posted_by vcard">Posted by {{$article->user->name}}</span>
                        <span class="post_info_item post_info_tags">in
                            <a class="category_link" href="#">{{$article->kategori->name}}</a>
                        </span>
                    </div>
                    <p>{{ $article->content }}</p>
                    
                </section>
                <section class="post_author author">
                    <div class="post_author_avatar">
                        <a href="#">
                            <img alt="" src="http://1.gravatar.com/avatar/1742f9368ac88f68ababbe4572718490?s=75&#038;d=mm&#038;r=g" />
                        </a>
                    </div>
                    <h6 class="post_author_title">About
                        <span>
                            <a href="#" class="fn">{{$article->user->name}}</a>
                        </span>
                    </h6>
                    <div class="post_author_info">
                        <p>This Information for author of artikel</p>
                        <p>This Information for author of artikel</p>
                    </div>
                </section>
            </article>
        </div>
        <!-- /Content -->
        <!-- Sidebar -->
        <div class="sidebar widget_area scheme_original">
            <div class="sidebar_inner widget_area_inner">
                <!-- Widget: Categories -->
                <aside class="widget widget_categories">
                    <h5 class="widget_title">Latest Sermons</h5>
                    <ul>
                        <li>
                            <a href="#">Blogger</a> (7)
                        </li>
                       
                        <li>
                            <a href="#">Post formats</a> (11)
                        </li>
                        <li>
                            <a href="#">Sermons</a> (6)
                        </li>
                    </ul>
                </aside><!-- /Widget: Categories -->
                <!-- Widget: Recent Posts -->
                <aside class="widget widget_recent_posts">
                    <h5 class="widget_title">Latest Artikel</h5>
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
                </aside><!-- /Widget: Recent Posts -->
            
            <!-- Widget: Tag Cloud -->
            <aside class="widget widget_tag_cloud">
                <h5 class="widget_title">Tags</h5>
                <div class="tagcloud">
                    @foreach ($article->tag_list() as $tag)
                        <a href="#" title="4 topics">{{$tag}}</a>
                    @endforeach
                </div>
            </aside><!-- /Widget: Tag Cloud -->
            </div>
        </div>
        <!-- /Sidebar -->
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $("body").removeClass("sidebar_hide");
        $("body").removeClass("home");
        $("body").removeClass("page");
        $("body").addClass("single");
        $("body").addClass("sidebar_show");
        $("body").addClass("sidebar_right");
    });
</script>
@endsection