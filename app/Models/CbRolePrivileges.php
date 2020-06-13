<?php
namespace App\Models;

use DB;
use Crocodicstudio\Cbmodel\Core\Model;

class CbRolePrivileges extends Model
{
    public static $tableName = "cb_role_privileges";

    public static $connection = "mysql";

    
	private $id;
	private $cb_roles_id;
	private $cb_menus_id;
	private $can_browse;
	private $can_create;
	private $can_read;
	private $can_update;
	private $can_delete;


    
	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public static function findAllByCbRolesId($value) {
		return static::simpleQuery()->where('cb_roles_id',$value)->get();
	}

	public static function findByCbRolesId($value) {
		return static::findBy('cb_roles_id',$value);
	}

	public function getCbRolesId() {
		return $this->cb_roles_id;
	}

	public function setCbRolesId($cb_roles_id) {
		$this->cb_roles_id = $cb_roles_id;
	}

	public static function findAllByCbMenusId($value) {
		return static::simpleQuery()->where('cb_menus_id',$value)->get();
	}

	/**
	* @return CbMenus
	*/
	public function getCbMenusId() {
		return CbMenus::findById($this->cb_menus_id);
	}

	public function setCbMenusId($cb_menus_id) {
		$this->cb_menus_id = $cb_menus_id;
	}

	public static function findAllByCanBrowse($value) {
		return static::simpleQuery()->where('can_browse',$value)->get();
	}

	public static function findByCanBrowse($value) {
		return static::findBy('can_browse',$value);
	}

	public function getCanBrowse() {
		return $this->can_browse;
	}

	public function setCanBrowse($can_browse) {
		$this->can_browse = $can_browse;
	}

	public static function findAllByCanCreate($value) {
		return static::simpleQuery()->where('can_create',$value)->get();
	}

	public static function findByCanCreate($value) {
		return static::findBy('can_create',$value);
	}

	public function getCanCreate() {
		return $this->can_create;
	}

	public function setCanCreate($can_create) {
		$this->can_create = $can_create;
	}

	public static function findAllByCanRead($value) {
		return static::simpleQuery()->where('can_read',$value)->get();
	}

	public static function findByCanRead($value) {
		return static::findBy('can_read',$value);
	}

	public function getCanRead() {
		return $this->can_read;
	}

	public function setCanRead($can_read) {
		$this->can_read = $can_read;
	}

	public static function findAllByCanUpdate($value) {
		return static::simpleQuery()->where('can_update',$value)->get();
	}

	public static function findByCanUpdate($value) {
		return static::findBy('can_update',$value);
	}

	public function getCanUpdate() {
		return $this->can_update;
	}

	public function setCanUpdate($can_update) {
		$this->can_update = $can_update;
	}

	public static function findAllByCanDelete($value) {
		return static::simpleQuery()->where('can_delete',$value)->get();
	}

	public static function findByCanDelete($value) {
		return static::findBy('can_delete',$value);
	}

	public function getCanDelete() {
		return $this->can_delete;
	}

	public function setCanDelete($can_delete) {
		$this->can_delete = $can_delete;
	}


}