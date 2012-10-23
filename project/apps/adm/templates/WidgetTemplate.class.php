<?php

namespace project\apps\adm\templates;

class WidgetTemplate extends \nano\core\widget\Widget {

  protected function preExecute(\nano\core\routing\Routing $routing, \nano\core\page\Page $pageInstance = null) {
    if ($routing->isAjax()) {
      $response = $routing->getResponse();
      $response->setHttpHeader('Last-Modified', gmdate("D, d M Y H:i:s") . 'GMT');
      $response->setHttpHeader('Cache-Control', 'no-store, no-cache, must-revalidate');
      $response->setHttpHeader('Cache-Control', 'post-check=0, pre-check=0');
      $response->setHttpHeader('Pragma', 'no-cache');
    }
  }

}