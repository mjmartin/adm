<?php
namespace project\db\om\adm201;

/**
 * Question class 
 * 
 * Question
 * 
 * @author Christopher Beck <cwbeck@gmail.com>
 * @version SVN: $id
 * @package om
 * @subpackage adm201
 */
class Question extends \project\db\om\adm201\base\BaseQuestion {
  public function getAnswers() {
      return \nano\core\db\ORM::getInstance()->getTable('Answer', 'adm201')->findAnswersByQuestionId($this->getId());
  }
}