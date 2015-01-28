<?php
namespace  Model\Db\Table;
use Model\Db\Table\TableAbstract;

class Post extends TableAbstract{
	protected $_rowClass = 'Model\Post';
	protected  $_name = "posts";
	
}