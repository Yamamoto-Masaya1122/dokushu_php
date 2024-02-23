<?php

$message = '値です';
print $message ?? '空です。';

print true ? 1 : (false ? 'OK' : 'NG');

?>