<?php
namespace project\db\om\adm201;

/**
 * AnswerTable class 
 * 
 * AnswerTable
 * 
 * @author Christopher Beck <cwbeck@gmail.com>
 * @version SVN: $id
 * @package om
 * @subpackage adm201
 */
class AnswerTable extends \project\db\om\adm201\base\BaseAnswerTable {
  public function findAnswersByQuestionId($questionId) {
    $query = new \nano\core\db\core\SelectQuery();
    $query->from('Answers')->where('`Answers`.`Question` = "' . addslashes($questionId) . '" ORDER BY id DESC');
    $results = $this->doSelect($query);
    $answers = array();
    foreach ($results as $item) {
      $answers[] = $item['Answer'];
    }
    return $answers;
  }
}