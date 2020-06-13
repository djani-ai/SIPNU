<?php
namespace App\Models;

use DB;
use Crocodicstudio\Cbmodel\Core\Model;

class CbMenus extends Model
{
    public static $tableName = "cb_menus";

    public static $connection = "mysql";

    
	private $id;
	private $name;
	private $icon;
	private $path;
	private $type;
	private $sort_number;
	private $cb_modules_id;
	private $parent_cb_menus_id;


    
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

	public static function findAllByPath($value) {
		return static::simpleQuery()->where('path',$value)->get();
	}

	public static function findByPath($value) {
		return static::findBy('path',$value);
	}

	public function getPath() {
		return $this->path;
	}

	public function setPath($path) {
		$this->path = $path;
	}

	public static function findAllByType($value) {
		return static::simpleQuery()->where('type',$value)->get();
	}

	public static function findByType($value) {
		return static::findBy('type',$value);
	}

	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
	}

	public static function findAllBySortNumber($value) {
		return static::simpleQuery()->where('sort_number',$value)->get();
	}

	public static function findBySortNumber($value) {
		return static::findBy('sort_number',$value);
	}

	public function getSortNumber() {
		return $this->sort_number;
	}

	public function setSortNumber($sort_number) {
		$this->sort_number = $sort_number;
	}

	public static function findAllByCbModulesId($value) {
		return static::simpleQuery()->where('cb_modules_id',$value)->get();
	}

	public static function findByCbModulesId($value) {
		return static::findBy('cb_modules_id',$value);
	}

	public function getCbModulesId() {
		return $this->cb_modules_id;
	}

	public function setCbModulesId($cb_modules_id) {
		$this->cb_modules_id = $cb_modules_id;
	}

	public static function findAllByParentCbMenusId($value) {
		return static::simpleQuery()->where('parent_cb_menus_id',$value)->get();
	}

	public static function findByParentCbMenusId($value) {
		return static::findBy('parent_cb_menus_id',$value);
	}

	public function getParentCbMenusId() {
		return $this->parent_cb_menus_id;
	}

	public function setParentCbMenusId($parent_cb_menus_id) {
		$this->parent_cb_menus_id = $parent_cb_menus_id;
	}


}