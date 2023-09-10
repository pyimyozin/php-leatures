<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $holidays = ['Saturday', 'Sunday'];

        $timestamp = strtotime("14 August 2023 12:00:00 am");

        $time = date("h:i:s a",$timestamp);
        $date = date("D", $timestamp);


    if(in_array($date, $holidays)) {
        echo "Today is holiday.";
    }
    else {
        switch($time) {
    
            case "08:00:00 am":
                echo "I'm going to start working.";
            break;

            case "09:00:00 am":
                echo "It is time to start team meeting.";
            break;

            case "10:30:00 am":
                echo "It is time to start customer meeting.";
            break;

            case "12:00:00 am":
                echo "It is time to eat.";
            break;

            case "01:00:00 pm":
                echo "It is return to start work.";
            break;

            case "05:00:00 pm":
                echo "It is time to report to leader.";
            break;

            case "$time < 08:00:00 am" && "$time > 05:00:00 pm";
            echo "It is free time.";
            break;

            default:
            echo "It is time to work.";
        }
    }
    ?>
</body>
</html>