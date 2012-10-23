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
  public function execute(\nano\core\routing\Routing $routing) {
    
    $this->questionId = $routing->getRequest()->getParameter('questionid');
    $this->roundId = $routing->getRequest()->getParameter('roundid');
    $mark = null;
    if ($this->roundId) {
      // we're in a round, actually check if question is part of a round...
      // replace questionId with round questionId
      $this->markId = $this->questionId;
      $mark = \nano\core\db\ORM::getInstance()->getTable('Mark', 'adm201')->retrieveByPk($this->markId);
      if (!$mark) {
        throw new \Exception('that question is not in this round');
      }
      $this->questionId = $mark->getQuestion()->getId();
    }
    $this->headerWidget->setTitle('Question: ' . $this->questionId);
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
      if ($request->getPostParameter('submit') == 'Next') {
        $nextRoundQuestionId = $this->questionId++;
        $nextMark = \nano\core\db\ORM::getInstance()->getTable('Mark', 'adm201')->retrieveByPk($nextRoundQuestionId);
        if ($nextMark) {
          $routing->getResponse()->pageRedirect('/r/'.$this->roundId.'/'.$nextRoundQuestionId);
        } else {
          // completed the quiz!
          $round = \nano\core\db\ORM::getInstance()->getTable('Round', 'adm201')->retrieveByPk($this->roundId);
          if (!$round) {
            throw new \Exception('cannot find round');
          }
          if (!$round->getRoundEnd()) {
            $round->completeRound();
          }
          $routing->getResponse()->pageRedirect('/r/'.$this->roundId.'/complete');
        }
      }
      $this->showTip = true;
      $this->tipText = nl2br($this->question->getTip());
      if ($request->getPostParameter('flag') == 'on') {
        // flag this
      }
      $correctAnswers = array();
      $userAnswers = array();
      foreach ($answers as $answer) {
        if ($answer->getIsCorrect() == 1) {
          $correctAnswers[] = $answer->getId();
        }
      }
      if ($this->question->getMaxAnswers() > 1) {
        $userAnswers = $request->getPostParameter('answer');
        if ($userAnswers === null) {
          $userAnswers = array();
        }
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
        if ($userAnswer) {
          if (in_array($userAnswer, $correctAnswers)) {
            $goodMarks[] = $userAnswer;
          } else {
            $badMarks[] = $userAnswer;
          }
        }
      }

      if ($mark) {
        if (!$mark->getAnswerList()) {
          // hasn't already been answered, so let's answer it.
          $mark->setAnswerList(json_encode($userAnswers));
          $answeredCorrectly = (count($goodMarks) == $this->question->getMaxAnswers()) ? true : false;
          $mark->setIsCorrect($answeredCorrectly);
          $mark->save();
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
      $this->nextButton = true;
    }

    return 'project/apps/adm/pages/question/views/question.twig';
  }

}