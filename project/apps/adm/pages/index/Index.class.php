<?php

namespace project\apps\adm\pages\index;

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
class Index extends \project\apps\adm\templates\PageTemplate {

  /**
   * Function - Execute
   * @param \nano\core\routing\Routing $routing Routing
   */
  public function execute(\nano\core\routing\Routing $routing) {
    $this->headerWidget->setTitle('Super Quiz');
    $request = $routing->getRequest();
    if ($request->isPost()) {
      if ($request->getPostParameter('quiz') == 'newQuiz') {
        // start new quiz
        $this->newQuiz($routing);
      } elseif (is_numeric($request->getPostParameter('quiz'))) {
        // resume quiz
        $this->resumeQuiz($routing);
      } else {
        $this->message = 'Please enter a quiz number or start a new quiz';
      }
    }
    return 'project/apps/adm/pages/index/views/index.twig';
  }
  
  protected function newQuiz(\nano\core\routing\Routing $routing) {
    $round = new \project\db\om\adm201\Round();
    $round->setCreatedAt(date('Y-m-d H:i:s'));
    $round->save();
    $chosen = $round->chooseQuestions();
    $round->makeUnmarkedQuestions($chosen);
  }
  
  protected function resumeQuiz(\nano\core\routing\Routing $routing) {
    
  }

}