<?php
$data = new DateTime();
print $data->format('Y年m月d日');
print '<br>';
print $data->format('Y年m月t日');
print '<br>';
$data->add(new DateInterval('P1M10D'));
print $data->format('Y年m月d日');
