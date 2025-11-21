<?php

/** @var \Drupal\zero_entitywrapper\Content\ContentWrapper $wrapper */

use Drupal\zero_entitywrapper\View\ViewWrapper;

$viewWrapper = ViewWrapper::create('brands:embed');

$vars['view'] = $viewWrapper->render();
$vars['view']['#view']->grid_size = $wrapper->getValue('field_grid_size');
