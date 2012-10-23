<?php

namespace project\apps\adm\pages\round;

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
class Round extends \project\apps\adm\templates\PageTemplate {
    /**
   * Function - Execute
   * @param \nano\core\routing\Routing $routing Routing
   */
  public function execute(\nano\core\routing\Routing $routing) {
    var_dump($_GET);
    return 'project/apps/adm/pages/round/views/round.twig';
  }
}