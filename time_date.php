<?php
var_dump(checkdate(12,31,2022));
$date=date_create("2022-09-16");
date_add($date,date_interval_create_from_date_string("40 days"));
echo date_format($date,"Y-m-d");
$date=date_create_from_format("j-M-Y","16-sep-2022");
echo date_format($date,"D-M-Y");
date_date_set($date,2020,10,30);
echo date_format($date,"y-M-j");
?>