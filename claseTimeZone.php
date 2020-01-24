<?php 

$abbr = DateTimeZone::listAbbreviations();
echo '<pre>';
print_r($abbr['est']);
echo '</pre>';