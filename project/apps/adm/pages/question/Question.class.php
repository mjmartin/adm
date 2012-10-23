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
		$this->headerWidget->setTitle('Example Index Page');
                $this->questionId = $routing->getRequest()->getParameter('questionid');
                $this->question = \nano\core\db\ORM::getInstance()->getTable('Question', 'adm201')->retrieveByPk($this->questionId);
                $answers = $this->question->getAnswers();
                $this->answers = '';
                foreach ($answers as $answer) {
                  // put into a answer container widget
                  $answerWidget = new \project\apps\adm\widgets\answer\Answer();
                  $answerWidget->question = $this->question;
                  $answerWidget->answer = $answer;
                  $this->answers .= $answerWidget->getRenderedWidget();
                }
                
		return 'project/apps/adm/pages/question/views/question.twig';
	}
}