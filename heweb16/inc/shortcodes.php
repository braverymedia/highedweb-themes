<?php // defines custom shortcodes for this theme

// Add Shortcode
function brvry_button_shortcode( $atts , $content = null ) {

    // Attributes
    extract( shortcode_atts(
        array(
            'url' => '',
            'target' => '_self',
        ), $atts )
    );

    // Code
    return '<a href="'. $atts["url"] .'" target="'. $atts["target"] .'" class="button">' . $content .'</a>';
}
add_shortcode( 'hew-button', 'brvry_button_shortcode' );

// Add Shortcode
function brvry_workshops_shortcode( $atts ) {

    // Attributes
    extract( shortcode_atts(
        array(
            'when' => 'preconf',
        ), $atts )
    );

    // JSON Call to get schedule
    $url = 'https://2016reg.highedweb.org/schedule.json';
    $content = file_get_contents($url);
    $json = json_decode($content, true);
    if ( $atts['when'] == 'postconf' ) {
        $html = '<section class="schedule workshop-schedule">';
        foreach ( $json['PostWorkshops'] as $wrk ) {
            // setup Presenters
            $presenter = '';
            foreach ( $wrk['Presenters'] as $p ) {
                $presenter .= '<span class="presenter-name">' . $p['DisplayName'] . '</span> <span class="presenter-organization">' . $p['Organization'] . '</span>';
                if ( $p['Bio'] != null) {
                    $presenter .= '<button class="toggle-bio">Show Bio</button><div class="presenter-bio"><p>' . $p['Bio'] . '</p></div>';
                }
            }

            $html .= '<article id="session-'. $wrk['Code'].'"><h5 class="event-title"><span>' . $wrk['Code'] .'</span>'. $wrk['Title'] .'</h5>';
            $html .= '<div class="event">';
            $html .= '<p class="event-description">' . $wrk['Description'] . '</p>';
            $html .= '<aside class="event-details"><h5>Presented by</h5>' . $presenter . '<h5>Room/Location</h5><span class="session-location">' . $wrk['RoomTitle'] .'</span></aside></div>';
            $html .= '</article>';
        }
        $html .= '</section>';
        return $html;

    } elseif( $atts['when'] == 'academies' )  {
        $html = '<section class="schedule workshop-schedule academies">';
        foreach ( $json['Academies'] as $wrk ) {

            $html .= '<article>';
            $html .= '<h5 class="event-title"><a href="'. $wrk['Url'] .'" title="' . $wrk['Title'] . '">' . $wrk['Title'] . ' Academy</a></h5>';
            $html .= '</article>';
        }
        $html .= '</section>';
        return $html;

    } elseif( $atts['when'] == 'preconf' ) {
        $html = '<section class="schedule workshop-schedule">';
        foreach ( $json['PreWorkshops'] as $wrk ) {
            // setup Presenters
            $presenter = '';
            foreach ( $wrk['Presenters'] as $p ) {
                $presenter .= '<span class="presenter-name">' . $p['DisplayName'] . '</span> <span class="presenter-organization">' . $p['Organization'] . '</span>';
                if ( $p['Bio'] != null) {
                    $presenter .= '<button class="toggle-bio">Show Bio</button> <div class="presenter-bio"><p>' . $p['Bio'] . '</p></div>';
                }
            }

            $html .= '<article id="session-'. $wrk['Code'].'"><h5 class="event-title"><span>' . $wrk['Code'] .'</span>'. $wrk['Title'] .'</h5>';
            $html .= '<div class="event">';
            $html .= '<p class="event-description">' . $wrk['Description'] . '</p>';
            $html .= '<aside class="event-details"><h5>Presented by</h5>' . $presenter . '<h5>Room/Location</h5><span class="session-location">' . $wrk['RoomTitle'] .'</span></aside></div>';
            $html .= '</article>';
        }
        $html .= '</section>';
        return $html;
    }

}
add_shortcode( 'workshops', 'brvry_workshops_shortcode' );
