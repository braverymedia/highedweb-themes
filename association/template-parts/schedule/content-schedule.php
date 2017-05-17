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

    <div id="schedule-root"></div>
    <script src="/wp-content/themes/association/template-parts/schedule/schedule.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    (function($) {
        var track_order = {
            'WRK': 0,
            'AIM': 1,
            'DPA': 2,
            'MCS': 3,
            'MPD': 4,
            'TIE': 5,
            'UAD': 6,
            'COR': 7,
            'LIT': 8,
        };
        var map_presenter = function(p, idx) {
            return {
                name: (p['DisplayName'] || ""),
                bio: (p['Bio'] || ""),
                title: (p['JobTitle'] || ""),
                organization: (p['Organization'] || "")
            };
        };
        
        var compare_sessions_for_order = function(a,b) {
            if (a.track == b.track) return a.sequenceNumber - b.sequenceNumber;
            return track_order[a.track] - track_order[b.track];
        };

        var tz = function(t) {
            return t.replace('.0000000','-04:00');
        };
        
        $.getJSON('https://2017reg.highedweb.org/schedule.json', function(data) {
            var pre_workshops = $.map(data['PreWorkshops'], function(s, idx) {
                return {
                    code: s['Code'],
                    track: 'WRK',
                    sequenceNumber: parseInt(s['Code'].replace('WRK',''), 10),
                    presenters: $.map(s['Presenters'], map_presenter),
                    title: s['Title'],
                    location: s['RoomTitle'],
                    description: s['Description'],
                };
            });
            var post_workshops = $.map(data['PostWorkshops'], function(s, idx) {
                return {
                    code: s['Code'],
                    track: 'WRK',
                    sequenceNumber: parseInt(s['Code'].replace('WRK',''), 10),
                    presenters: $.map(s['Presenters'], map_presenter),
                    title: s['Title'],
                    location: s['RoomTitle'],
                    description: s['Description'],
                };
            });

            var unsorted_sessions = $.map(data['Sessions'], function(s, idx) {
                return {
                    code: s['SessionCode'],
                    track: s['TrackCode'],
                    sequenceNumber: s['TrackSequenceNumber'],
                    presenters: $.map(s['Presenters'], map_presenter),
                    title: s['Title'],
                    location: s['RoomTitle'],
                    description: s['Abstract'],
                };
            });
            var sorted_slots = $.map(data['ScheduleSlots'], function(slot, idx) {
                return {
                    startTime: (tz(slot['StartTime']) || ""),
                    endTime: (tz(slot['EndTime']) || ""),
                    kind: (slot['Type'] || "General"),
                    title: (slot['GeneralSessionTitle'] || ""),
                    location: (slot['RoomTitle'] || ""),
                    url: (slot['GeneralSessionLink'] || ""),
                    description: (slot['GeneralSessionDescription'] || ""),
                    trackSequenceNumber: (slot['TrackSequenceNumber'] || 0),
                };
            });
            Elm.Schedule.embed(document.getElementById('schedule-root'), {
                sortedSlots: sorted_slots,
                unsortedSessions: unsorted_sessions.sort(compare_sessions_for_order), // they still need to get sorted by the CODE
                preWorkshops: pre_workshops,
                postWorkshops: post_workshops,
            });
        });
    })(jQuery);
    </script>
