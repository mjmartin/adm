<?php
/*************************************************************************************************************************
**************************************************************************************************************************
**************************************************************************************************************************

WARNING!!! - THIS FILE SHOULD NOT BE EDITED - IT WILL BE AUTOGENERATED EACH TIME THE MODELS ARE BUILT!

**************************************************************************************************************************
**************************************************************************************************************************
*************************************************************************************************************************/
namespace project\db\om\adm201\map;

/**
 * Map class 
 * 
 * Map
 * 
 * @author Christopher Beck <cwbeck@gmail.com>
 * @version SVN: $id
 * @package adm201
 * @subpackage templates
 */
class Map {
	public static $tableNameToModelName = array(
		'Answers' => 'Answer',
		'Auths' => 'Auth',
		'Languages' => 'Language',
		'Marks' => 'Mark',
		'Questions' => 'Question',
		'Rounds' => 'Round',
		'Sampleset' => 'Sampleset',
		'Sessions' => 'Session',
		'Users' => 'User'
	);
	public static $modelNameToTableName = array(
		'Answer' => 'Answers',
		'Auth' => 'Auths',
		'Language' => 'Languages',
		'Mark' => 'Marks',
		'Question' => 'Questions',
		'Round' => 'Rounds',
		'Sampleset' => 'Sampleset',
		'Session' => 'Sessions',
		'User' => 'Users'
	);
	public static $mapTablesToColumns = array(
		'Answers' => array('id' => 'id','Question' => 'Question','answer' => 'answer','is_correct' => 'is_correct','match_order' => 'match_order','alpha' => 'alpha'),
		'Auths' => array('id' => 'id','type' => 'type','uid' => 'uid','fuid' => 'fuid','perams' => 'perams'),
		'Languages' => array('code' => 'code','key' => 'key','value' => 'value'),
		'Marks' => array('id' => 'id','Round' => 'Round','Question' => 'Question','answer_list' => 'answer_list','is_correct' => 'is_correct'),
		'Questions' => array('id' => 'id','question' => 'question','max_answers' => 'max_answers','tip' => 'tip','match_type' => 'match_type','Sampleset' => 'Sampleset'),
		'Rounds' => array('id' => 'id','round_start' => 'round_start','round_end' => 'round_end','correct' => 'correct','wrong' => 'wrong','created_at' => 'created_at'),
		'Sampleset' => array('id' => 'id','notes' => 'notes','url' => 'url','date_collected' => 'date_collected'),
		'Sessions' => array('id' => 'id','User' => 'User','token' => 'token','ip' => 'ip','created' => 'created'),
		'Users' => array('id' => 'id','language' => 'language','email' => 'email','password' => 'password','is_active' => 'is_active','is_admin' => 'is_admin','is_super_admin' => 'is_super_admin','created_at' => 'created_at','updated_at' => 'updated_at')
	);

	public static function getModelNameFromTableName($tableName){
		return isset(self::$tableNameToModelName[$tableName])? self::$tableNameToModelName[$tableName] : null;
	}
	
	public static function getTableNameFromModelName($modelName){
		return isset(self::$modelNameToTableName[$modelName])? self::$modelNameToTableName[$modelName] : null;
	}
}