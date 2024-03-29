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
 * BaseAnswer class 
 * 
 * BaseAnswer
 * 
 * @author Christopher Beck <cwbeck@gmail.com>
 * @version SVN: $id
 * @package adm201
 * @subpackage base
 */
class BaseAnswer extends \nano\core\db\om\Base {

	protected $modelName = 'Answer';
	protected $primaryKey = array('id');
	protected $dbConfig = 'default';
	protected $dbName = 'adm201';
	protected $tableName = 'Answers';
	protected $fields = array(
		'id' => array(
			'mysql_type' => 'int(11) unsigned',
			'mysql_is_null' => 'NO',
			'mysql_key' => 'PRI',
			'mysql_default' => '',
			'mysql_extra' => 'auto_increment',
			'is_foreign_reference' => false,
			'use_model' => 'Answer',
			'use_database' => 'adm201',
			'set_function' => 'setId',
			'validation_function' => 'validateId',
			'get_function' => 'getId',
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
		'answer' => array(
			'mysql_type' => 'mediumtext',
			'mysql_is_null' => 'NO',
			'mysql_key' => '',
			'mysql_default' => '',
			'mysql_extra' => '',
			'is_foreign_reference' => false,
			'use_model' => 'Answer',
			'use_database' => 'adm201',
			'set_function' => 'setAnswer',
			'validation_function' => 'validateAnswer',
			'get_function' => 'getAnswer',
		),
		'is_correct' => array(
			'mysql_type' => 'tinyint(1)',
			'mysql_is_null' => 'NO',
			'mysql_key' => '',
			'mysql_default' => '0',
			'mysql_extra' => '',
			'is_foreign_reference' => false,
			'use_model' => 'Answer',
			'use_database' => 'adm201',
			'set_function' => 'setIsCorrect',
			'validation_function' => 'validateIsCorrect',
			'get_function' => 'getIsCorrect',
		),
		'match_order' => array(
			'mysql_type' => 'int(11)',
			'mysql_is_null' => 'NO',
			'mysql_key' => '',
			'mysql_default' => '0',
			'mysql_extra' => '',
			'is_foreign_reference' => false,
			'use_model' => 'Answer',
			'use_database' => 'adm201',
			'set_function' => 'setMatchOrder',
			'validation_function' => 'validateMatchOrder',
			'get_function' => 'getMatchOrder',
		),
		'alpha' => array(
			'mysql_type' => 'varchar(50)',
			'mysql_is_null' => 'YES',
			'mysql_key' => '',
			'mysql_default' => '',
			'mysql_extra' => '',
			'is_foreign_reference' => false,
			'use_model' => 'Answer',
			'use_database' => 'adm201',
			'set_function' => 'setAlpha',
			'validation_function' => 'validateAlpha',
			'get_function' => 'getAlpha',
		)
	);
	protected $newFieldNameMap = array(
		'id' => 'id',
		'Question' => 'Question',
		'answer' => 'answer',
		'is_correct' => 'is_correct',
		'match_order' => 'match_order',
		'alpha' => 'alpha'
	);
	public function setId($value){
		if(\project\db\om\adm201\Answer::validateId($value)){
			$this->id = $value;
		} else {
			throw new \nano\core\exception\ValidationException('Validation of column `id` failed');
		}
	}
	public function setQuestion($value){
		if(\project\db\om\adm201\Answer::validateQuestion($value)){
			$this->Question = $value;
		} else {
			throw new \nano\core\exception\ValidationException('Validation of column `Question` failed');
		}
	}
	public function setAnswer($value){
		if(\project\db\om\adm201\Answer::validateAnswer($value)){
			$this->answer = $value;
		} else {
			throw new \nano\core\exception\ValidationException('Validation of column `answer` failed');
		}
	}
	public function setIsCorrect($value){
		if(\project\db\om\adm201\Answer::validateIsCorrect($value)){
			$this->is_correct = $value;
		} else {
			throw new \nano\core\exception\ValidationException('Validation of column `is_correct` failed');
		}
	}
	public function setMatchOrder($value){
		if(\project\db\om\adm201\Answer::validateMatchOrder($value)){
			$this->match_order = $value;
		} else {
			throw new \nano\core\exception\ValidationException('Validation of column `match_order` failed');
		}
	}
	public function setAlpha($value){
		if(\project\db\om\adm201\Answer::validateAlpha($value)){
			$this->alpha = $value;
		} else {
			throw new \nano\core\exception\ValidationException('Validation of column `alpha` failed');
		}
	}
	public function getId(){
		return $this->id;
	}
	public function getQuestion(){
		return $this->Question;
	}
	public function getAnswer(){
		return $this->answer;
	}
	public function getIsCorrect(){
		return $this->is_correct;
	}
	public function getMatchOrder(){
		return $this->match_order;
	}
	public function getAlpha(){
		return $this->alpha;
	}
	public static function validateId($value){
		return true;
	}
	public static function validateQuestion($value){
		return true;
	}
	public static function validateAnswer($value){
		return true;
	}
	public static function validateIsCorrect($value){
		return true;
	}
	public static function validateMatchOrder($value){
		return true;
	}
	public static function validateAlpha($value){
		return true;
	}
	
}