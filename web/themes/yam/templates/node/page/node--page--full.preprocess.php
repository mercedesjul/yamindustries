<?php

use Drupal\zero_entitywrapper\Content\ContentWrapper;

/** @var $wrapper ContentWrapper */

$vars['paragraphs'] = $wrapper->display()->entities('field_paragraphs');
$vars['mood'] = $wrapper->display()->entity('field_mood');
