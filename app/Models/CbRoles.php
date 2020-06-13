<?php
namespace App\Models;

use DB;
use Crocodicstudio\Cbmodel\Core\Model;

class CbRoles extends Model
{
    public static $tableName = "cb_roles";

    public static $connection = "mysql";

    
	private $id;
	private $name;


    
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


}