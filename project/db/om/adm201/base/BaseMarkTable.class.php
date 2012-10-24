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
 * BaseMarkTable class 
 * 
 * BaseMarkTable
 * 
 * @author Christopher Beck <cwbeck@gmail.com>
 * @version SVN: $id
 * @package adm201
 * @subpackage base
 */
class BaseMarkTable extends \nano\core\db\om\BaseTable {

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

	public function retrieveByPk($id) {
		$query = new \nano\core\db\core\SelectQuery();
		$query->from('Marks')->where('`Marks`.`id` = "'.addslashes($id).'" LIMIT 1');
		$results = $this->doSelect($query);
		return isset($results[0]['Mark'])? $results[0]['Mark'] : null;
	}

}