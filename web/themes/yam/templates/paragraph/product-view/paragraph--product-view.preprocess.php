<?php

/** @var \Drupal\zero_entitywrapper\Content\ContentWrapper $wrapper */

use Drupal\zero_entitywrapper\View\ViewWrapper;

$viewWrapper = ViewWrapper::create('products:embed');
$brand = $wrapper->getValue('field_brand');
if ($brand) {
    $viewWrapper->setArgs([$brand]);
}
$vars['view'] = $viewWrapper->render();
