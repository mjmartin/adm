<?php

namespace project\apps\adm\widgets\mark;

class Mark extends \project\apps\adm\templates\WidgetTemplate {
  
  public function execute(\nano\core\routing\Routing $routing, \nano\core\page\Page $pageInstance = null) {
    $this->round->markRound();
    $roundStarted = new \DateTime($this->round->getRoundStart(), new \DateTimeZone('Europe/London'));
    $this->roundStarted = $roundStarted->format('j F Y H:i:s');
    
    return 'project/apps/adm/widgets/mark/views/mark.twig';
  }
}