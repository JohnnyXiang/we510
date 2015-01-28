<?php
namespace Model;
use Model\Db\Row\Row;

class Category extends Row{
	
	protected $_idFieldName = 'id';
	protected $_tableClass = "Model\Db\Table\Category";
}