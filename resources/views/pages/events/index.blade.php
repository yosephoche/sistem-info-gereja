@extends('pages.layouts.main')
@section('title-breadcrumb')
<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
        <div class="content_wrap">
            <h1 class="page_title">All Events</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="index.html">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item all" href="#">Upcoming Events</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">All Events</span>
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
                            <div class="tribe-events-before-html"></div>
                            <span class="tribe-events-ajax-loading">
                                <img class="tribe-events-spinner-medium" src="js/vendor/the-events-calendar/images/tribe-loading.gif" alt="Loading Events" />
                            </span>
                            <div id="tribe-events-content-wrapper" class="tribe-clearfix">
                                <input type="hidden" id="tribe-events-list-hash" value="">
                                <!-- Tribe Bar -->
                                <div id="tribe-events-bar">
                                    <form id="tribe-bar-form" class="tribe-clearfix" name="tribe-bar-form" method="post" action="#">
                                        <!-- Mobile Filters Toggle -->
                                        <div id="tribe-bar-collapse-toggle">
                                            Find Events<span class="tribe-bar-toggle-arrow"></span>
                                        </div>
                                        <!-- Views -->
                                        <div id="tribe-bar-views">
                                            <div class="tribe-bar-views-inner tribe-clearfix">
                                                <h3 class="tribe-events-visuallyhidden">Event Views Navigation</h3>
                                                <label>View As</label>
                                                <select class="tribe-bar-views-select tribe-no-param" name="tribe-bar-view">
                                                    <option selected value="#" data-view="list">
                                                        List </option>
                                                    <option value="#" data-view="month">
                                                        Month </option>
                                                    <option value="#" data-view="day">
                                                        Day </option>
                                                </select>
                                            </div>
                                         </div>

                                        <div class="tribe-bar-filters">
                                            <div class="tribe-bar-filters-inner tribe-clearfix">
                                                <div class="tribe-bar-date-filter">
                                                    <label class="label-tribe-bar-date" for="tribe-bar-date">Events From</label>
                                                    <input type="text" name="tribe-bar-date" class="position_relative" id="tribe-bar-date" value="" placeholder="Date">
                                                    <input type="hidden" name="tribe-bar-date-day" id="tribe-bar-date-day" class="tribe-no-param" value=""> </div>
                                                <div class="tribe-bar-search-filter">
                                                    <label class="label-tribe-bar-search" for="tribe-bar-search">Search</label>
                                                    <input type="text" name="tribe-bar-search" id="tribe-bar-search" value="" placeholder="Search"> </div>
                                                <div class="tribe-bar-submit">
                                                    <input class="tribe-events-button tribe-no-param" type="submit" name="submit-bar" value="Find Events" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Main Events Content -->
                                <div id="tribe-events-content" class="tribe-events-list">
                                    <!-- List Title -->
                                    <h2 class="tribe-events-page-title">Jadwal Acara</h2>
                                    <!-- Notices -->
                                    <!-- List Header -->
                                    <div id="tribe-events-header" data-title="Upcoming Events &#8211; Events &#8211; New Life Church" data-startofweek="1" data-view="list" data-baseurl="#">
                                        <!-- Header Navigation -->
                                        <ul class="tribe-events-sub-nav">
                                            <!-- Left Navigation -->
                                            <li class="tribe-events-nav-previous tribe-events-nav-left tribe-events-past" aria-label="previous events link">
                                                <a href="#" rel="prev">
                                                    <span>&laquo;</span> Previous Events
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Events Loop -->
                                    <div class="tribe-events-loop">

                                        @foreach ($events as $event)
                                            <!-- Event  -->
                                            <div class="type-tribe_events tribe-clearfix tribe-events-first">
                                                <!-- Event Title -->
                                                <h2 class="tribe-events-list-event-title">
                                                    <a class="tribe-event-url" href="{{ route('event.detail', ['id'=>$event->id]) }}" title="Listen to the Wind Words" rel="bookmark">
                                                        {{$event->name}}
                                                    </a>
                                                </h2>
                                                <div class="tribe-events-event-meta">
                                                    <div class="author location">
                                                        <!-- Schedule & Recurrence Details -->
                                                        <div class="tribe-event-schedule-details">
                                                            <span class="tribe-event-date-start">{{$event->custom_start_date}}</span> -
                                                            <span class="tribe-event-date-end">{{$event->custom_end_date}}</span>
                                                        </div>
                                                        <!-- Venue Display Info -->
                                                        <div class="tribe-events-venue-details">
                                                            <span class="author fn org">{{$event->location}}</span>,
                                                            <address class="tribe-events-address">
                                                                <span class="tribe-address">
                                                                    <span class="tribe-street-address">{{$event->location}}</span>
                                                                </span>
                                                            </address>
                                                            <a class="tribe-events-gmap" href="http://maps.google.com/maps?f=q&#038;source=s_q&#038;hl=en&#038;geocode=&#038;q={{$event->location}}" title="Click to view a Google Map" target="_blank">+ Google Map</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Event Image -->
                                                <div class="tribe-events-event-image">
                                                    <a href="event-single.html">
                                                        <img src="http://placehold.it/315x210" alt="" />
                                                    </a>
                                                </div>
                                                <!-- Event Content -->
                                                <div class="tribe-events-list-event-description tribe-events-content">
                                                    <p>{{$event->description}}</p>
                                                    {{-- <a href="event-single.html" class="tribe-events-read-more">Find out more &raquo;</a> --}}
                                                    <a href="{{ route('event.detail', ['id'=>$event->id]) }}" class="tribe-events-read-more">Detail &raquo;</a>
                                                </div>
                                            </div>
                                        @endforeach
                                        
                                    </div>
                                    <!-- List Footer -->
                                    <div id="tribe-events-footer">
                                        <!-- Footer Navigation -->
                                        <ul class="tribe-events-sub-nav">
                                            <!-- Left Navigation -->
                                            <li class="tribe-events-nav-previous tribe-events-nav-left tribe-events-past" aria-label="previous events link">
                                                <a href="#" rel="prev">
                                                    <span>&laquo;</span> Previous Events
                                                </a>
                                            </li>
                                            <!-- Right Navigation -->
                                            <li class="tribe-events-nav-previous tribe-events-nav-right" aria-label="next events link">
                                                <a href="#" rel="next">  Next Events
                                                    <span>&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="tribe-events-ical tribe-events-button" title="Use this to share calendar data with Google Calendar, Apple iCal and other compatible apps" href="#">+ Export Listed Events</a>
                                </div>
                                <div class="tribe-clear"></div>
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

@endsection