<?php

$startYear = 2021;
$thisYear = date("Y");

if($thisYear > $startYear){
    $thisYear = date('Y');
    $date = "$startYear - $thisYear";
}
else{
    $date = $thisYear;
}

echo "$date";





?>
