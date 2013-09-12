<?php

function testFunction() {
    echo "hi";
}

function createTimeLine() {
    $day_array = array();
    $today = strtotime(date('Y-m-d'));
    $secondsInDay = 86400;
    for($i = 0; $i <= 365; $i++) {
        $day_array[] = array(
            'dayID' => $i,
            'date' => $today + ($secondsInDay * (-365 + $i))
        );
    }
    //return $day_array;
    return markUpTimeline($day_array);
}

function markUpTimeLine($day_array) {
    $output = null;
    foreach($day_array as $item) {
        $output .= "<div class=\"day\" id=\"{$item["dayID"]}\" data-date=\"{$item["date"]}\"></div>";
    }
    return $output;
}