<?php
// $date = new DateTime('2015-07-07');
//#echo $date->format('Y-m-d H:i:s');
echo "\n";
$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 days; 24 hours; 60 mins; 60 secs
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
echo date('l \t\h\e jS') . "\n";
?>
