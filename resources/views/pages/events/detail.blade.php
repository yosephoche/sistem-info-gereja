@extends('pages.layouts.main')
@section('title-breadcrumb')
<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
        <div class="content_wrap">
            <h1 class="page_title">{{$event->name}}</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="index.html">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item all" href="#">Upcoming Events</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">{{$event->name}}</span>
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
            <section class="post tribe_events_wrapper">
                <article class="post_content">
                    <div id="tribe-events-pg-template">
                        <div id="tribe-events" class="tribe-no-js" data-live_ajax="1" data-datepicker_format="0" data-category="">
                            <span class="tribe-events-ajax-loading">
                                <img class="tribe-events-spinner-medium" src="js/vendor/the-events-calendar/images/tribe-loading.gif" alt="Loading Events" />
                            </span>
                            <div id="tribe-events-content" class="tribe-events-single">
                                <p class="tribe-events-back"> <a href="#"> &laquo; All Events</a></p>
                                <!-- Notices -->
                                <h1 class="tribe-events-single-event-title">{{$event->name}}</h1>
                                <div class="tribe-events-schedule tribe-clearfix">
                                    <h2><span class="tribe-event-date-start">{{$event->custom_start_date}}</span></h2>
                                </div>
                                <div class="tribe_events type-tribe_events">
                                    <!-- Event content -->
                                    <div class="tribe-events-single-event-description tribe-events-content">
                                        <p>{{$event->description}}</p>
                                    </div>
                                    <div class="tribe-events-cal-links">
                                        <a class="tribe-events-gcal tribe-events-button" href="#" title="Add to Google Calendar">+ Google Calendar</a>
                                    </div>
                                    <!-- Event meta -->
                                    <div class="tribe-events-single-section tribe-events-event-meta primary tribe-clearfix">
                                        <div class="tribe-events-meta-group tribe-events-meta-group-details">
                                            <h3 class="tribe-events-single-section-title"> Details </h3>
                                            <dl>
                                                <dt> Date: </dt>
                                                <dd>
                                                    <abbr class="tribe-events-abbr tribe-events-start-date dtstart" title="2017-01-31"> {{$event->custom_start_date}} </abbr>
                                                </dd>
                                                <dt> Time: </dt>
                                                <dd>
                                                    <div class="tribe-events-abbr tribe-events-start-time dtstart" title="2017-01-31">
                                                        {{$event->time}} </div>
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="tribe-events-meta-group tribe-events-meta-group-venue">
                                            <h3 class="tribe-events-single-section-title"> Venue </h3>
                                            <dl>
                                                <dt></dt>
                                                <dd class="tribe-venue"> {{$event->location}} </dd>
                                                <dt></dt>
                                                <dd class="tribe-venue-location">
                                                    <address class="tribe-events-address">
                                                        <span class="tribe-address">
                                                            <span class="tribe-street-address">{{$event->address}}</span>
                                                                
                                                        </span>
                                                            
                                                        <a class="tribe-events-gmap" href="http://maps.google.com/maps?f=q&#038;source=s_q&#038;hl=en&#038;geocode=&#038;q={{$event->address}}" title="Click to view a Google Map" target="_blank">+ Google Map</a>
                                                    </address>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </div>
        <!-- /Content -->
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $("body").addClass("single");
        $("body").addClass("single-tribe_events");
        $("body").addClass("events-single");
        $("body").addClass("tribe-events-style-full");
        $("body").addClass("church");
        $("body").addClass("tribe-events-page-template");
    });
</script>
@endsection