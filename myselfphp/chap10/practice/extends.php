<?php
require_once 'BusinessPerson.php';

$bp = new BusinessPerson('将哉', '山本');
$bp->work();
$bp->show();
