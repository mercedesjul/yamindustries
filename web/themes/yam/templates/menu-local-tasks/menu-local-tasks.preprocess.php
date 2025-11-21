<?php

$sets = ['primary', 'secondary'];

foreach ($sets as $set) {
  $vars[$set . '_links'] = [];
  foreach ($vars[$set] as $key => $value) {
    $vars[$set . '_tabs'][] = [
      'title' => $vars[$set][$key]['#link']['title'],
      'url' => $vars[$set][$key]['#link']['url'],
    ];
  }
}