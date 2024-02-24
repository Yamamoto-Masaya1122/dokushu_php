<?php
$language = 'C#';
switch($language) {
  case 'Python' :
  case 'PHP' :
  case 'Ruby' :
    print 'インタプリンター言語';
    break;
  case 'C#' :
  case 'Java' :
    print 'コンパイル言語';
    break;
}