<?php
function sanitizeNull(array $data) : array {
  return str_replace("¥0", "", $data);
}

$GET = sanitizeNull($_GET);
$POST = sanitizeNull($_POST);
$_COOKIE = sanitizeNull($_COOKIE);