<?php
    $jsondata=file_get_contents("https://api.rootnet.in/covid19-in/notifications");
    $data=json_decode($jsondata,true);
    $c=count($data['cases_time_series']);
    echo $c;
    #echo $data['cases_time_series'][10]['dailyconfirmed'];
?>