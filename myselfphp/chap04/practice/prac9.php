<?php
$language = 'Java';
print match ($language) {
  'Python', 'PHP', 'Ruby' => 'インタプリンター言語',
  'C#', 'Java' => 'コンパイル言語',
};