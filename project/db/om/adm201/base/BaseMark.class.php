<?php
/*************************************************************************************************************************
**************************************************************************************************************************
**************************************************************************************************************************

WARNING!!!

THIS FILE SHOULD NOT BE EDITED - IT WILL BE AUTOGENERATED EACH TIME THE MODELS ARE BUILT!

OVERRIDE SETTINGS IN MODEL NOT THE BASEMODEL

**************************************************************************************************************************
**************************************************************************************************************************
*************************************************************************************************************************/

namespace project\db\om\adm201\base;

/**
 * BaseMark class 
 * 
 * BaseMark
 * 
 * @author Christopher Beck <cwbeck@gmail.com>
 * @version SVN: $id
 * @package adm201
 * @subpackage base
 */
class BaseMark extends \nano\core\db\om\Base {

	protected $modelName = 'Mark';
	protected $primaryKey = array('id');
	protected $dbConfig = 'default';
	protected $dbName = 'adm201';
	protected $tableName = 'Marks';
	protected $fields = array(
		'id' => array(
			'mysql_type' => 'int(11) unsigned',
			'mysql_is_null' => 'NO',
			'mysql_key' => 'PRI',
			'mysql_default' => '',
			'mysql_extra' => 'auto_increment',
			'is_foreign_reference' => false,
			'use_model' => 'Mark',
			'use_database' => 'adm201',
			'set_function' => 'setId',
			'validation_function' => 'validateId',
			'get_function' => 'getId',
		),
		'Round' => array(
			'mysql_type' => 'int(11) unsigned',
			'mysql_is_null' => 'NO',
			'mysql_key' => '',
			'mysql_default' => '',
			'mysql_extra' => '',
			'is_foreign_reference' => true,
			'use_model' => 'Round',
			'use_database' => 'adm201',
			'set_function' => 'setRound',
			'validation_function' => 'validateRound',
			'get_function' => 'getRound',
		),
		'Question' => array(
			'mysql_type' => 'int(11)',
			'mysql_is_null' => 'NO',
			'mysql_key' => '',
			'mysql_default' => '',
			'mysql_extra' => '',
			'is_foreign_reference' => true,
			'use_model' => 'Question',
			'use_database' => 'adm201',
			'set_function' => 'setQuestion',
			'validation_function' => 'validateQuestion',
			'get_function' => 'getQuestion',
		),
		'answer_list' => array(
			'mysql_type' => 'varchar(1024)',
			'mysql_is_null' => 'YES',
			'mysql_key' => '',
			'mysql_default' => '',
			'mysql_extra' => '',
			'is_foreign_reference' => false,
			'use_model' => 'Mark',
			'use_database' => 'adm201',
			'set_function' => 'setAnswerList',
			'validation_function' => 'validateAnswerList',
			'get_function' => 'getAnswerList',
		),
		'is_correct' => array(
			'mysql_type' => 'tinyint(1)',
			'mysql_is_null' => 'YES',
			'mysql_key' => '',
			'mysql_default' => '',
			'mysql_extra' => '',
			'is_foreign_reference' => false,
			'use_model' => 'Mark',
			'use_database' => 'adm201',
			'set_function' => 'setIsCorrect',
			'validation_function' => 'validateIsCorrect',
			'get_function' => 'getIsCorrect',
		),
		'is_flagged' => array(
			'mysql_type' => 'tinyint(1)',
			'mysql_is_null' => 'NO',
			'mysql_key' => '',
			'mysql_default' => '0',
			'mysql_extra' => '',
			'is_foreign_reference' => false,
			'use_model' => 'Mark',
			'use_database' => 'adm201',
			'set_function' => 'setIsFlagged',
			'validation_function' => 'validateIsFlagged',
			'get_function' => 'getIsFlagged',
		)
	);
	protected $newFieldNameMap = array(
		'id' => 'id',
		'Round' => 'Round',
		'Question' => 'Question',
		'answer_list' => 'answer_list',
		'is_correct' => 'is_correct',
		'is_flagged' => 'is_flagged'
	);
	public function setId($value){
		if(\project\db\om\adm201\Mark::validateId($value)){
			$this->id = $value;
		} else {
			throw new \nano\core\exception\ValidationException('Validation of column `id` failed');
		}
	}
	public function setRound($value){
		if(\project\db\om\adm201\Mark::validateRound($value)){
			$this->Round = $value;
		} else {
			throw new \nano\core\exception\ValidationException('Validation of column `Round` failed');
		}
	}
	public function setQuestion($value){
		if(\project\db\om\adm201\Mark::validateQuestion($value)){
			$this->Question = $value;
		} else {
			throw new \nano\core\exception\ValidationException('Validation of column `Question` failed');
		}
	}
	public function setAnswerList($value){
		if(\project\db\om\adm201\Mark::validateAnswerList($value)){
			$this->answer_list = $value;
		} else {
			throw new \nano\core\exception\ValidationException('Validation of column `answer_list` failed');
		}
	}
	public function setIsCorrect($value){
		if(\project\db\om\adm201\Mark::validateIsCorrect($value)){
			$this->is_correct = $value;
		} else {
			throw new \nano\core\exception\ValidationException('Validation of column `is_correct` failed');
		}
	}
	public function setIsFlagged($value){
		if(\project\db\om\adm201\Mark::validateIsFlagged($value)){
			$this->is_flagged = $value;
		} else {
			throw new \nano\core\exception\ValidationException('Validation of column `is_flagged` failed');
		}
	}
	public function getId(){
		return $this->id;
	}
	public function getRound(){
		return $this->Round;
	}
	public function getQuestion(){
		return $this->Question;
	}
	public function getAnswerList(){
		return $this->answer_list;
	}
	public function getIsCorrect(){
		return $this->is_correct;
	}
	public function getIsFlagged(){
		return $this->is_flagged;
	}
	public static function validateId($value){
		return true;
	}
	public static function validateRound($value){
		return true;
	}
	public static function validateQuestion($value){
		return true;
	}
	public static function validateAnswerList($value){
		return true;
	}
	public static function validateIsCorrect($value){
		return true;
	}
	public static function validateIsFlagged($value){
		return true;
	}
	
}