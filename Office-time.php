<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define("holiday1", "Sat");
        define("holiday2", "Sun");

        $timestamp = strtotime("14 August 2023 12:00:00 am");
        
        $time = date("h:i:s a",$timestamp);
        $date = date("D", $timestamp);

        if($date !== holiday1 && $date !== holiday2) {

            switch($time) {

                case "08:00:00 am":
                    echo "I'm going to start working.";
                continue;
    
                case "09:00:00 am":
                    echo "It is time to start team meeting.";
                continue;
    
                case "10:30:00 am":
                    echo "It is time to start customer meeting.";
                continue;
    
                case "12:00:00 am":
                    echo "It is time to eat.";
                continue;
    
                case "01:00:00 pm":
                    echo "It is return to start work.";
                continue;
    
                case "05:00:00 pm":
                    echo "It is time to report to leader.";
                continue;

                case "$time < 08:00:00 am" && "$time > 05:00:00 pm";
                echo "It is free time.";
                continue;

                default:
                echo "It is time to work.";
            }
        } else {
            echo "Today is holiday.";
        }   
    ?>
</body>
</html>