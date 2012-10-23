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
    
    $this->roundId = $routing->getRequest()->getParameter('roundid');
    if (!is_numeric($this->roundId))
    {
      throw new \Exception('expecting a number');
    }
    $this->round = \nano\core\db\ORM::getInstance()->getTable('Round', 'adm201')->retrieveByPk($this->roundId);
    return 'project/apps/adm/pages/round/views/round.twig';
  }
}