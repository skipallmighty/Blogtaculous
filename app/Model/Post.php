<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 */
class Post extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'post';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

}
