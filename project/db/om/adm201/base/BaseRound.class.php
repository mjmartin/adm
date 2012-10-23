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
 * BaseRound class 
 * 
 * BaseRound
 * 
 * @author Christopher Beck <cwbeck@gmail.com>
 * @version SVN: $id
 * @package adm201
 * @subpackage base
 */
class BaseRound extends \nano\core\db\om\Base {

	protected $modelName = 'Round';
	protected $primaryKey = array('id');
	protected $dbConfig = 'default';
	protected $dbName = 'adm201';
	protected $tableName = 'Rounds';
	protected $fields = array(
		'id' => array(
			'mysql_type' => 'int(11) unsigned',
			'mysql_is_null' => 'NO',
			'mysql_key' => 'PRI',
			'mysql_default' => '',
			'mysql_extra' => 'auto_increment',
			'is_foreign_reference' => false,
			'use_model' => 'Round',
			'use_database' => 'adm201',
			'set_function' => 'setId',
			'validation_function' => 'validateId',
			'get_function' => 'getId',
		),
		'round_start' => array(
			'mysql_type' => 'datetime',
			'mysql_is_null' => 'NO',
			'mysql_key' => '',
			'mysql_default' => '',
			'mysql_extra' => '',
			'is_foreign_reference' => false,
			'use_model' => 'Round',
			'use_database' => 'adm201',
			'set_function' => 'setRoundStart',
			'validation_function' => 'validateRoundStart',
			'get_function' => 'getRoundStart',
		),
		'round_end' => array(
			'mysql_type' => 'datetime',
			'mysql_is_null' => 'NO',
			'mysql_key' => '',
			'mysql_default' => '',
			'mysql_extra' => '',
			'is_foreign_reference' => false,
			'use_model' => 'Round',
			'use_database' => 'adm201',
			'set_function' => 'setRoundEnd',
			'validation_function' => 'validateRoundEnd',
			'get_function' => 'getRoundEnd',
		),
		'correct' => array(
			'mysql_type' => 'int(11)',
			'mysql_is_null' => 'NO',
			'mysql_key' => '',
			'mysql_default' => '0',
			'mysql_extra' => '',
			'is_foreign_reference' => false,
			'use_model' => 'Round',
			'use_database' => 'adm201',
			'set_function' => 'setCorrect',
			'validation_function' => 'validateCorrect',
			'get_function' => 'getCorrect',
		),
		'wrong' => array(
			'mysql_type' => 'int(11)',
			'mysql_is_null' => 'NO',
			'mysql_key' => '',
			'mysql_default' => '0',
			'mysql_extra' => '',
			'is_foreign_reference' => false,
			'use_model' => 'Round',
			'use_database' => 'adm201',
			'set_function' => 'setWrong',
			'validation_function' => 'validateWrong',
			'get_function' => 'getWrong',
		)
	);
	protected $newFieldNameMap = array(
		'id' => 'id',
		'round_start' => 'round_start',
		'round_end' => 'round_end',
		'correct' => 'correct',
		'wrong' => 'wrong'
	);
	public function setId($value){
		if(\project\db\om\adm201\Round::validateId($value)){
			$this->id = $value;
		} else {
			throw new \nano\core\exception\ValidationException('Validation of column `id` failed');
		}
	}
	public function setRoundStart($value){
		if(\project\db\om\adm201\Round::validateRoundStart($value)){
			$this->round_start = $value;
		} else {
			throw new \nano\core\exception\ValidationException('Validation of column `round_start` failed');
		}
	}
	public function setRoundEnd($value){
		if(\project\db\om\adm201\Round::validateRoundEnd($value)){
			$this->round_end = $value;
		} else {
			throw new \nano\core\exception\ValidationException('Validation of column `round_end` failed');
		}
	}
	public function setCorrect($value){
		if(\project\db\om\adm201\Round::validateCorrect($value)){
			$this->correct = $value;
		} else {
			throw new \nano\core\exception\ValidationException('Validation of column `correct` failed');
		}
	}
	public function setWrong($value){
		if(\project\db\om\adm201\Round::validateWrong($value)){
			$this->wrong = $value;
		} else {
			throw new \nano\core\exception\ValidationException('Validation of column `wrong` failed');
		}
	}
	public function getId(){
		return $this->id;
	}
	public function getRoundStart(){
		return $this->round_start;
	}
	public function getRoundEnd(){
		return $this->round_end;
	}
	public function getCorrect(){
		return $this->correct;
	}
	public function getWrong(){
		return $this->wrong;
	}
	public static function validateId($value){
		return true;
	}
	public static function validateRoundStart($value){
		return true;
	}
	public static function validateRoundEnd($value){
		return true;
	}
	public static function validateCorrect($value){
		return true;
	}
	public static function validateWrong($value){
		return true;
	}
	
}