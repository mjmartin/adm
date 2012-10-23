<?php
namespace project\db\om\adm201;

/**
 * Round class 
 * 
 * Round
 * 
 * @author Christopher Beck <cwbeck@gmail.com>
 * @version SVN: $id
 * @package om
 * @subpackage adm201
 */
class Round extends \project\db\om\adm201\base\BaseRound {
  
  public function makeUnmarkedQuestions($chosen) {
    if (!$this->getId()) {
      throw new \Exception('Round must be saved before being seeded');
    }
    foreach ($chosen as $questionId) {
      $question = new \project\db\om\adm201\Mark();
      $question->setRound($this->getId());
      $question->setQuestion($questionId);
      $question->save();
    }
  }
  
  public function completeRound() {
    $this->markRound();
    $this->setRoundEnd(date('Y-m-d H:i:s'));
    $this->save();
  }
  
  public function markRound() {
    $roundResults = \nano\core\db\ORM::getInstance()->getTable('Mark', 'adm201')->markRound($this);
    $this->setCorrect($roundResults->getCorrect());
    $this->setWrong($roundResults->getWrong());
  }
  
  /**
   * Returns $numQuestions random question ids
   * @param int $numQuestions
   * @return array
   */
  public function chooseQuestions($numQuestions = 100) {
    if (!$this->getId()) {
      throw new \Exception('Round must be saved before being seeded');
    }
    // get random questions
    $chosen = array();
    $totalQuestionsInDb = \nano\core\db\ORM::getInstance()->getTable('Question', 'adm201')->countQuestions();
    for ($i = 0; $i < $numQuestions; $i++) {
      $seeded = false;
      while ($seeded == false) {
        $id = rand(1, $totalQuestionsInDb);
        if (!in_array($id, $chosen)) {
          $record = \nano\core\db\ORM::getInstance()->getTable('Question', 'adm201')->retrieveByPk($id);
          if ($record) {
            $chosen[] = $id;
            $seeded = true;
          }
        }
      }
    }
    return $chosen;
  }
}