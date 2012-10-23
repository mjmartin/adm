<?php

namespace project\apps\adm;

/**
 * Routing class 
 * 
 * Routing
 * 
 * @author Christopher Beck <cwbeck@gmail.com>
 * @version SVN: $id
 * @package projects
 * @subpackage adm
 */
class Routing {

  public static $routing = array(
    /*
      ROUTING FOR PROJECT 'adm'
     */
    // 'example_page' => array // 'example_page' - this should be a unique name. Use prefixes :)
    // (
    // 	'url' => '/example_page', //This is the url to match, must start with '/' | Slugs = /:bla/ | Otherwise regex format
    // 	//Slugs appear in the $_GET global var.
    // 	'requirements' => array( //Matches the slugs provided in the URL (regex format) (NOT REQUIRED ATTRIBUTE)
    // 		'id' => '\d+',
    // 		'type' => '\w+'
    // 	),
    // 	'class' => 'project\apps\adm\Example' //The class to load if a match... Will not continue to next rule.
    // )
    'index_page' => array // 'example_page' - this should be a unique name. Use prefixes :)
      (
      'url' => '[/]?',
      'class' => 'project\apps\adm\pages\index\Index' //The class to load if a match... Will not continue to next rule.
    ),
    'question' => array
      (
      'url' => '/q/:questionid',
      'class' => 'project\apps\adm\pages\question\Question',
//      'controller_class' => 'project\apps\www\controllers\AdminController',
      'requirements' => array(
        'questionid' => '\d+',
      ),
    ),
    'round' => array
      (
      'url' => '/r/:roundid/:questionid',
      'class' => 'project\apps\adm\pages\round\Round',
      'requirements' => array(
        'roundid' => '\d+',
        )
      ),
    'round_index' => array
      (
      'url' => '/r/:roundid',
      'class' => 'project\apps\adm\pages\round\Round',
      'requirements' => array(
        'roundid' => '\d+',
        )
      ),
  );

}