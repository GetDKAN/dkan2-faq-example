<?php

foreach (scandir(__DIR__) as $file) {
  if (preg_match("/settings\..*\.php/", $file) == TRUE
      && substr_count($file, "default") == 0) {
    include __DIR__ . "/{$file}";
  }
}

$config_directories['sync'] = '../config/sync';
$settings['hash_salt'] = 'JiTLZDNRjF6ZGJBF3vGGPt-wIbKsS5WgF4eprimP1t9M0XBXbh0VpSlApZ0Pv5aLH4h28pq-ew';
