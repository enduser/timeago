<?php
/**
 * IM @daveferrara1
 *
 *
 *Simple function that returns the time ago for a given epoch time. Just takes the one argument.
 *I've called the argument $epoch_event in order to answer the question... How long ago did the event take place?
 *The Unix epoch (or Unix time or POSIX time or Unix timestamp) is the number of seconds that have elapsed
 *since January 1, 1970 (midnight UTC/GMT), not counting leap seconds (in ISO 8601: 1970-01-01T00:00:00Z).
*/


function _time_ago($epoch_event) {
    $time_ago = array();

    $period = array('second', 'minute', 'hour', 'day', 'week', 'month', 'year', 'decade');

    $difference = time() - $epoch_event;

    if (($difference <= 59) && ($difference !== 0)) {
        $time_event = $difference/1;
        if ($time_event === 1) {
            return $time_event . $period[0].' ago';
        }
        else {
            return floor($time_event)  .' '. $period[0] . 's ago';
        }
    }
    elseif (($difference >= 60) && ($difference <= 3599)) {
        $time_event = $difference/60;
        if (($difference % 60) === 0) {$add_time = '';}
        if (($difference % 60) !== 0) {$add_time = floor(($difference % 60)/1) . $period[0] . 's' ;}
        if ($time_event === 1) {
            return $time_event . $period[1].' ago';
        }
        else {
            return floor($time_event)  .' '. $period[1]. 's '. $add_time. 'ago';
        }
    }
    elseif (($difference >= 3600) && ($difference <= 86399)) {
        $time_event = $difference/3600;
        if (($difference % 3600) === 0) {$add_time = '';}
        if (($difference % 3600) !== 0) {$add_time = floor(($difference % 3600)/60) . $period[1] . 's' ;}
        if ($time_event === 1) {
            return $time_event . $period[2].' ago';
        }
        else {
            return floor($time_event)  .' '. $period[2] . 's '. $add_time. 'ago';
        }
    }
    elseif (($difference >= 86400) && ($difference <= 604799)) {
        $time_event = $difference/86400;
        if (($difference % 86400) === 0) {$add_time = '';}
        if (($difference % 86400) !== 0) {$add_time = floor(($difference % 86400)/3600) . $period[2] . 's' ;}
        if ($time_event === 1) {
            return $time_event . $period[3].' ago';
        }
        else {
            return floor($time_event)  .' '. $period[3]. 's '. $add_time. 'ago';
        }
    }
    elseif (($difference >= 604800) && ($difference <= 2591999)) {
        $time_event = $difference/604800;
        if (($difference % 604800) === 0) {$add_time = '';}
        if (($difference % 604800) !== 0) {$add_time = floor(($difference % 604800)/86400) . $period[3] . 's' ;}
        if ($time_event === 1) {
            return $time_event . $period[4].' ago';
        }
        else {
            return floor($time_event)  .' '. $period[4]. 's '. $add_time. 'ago';
        }
    }
    elseif (($difference >= 2592000) && ($difference <= 31103999)) {
        $time_event = $difference/2592000;
        if (($difference % 2592000) === 0) {$add_time = '';}
        if (($difference % 2592000) !== 0) {$add_time = floor(($difference % 2592000)/604800) . $period[4] . 's' ;}
        if ($time_event === 1) {
            return $time_event . $period[5].' ago';
        }
        else {
            return floor($time_event)  .' '. $period[5]. 's '. $add_time. 'ago';
        }
    }
    elseif (($difference >= 31104000) && ($difference <= 311039999)) {
        $time_event = $difference/31104000;
        if (($difference % 31104000) === 0) {$add_time = '';}
        if (($difference % 31104000) !== 0) {$add_time = floor(($difference % 86400)/2592000) . $period[5] . 's' ;}
        if ($time_event === 1) {
            return $time_event . $period[6].' ago';
        }
        else {
            return floor($time_event)  .' '. $period[6]. 's '. $add_time. 'ago';
        }
    }
     elseif ($difference >= 311040000) {
            return 'over a '.$period[7].' ago';
    }
    else {
        return 'Now'; // in case $epoch_event gets set to time();
    }

    return $time_ago;
}

?>