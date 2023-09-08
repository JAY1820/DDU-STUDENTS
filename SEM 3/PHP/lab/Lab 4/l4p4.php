<!-- 

Create a php script which demonstrates date functions mentioned below:
○ checkdate()
○ date_add()
○ date_create_from_format()
○ date_create()
○ date_default_timezone_get()
○ date_default_timezone_set()
○ date_diff()
○ date_format()
○ date_modify()
○ date_time_set()
○ date_timestamp_get()
○ date_timestamp_set()
○ date()
○ getdate()
○ gettimeofday()
○ mktime()
○ strftime()
○ strptime()
○ strtotime()
○ time()
○ timezone_abbreviations_list()
○ timezone_identifiers_list()

 -->

<!-- In Problem 4: Write 3 function for Date and 3 function for Time and 1 for TimeZone. -->

<?php

// Date functions
echo "Date functions:\n";
echo "Today's date: " . date("Y-m-d") . "\n";
echo "Is February 29, 2023 a valid date? " . (checkdate(2, 29, 2023) ? "Yes" : "No") . "\n";
$date = date_create("2023-08-10");
date_add($date, date_interval_create_from_date_string("1 month"));
echo "One month from August 10, 2023: " . date_format($date, "Y-m-d") . "\n";

// Time functions
echo "\nTime functions:\n";
echo "Current time: " . date("H:i:s") . "\n";
$time = mktime(14, 55, 0);
echo "Time created with mktime: " . date("H:i:s", $time) . "\n";
echo "Timezone offset in seconds: " . gettimeofday()["minuteswest"] * 60 . "\n";

// Timezone functions
echo "\nTimezone functions:\n";
echo "Default timezone: " . date_default_timezone_get() . "\n";
date_default_timezone_set("America/New_York");
echo "New default timezone: " . date_default_timezone_get() . "\n";
?>


