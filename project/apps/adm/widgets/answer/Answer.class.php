<?php

namespace project\apps\adm\widgets\answer;

class Answer extends \project\apps\adm\templates\WidgetTemplate {

  public function execute(\nano\core\routing\Routing $routing, \nano\core\page\Page $pageInstance = null) {
    if ($this->question->getMaxAnswers() > 1) {
      $this->answerType = 'checkbox';
    } else {
      $this->answerType = 'radio';
    }
    return 'project/apps/adm/widgets/answer/views/answer.twig';
  }
}