<?php

use Drupal\zero_entitywrapper\Content\ContentWrapper;
/**
 * @var ContentWrapper $wrapper
 * @var array $vars
 */

$vars['reversed'] = $wrapper->getValue('field_reversed');
$vars['media'] = $wrapper->display()->responsiveImage('field_image', 0, 'domino_teaser');
$vars['title'] = $wrapper->getValue('field_title');
$vars['body'] = $wrapper->getMarkup('field_body');
$vars['link'] = $wrapper->getLinkData('field_link');
$vars['button'] = $wrapper->getLinkData('field_button');
