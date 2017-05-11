<?php
/**
 * Markup for the schedule loop.
 * This all controlled by JS via API.
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 * @version 1.0
 */

?>
<nav class="jump-menu">
  <h5>Filter by day</h5>
  <menu id="view-switcher">
    <li><a href="#sunday" class="show-day active">Sunday</a></li>
    <li><a href="monday" class="show-day">Monday</a></li>
    <li><a href="tuesday" class="show-day">Tuesday</a></li>
    <li><a href="wednesday" class="show-day">Wednesday</a></li>
  </menu>
  <button id="custom-schedule" class="jump-link"><span>Your Schedule</span> <svg class="icon icon-clock" aria-hidden="true" role="img"> <use href="#icon-clock" xlink:href="#icon-clock"></use></svg></button>
</nav>
<section class="schedule--day" id="sunday">
  <header class="day-heading">
    <h2>Sunday, October 8</h2>
  </header>
  <div class="schedule">
    <!-- Administrative Event -->
    <article class="schedule--event">
      <div class="time-block">
        <time datetime="2017-10-08T11:00">11:00 a.m.</time> to <time datetime="2017-10-08T17:30">5:30 p.m.</time>
      </div>
      <section class="event-group">
        <header class="event--heading">
          <svg class="icon icon-badge" aria-hidden="true" role="img"> <use href="#icon-badge" xlink:href="#icon-badge"></use></svg>
          <div>
            <h2>Conference check-in &amp; information desk</h2>
            <span class="event--location">Room Name</span>
          </div>
        </header>
      </section>
    </article>

    <!-- Meal Event -->
    <article class="schedule--event event-type--meal">
      <div class="time-block">
        <time datetime="2017-10-08T12:00">12:00 p.m.</time> to <time datetime="2017-10-08T13:00">1:00 p.m.</time>
      </div>
      <section class="event-group">
        <header class="event--heading">
          <svg class="icon icon-meal" aria-hidden="true" role="img"> <use href="#icon-meal" xlink:href="#icon-meal"></use></svg>
          <div>
            <h2>Lunch for Academy attendees, pre-conference workshop  attendees and presenters</h2>
            <span class="event--location">Room Name</span>
          </div>
        </header>
      </section>
    </article>

    <!-- Sessions Event -->
    <article class="schedule--event event-type--session">
      <div class="time-block">
        <time datetime="2017-10-08T13:00">1:00 p.m.</time> to <time datetime="2017-10-08T16:30">4:30 p.m.</time>
      </div>
      <section class="event-group">
        <header class="event--heading">
          <div>
            <h2>Pre-Conference Workshops</h2>
          </div>
        </header>
        <div class="session">
          <div class="schedule-tools">
            <!-- @TODO prep for schedule editor -->
            <span class="track-code--wrk">WRK1</span>
          </div>
          <section class="session--object">
            <header>
              <div class="session--title">
                <h3>A Syntactically Awesome Deep Dive into Sass</h3>
                <span class="session--presenter">Presented by Joel Goodman</span>
              </div>
              <span class="session--location">Capitol Room 1, Marriott Downtown</span>
            </header>
            <div class="session--details">
              <!-- Session description here Make sure it's wrapped in proper <p>
               tags, please! -->
              <h4>About Joel Goodman</h4>
              <!-- Speaker bio here. Make sure it's wrapped in proper <p>
               tags, please! -->
            </div>
          </section>
        </div>
      </section>
    </article>

    <!-- Social/Networking Event -->
    <article class="schedule--event event-type--networking">
      <div class="time-block">
        <time datetime="2017-10-08T18:00">6:00 p.m.</time> to <time datetime="2017-10-08T21:00">9:00 p.m.</time>
      </div>
      <section class="event-group">
        <header class="event--heading">
          <svg class="icon icon-network" aria-hidden="true" role="img"> <use href="#icon-network" xlink:href="#icon-network"></use></svg>
          <div>
            <h2>Welcome Reception</h2>
            <span class="event--location">Room Name</span>
          </div>
        </header>
      </section>
    </article>
  </div>
  <div id="track-filter">
    <div class="filter-group">
      <h4>Filter by Track</h4>
      <ul class="track-list">
        <li class="track-code track-code--wrk">Workshops</li>
        <li class="track-code track-code--aim">Applications, Integration and Mobile</li>
        <li class="track-code track-code--dpa">Development, Programming and Architecture</li>
        <li class="track-code track-code--mcs">Marketing, Content and Social Strategy</li>
        <li class="track-code track-code--mpd">Management and Professional Development</li>
        <li class="track-code track-code--tie">Technology in Education</li>
        <li class="track-code track-code--uad">Usability, Accessibility and Design</li>
        <li class="track-code track-code--cor">Sponsors</li>
      </ul>
    </div>
  </div>
</section>
<section id="single-session-detail" class="session--single-description">
  <header class="single-heading session--title">
    <h1>{{A Syntactically Awesome Deep Dive into Sass}}</h1>
    <span class="session--presenter">Presented by Joel Goodman</span> <span class="session--location">Capitol Room 1, Marriott Downtown</span>
  </header>
  <article class="single-entry">
    <!-- Session description here Make sure it's wrapped in proper <p>
     tags, please! -->

     <h4>About Joel Goodman</h4>
     <!-- Speaker bio here. Make sure it's wrapped in proper <p>
      tags, please! -->
  </article>
</section>
