<?php
namespace App\Models;

use DB;
use Crocodicstudio\Cbmodel\Core\Model;

class Tesdata extends Model
{
    public static $tableName = "tesdata";

    public static $connection = "mysql";

    
	private $created_at;
	private $updated_at;
	private $id;
	private $nama;


    
	public static function findAllByCreatedAt($value) {
		return static::simpleQuery()->where('created_at',$value)->get();
	}

	public static function findByCreatedAt($value) {
		return static::findBy('created_at',$value);
	}

	public function getCreatedAt() {
		return $this->created_at;
	}

	public function setCreatedAt($created_at) {
		$this->created_at = $created_at;
	}

	public static function findAllByUpdatedAt($value) {
		return static::simpleQuery()->where('updated_at',$value)->get();
	}

	public static function findByUpdatedAt($value) {
		return static::findBy('updated_at',$value);
	}

	public function getUpdatedAt() {
		return $this->updated_at;
	}

	public function setUpdatedAt($updated_at) {
		$this->updated_at = $updated_at;
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public static function findAllByNama($value) {
		return static::simpleQuery()->where('nama',$value)->get();
	}

	public static function findByNama($value) {
		return static::findBy('nama',$value);
	}

	public function getNama() {
		return $this->nama;
	}

	public function setNama($nama) {
		$this->nama = $nama;
	}


}