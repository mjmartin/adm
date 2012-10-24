<?php
namespace project\db\om\adm201;

/**
 * QuestionTable class 
 * 
 * QuestionTable
 * 
 * @author Christopher Beck <cwbeck@gmail.com>
 * @version SVN: $id
 * @package om
 * @subpackage adm201
 */
class QuestionTable extends \project\db\om\adm201\base\BaseQuestionTable {
  public function countQuestions() {
    $result = $this->doRawSelect('SELECT count(id) as question_count FROM `Questions`');
    return $result[0]['question_count'];
  }
}