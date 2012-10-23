<?php
namespace project\apps\adm\pages\question;

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
class Question extends \project\apps\adm\templates\PageTemplate {

	/**
	 * Function - Execute
	 * @param \nano\core\routing\Routing $routing Routing
	 */
	public function execute(\nano\core\routing\Routing $routing){
                $this->questionId = $routing->getRequest()->getParameter('questionid');
                $this->headerWidget->setTitle('Question: '.$this->questionId);
                $this->question = \nano\core\db\ORM::getInstance()->getTable('Question', 'adm201')->retrieveByPk($this->questionId);
                $this->questionText = nl2br($this->question->getQuestion());
                $answers = $this->question->getAnswers();
                $this->answers = '';
                $this->showTip = false;
                $request = $routing->getRequest();
                if (!$request->isPost()) {
                
                  foreach ($answers as $answer) {
                    // put into a answer container widget
                    $answerWidget = new \project\apps\adm\widgets\answer\Answer();
                    $answerWidget->question = $this->question;
                    $answerWidget->answer = $answer;
                    $answerWidget->answerText = nl2br($answer->getAnswer());
                    $this->answers .= $answerWidget->getRenderedWidget();
                  }
                }
                

                if ($request->isPost()) {
                  $this->showTip = true;
                  $this->tipText = nl2br($this->question->getTip());
                  if ($request->getPostParameter('flag') == 'on') {
                    // flag this
                  }
                  $correctAnswers = array();
                  foreach ($answers as $answer) {
                    if ($answer->getIsCorrect() == 1) {
                      $correctAnswers[] = $answer->getId();
                    }
                  }
                  if ($this->question->getMaxAnswers() > 1) {
                    $userAnswers = $request->getPostParameter('answer');
                    $goodMarks = array();
                    $badMarks = array();
                    foreach ($userAnswers as $userAnswer) {
                      if (in_array($userAnswer, $correctAnswers)) {
                        $goodMarks[] = $userAnswer;
                      } else {
                        $badMarks[] = $userAnswer;
                      }
                    }
                  } else {
                    $userAnswer = $request->getPostParameter('answer');
                    if (in_array($userAnswer, $correctAnswers)) {
                      $goodMarks[] = $userAnswer;
                    } else {
                      $badMarks[] = $userAnswer;
                    }
                  }
                  
                  foreach ($answers as $answer) {
                    // put into a answer container widget
                    $answerWidget = new \project\apps\adm\widgets\answer\Answer();
                    $answerWidget->question = $this->question;
                    $answerWidget->answer = $answer;
                    $answerWidget->answerText = nl2br($answer->getAnswer());
                    if (in_array($answer->getId(), $badMarks)) {
                      $answerWidget->wrong = 'wrong';
                    }
                    if (in_array($answer->getId(), $correctAnswers)) {
                      $answerWidget->correct = 'correct';
                    }
                    if (in_array($answer->getId(), $userAnswers)) {
                      $answerWidget->checked = 'checked';
                    }
                    $this->answers .= $answerWidget->getRenderedWidget();
                  }
                  
                }
                
		return 'project/apps/adm/pages/question/views/question.twig';
	}
}