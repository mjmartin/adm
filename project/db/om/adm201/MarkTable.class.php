<?php
namespace project\db\om\adm201;

/**
 * MarkTable class 
 * 
 * MarkTable
 * 
 * @author Christopher Beck <cwbeck@gmail.com>
 * @version SVN: $id
 * @package om
 * @subpackage adm201
 */
class MarkTable extends \project\db\om\adm201\base\BaseMarkTable {

  /**
   * Marks a round based on the answers on the Marks table
   * @param \project\db\om\adm201\Round $round
   * @return \project\db\om\adm201\Round
   */
  public function markRound(\project\db\om\adm201\Round $round) {
    $questionsInRound = (int)$this->countQuestionsInRound($round->getId());
    $query = new \nano\core\db\core\SelectQuery();
    $query->from('Marks')->where('Marks.is_correct=1');
    $results = $this->doSelect($query);
    $correct = count($results);
    $round->setCorrect($correct);
    $unansweredQuestions = (int)$this->countUnansweredQuestionsInRound($round->getId());
    $round->setUnanswered($unansweredQuestions);
    $wrong = $questionsInRound - $correct - $unansweredQuestions;
    $round->setWrong($wrong);
    return $round;
  }
  
  public function countUnansweredQuestionsInRound($roundId) {
    if (!is_numeric($roundId)) {
      throw new \Exception('roundid needs to be a number');
    }
    $result = $this->doRawSelect('SELECT count(id) as question_count FROM `Marks` WHERE is_correct IS NULL AND Round='.$roundId);
    return $result[0]['question_count'];
  }
  
  public function countQuestionsInRound($roundId) {
    if (!is_numeric($roundId)) {
      throw new \Exception('roundid needs to be a number');
    }
    $result = $this->doRawSelect('SELECT count(id) as question_count FROM `Marks` WHERE Round='.$roundId);
    return $result[0]['question_count'];
  }
  
  public function countFlaggedQuestionsInRound($roundId) {
    if (!is_numeric($roundId)) {
      throw new \Exception('roundid needs to be a number');
    }
    $result = $this->doRawSelect('SELECT count(id) as question_count FROM `Marks` WHERE is_flagged=1 AND Round='.$roundId);
    return $result[0]['question_count'];
  }
  
}