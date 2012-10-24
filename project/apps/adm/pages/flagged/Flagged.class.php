<?php

namespace project\apps\adm\pages\flagged;

/**
 * Index class 
 * 
 * Index
 * 
 * @author Christopher Beck <cwbeck@gmail.com>
 * @version SVN: $id
 * @package pages
 * @subpackage index
 */
class Flagged extends \project\apps\adm\templates\PageTemplate {

  /**
   * Function - Execute
   * @param \nano\core\routing\Routing $routing Routing
   */
  public function execute(\nano\core\routing\Routing $routing) {
    return 'project/apps/adm/pages/flagged/views/flagged.twig';
  }
}