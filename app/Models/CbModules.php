<?php
namespace App\Models;

use DB;
use Crocodicstudio\Cbmodel\Core\Model;

class CbModules extends Model
{
    public static $tableName = "cb_modules";

    public static $connection = "mysql";

    
	private $id;
	private $name;
	private $icon;
	private $table_name;
	private $controller;
	private $last_column_build;


    
	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public static function findAllByName($value) {
		return static::simpleQuery()->where('name',$value)->get();
	}

	public static function findByName($value) {
		return static::findBy('name',$value);
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public static function findAllByIcon($value) {
		return static::simpleQuery()->where('icon',$value)->get();
	}

	public static function findByIcon($value) {
		return static::findBy('icon',$value);
	}

	public function getIcon() {
		return $this->icon;
	}

	public function setIcon($icon) {
		$this->icon = $icon;
	}

	public static function findAllByTableName($value) {
		return static::simpleQuery()->where('table_name',$value)->get();
	}

	public static function findByTableName($value) {
		return static::findBy('table_name',$value);
	}

	public function getTableName() {
		return $this->table_name;
	}

	public function setTableName($table_name) {
		$this->table_name = $table_name;
	}

	public static function findAllByController($value) {
		return static::simpleQuery()->where('controller',$value)->get();
	}

	public static function findByController($value) {
		return static::findBy('controller',$value);
	}

	public function getController() {
		return $this->controller;
	}

	public function setController($controller) {
		$this->controller = $controller;
	}

	public static function findAllByLastColumnBuild($value) {
		return static::simpleQuery()->where('last_column_build',$value)->get();
	}

	public static function findByLastColumnBuild($value) {
		return static::findBy('last_column_build',$value);
	}

	public function getLastColumnBuild() {
		return $this->last_column_build;
	}

	public function setLastColumnBuild($last_column_build) {
		$this->last_column_build = $last_column_build;
	}


}